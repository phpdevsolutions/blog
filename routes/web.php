<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;


Route::get('/', [PostController::class, 'index'])->name('post.index');

Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
