<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>My Blog</title>
    <link rel="stylesheet" href="{{ asset('app.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs" defer></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @yield('head')
</head>

<body class="layout-center">

    <header class="site-header">
        <h1>My Blog</h1>
    </header>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
