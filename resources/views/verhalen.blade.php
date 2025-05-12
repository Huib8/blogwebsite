<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Front Page</title>
    <link rel="stylesheet" href="style.css">
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
                <li><a href="#archive">contacteren</a></li>
            </ul>
        </nav>
    </div>
</div>

<!-- Main Content -->
<main>
    <div class="container">
        @forelse ($posts as $post)
            <article>
                <h2>{{ $post->title }}</h2>
                <p class="date">gepubliceerd {{ $post->created_at->format('d-m-Y') }}</p>
                <p>{{ \Illuminate\Support\Str::limit($post->content, 150) }}
                    <a href="{{ route('post.show', $post->id) }}">Read more...</a>
                </p>
            </article>
        @empty
            <p>Er zijn nog geen blogposts gepubliceerd.</p>
        @endforelse
    </div>
</main>

<!-- Footer -->
<footer>
    <div class="container">
        <p>&copy; 2025 Mijn Blog. Alle rechten voorbehouden.</p>
    </div>
</footer>
</body>
</html>
