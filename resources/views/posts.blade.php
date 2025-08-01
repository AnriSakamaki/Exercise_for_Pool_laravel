
<!doctype html>

<title>My Blog</title>
<link rel="stylesheet" href="/app.css">


<body>

    <header class="site-header">
        <h1><a href="/" class="site-title">My Blog</a></h1>
    </header>
    
    <?php foreach ($posts as $post) : ?>
        <article>
            <h1>
                <a href="/posts/<?= $post->slug; ?>">
                    <?= $post->title; ?>
                </a>
            </h1>
            <div>
                <?= $post->excerpt; ?>
            </div>
        </article>
    <?php endforeach; ?>
</body>
