@extends('layout')

@section('head')
    <link rel="stylesheet" href="/css/post.css">
@endsection

@section('content')
<div class="post-container">
    <article class="post-article">
        <h1 class="post-title">{{ $post->title }}</h1>
        <div class="post-body">
            {!! $post->body !!}
        </div>
        <div class="back-button">
            <button onclick="window.location.href='/'">← 一覧に戻る</button>
        </div>
    </article>
</div>
@endsection
