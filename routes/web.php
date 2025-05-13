<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

// Public Routes
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

Route::get('/post/{id}', [PostController::class, 'show'])->name('post.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard/posts', [PostController::class, 'index'])->name('post.index');
    Route::get('/dashboard/posts/create', [PostController::class, 'create'])->name('post.create');
    Route::post('/dashboard/posts', [PostController::class, 'store'])->name('post.store');
    Route::get('/dashboard/posts/{id}/edit', [PostController::class, 'edit'])->name('post.edit');
    Route::put('/dashboard/posts/{id}', [PostController::class, 'update'])->name('post.update');
    Route::delete('/dashboard/posts/{id}', [PostController::class, 'destroy'])->name('post.destroy');
    Route::get('/dashboard/posts/{id}', [PostController::class, 'show'])->name('dashboard.post.show');
});

require __DIR__.'/auth.php';
