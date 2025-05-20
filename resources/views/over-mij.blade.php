<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Blog Front Page</title>
<link rel="stylesheet" href="{{ asset('style.css') }}">
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
    <div class="container2">
        <article>
            <h2>{{ $overmijContent->title ?? 'Introductie' }}</h2>
            <p>{{ $overmijContent->content ?? 'Welkom op mijn website...' }}</p>
        </article>
    </div>
</main>
</body>
</html>
