<?php

use App\Http\Controllers\HomeContentController;
use App\Http\Controllers\OvermijContentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Models\HomeContent;
use App\Models\OvermijContent;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

// Public Routes
Route::get('/', function () {
    $homeContent = HomeContent::first();
    return view('welcome', compact('homeContent'));
});

Route::get('/verhalen', function () {
    $posts = Post::latest()->get(); // or paginate(5)
    return view('verhalen', compact('posts'));
});

Route::get('/over-mij', function () {
    $overmijContent = OvermijContent::first();
    return view('over-mij', compact('overmijContent'));
});

Route::get('/post/{id}', [PostController::class, 'show'])->name('post.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware(['auth', 'admin'])->group(function (){
    Route::get('/dashboard/posts', [PostController::class, 'index'])->name('post.index');
    Route::get('/dashboard/posts/create', [PostController::class, 'create'])->name('post.create');
    Route::post('/dashboard/posts', [PostController::class, 'store'])->name('post.store');
    Route::get('/dashboard/posts/{id}/edit', [PostController::class, 'edit'])->name('post.edit');
    Route::put('/dashboard/posts/{id}', [PostController::class, 'update'])->name('post.update');
    Route::delete('/dashboard/posts/{id}', [PostController::class, 'destroy'])->name('post.destroy');
    Route::get('/dashboard/posts/{id}', [PostController::class, 'show'])->name('dashboard.post.show');
    Route::get('/dashboard/home-content', [HomeContentController::class, 'edit'])->name('home.edit');
    Route::put('/dashboard/home-content', [HomeContentController::class, 'update'])->name('home.update');
    Route::get('/dashboard/overmij-content', [OvermijContentController::class, 'edit'])->name('overmij.edit');
    Route::put('/dashboard/overmij-content', [OvermijContentController::class, 'update'])->name('overmij.update');
});

require __DIR__.'/auth.php';
