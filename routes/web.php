<?php

use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('posts/{post:slug}', [PostController::class, 'show']);
Route::post('posts/{post:slug}/comments', [PostCommentsController::class, 'store']);

Route::post('newsletter', NewsletterController::class);

Route::group([
    'middleware' => 'guest',
], function () {
    Route::get('register', [RegisterController::class, 'create']);
    Route::post('register', [RegisterController::class, 'store']);
    Route::get('login', [SessionsController::class, 'create'])->name('login');
    Route::post('login', [SessionsController::class, 'store']);
});

Route::group([
    'middleware' => 'auth',
], function () {
    Route::post('logout', [SessionsController::class, 'destroy']);
});

Route::get('admin/post/create', [PostController::class, 'create'])->middleware(['auth', 'admin']);
