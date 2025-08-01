<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use League\CommonMark\CommonMarkConverter; // ← 追加！
use Illuminate\Support\Str;

class Post
{
    public $title;
    public $excerpt;
    public $date;
    public $body;
    public $slug;

    public function __construct($title, $excerpt, $date, $body, $slug)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;
    }

    public static function all()
    {
        return cache()->rememberForever('posts.all', function () {
            $files = File::files(resource_path("posts"));

            $posts = collect($files)->map(function ($file) {
                $document = YamlFrontMatter::parseFile($file);

                $bodyMarkdown = $document->body();
                $converter = new CommonMarkConverter();

                return new Post(
                    $document->title,
                    Str::limit($bodyMarkdown, 100), // ← ここでプレーンなexcerpt生成
                    $document->date,
                    $converter->convertToHtml($bodyMarkdown), // ← 本文だけHTML変換
                    $document->slug
                );
            });

            return $posts->sortByDesc('date');
        });
    }

    public static function find($slug)
    {
        return static::all()->firstWhere('slug', $slug);
    }
}
