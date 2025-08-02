@extends('layout')

@section('head')
    <link rel="stylesheet" href="/css/post.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
@endsection

@section('content')
<div class="post-container">
    <article class="post-article">
        <h1 class="post-title">{{ $post->title }}</h1>

        {{-- Alpine.jsを使って本文を開閉できるようにする --}}
        <div class="post-body" x-data="{ open: false }">
            <button @click="open = !open" style="margin-bottom: 1rem;">
                <span x-show="!open">▼ 本文を表示</span>
                <span x-show="open">▲ 本文を非表示</span>
            </button>

            <div x-show="open" x-transition>
                {!! $post->body !!}
            </div>
        </div>

        <div class="back-button">
            <button onclick="window.location.href='/'">← 一覧に戻る</button>
        </div>
    </article>
</div>
@endsection
