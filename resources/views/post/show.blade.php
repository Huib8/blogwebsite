<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Front Page</title>
    <link rel="stylesheet" href="public/style.css">
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
        <div class="max-w-3xl mx-auto p-6 bg-white mt-10 shadow rounded">
            <h1 class="text-3xl font-bold mb-4">{{ $post->title }}</h1>
            <div class="text-gray-700">
                {!! nl2br(e($post->content)) !!}
            </div>
        </div>
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
