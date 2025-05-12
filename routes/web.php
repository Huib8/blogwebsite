<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/verhalen', function () {
    $posts = Post::latest()->get(); // or paginate(5)
    return view('verhalen', compact('posts'));
});

Route::get('/over-mij', function () {
    return view('over-mij');
});

Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
Route::post('/post', [PostController::class, 'store'])->name('post.store');
Route::get('/post/{id}', [PostController::class, 'show'])->name('post.show');
