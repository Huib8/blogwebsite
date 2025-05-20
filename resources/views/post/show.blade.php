<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Front Page</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
<header>
    <div class="container">
        <h1>Mijn blog</h1>
        <p>Het delen van gedachten, verhalen, en ideën.</p>
    </div>
</header>

<div class="bottom-header">
    <div class="container">
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/verhalen">verhalen</a></li>
                <li><a href="/over-mij">over mij</a></li>
            </ul>
        </nav>
    </div>
</div>

<!-- Main Content -->
<main>
    <div class="container-show">
        <div class="">
            <h1 class="postTitle">{{ $post->title }}</h1>
            @if ($post->image_path)
                <div class="container-3">
                    <img src="{{ asset('storage/' . $post->image_path) }}" alt="Post Image" class="image-post">
                </div>
            @endif
            <div style="margin-top: 4vh">
                {!! nl2br(e($post->content)) !!}
            </div>
        </div>
    </div>
</main>
</body>
</html>
