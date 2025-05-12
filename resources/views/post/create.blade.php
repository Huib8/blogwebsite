<!DOCTYPE html>
<html>
<head>
    <title>Create Blog Post</title>
</head>
<body>
<h1>Create New Post</h1>

<form method="POST" action="{{ route('post.store') }}">
    @csrf
    <input type="text" name="title" placeholder="Title" required><br><br>
    <textarea name="content" placeholder="Content" required></textarea><br><br>
    <button type="submit">Publish</button>
</form>
</body>
</html>
