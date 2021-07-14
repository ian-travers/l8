<?php

use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('posts/{post:slug}', [PostController::class, 'show']);
Route::post('posts/{post:slug}/comments', [PostCommentsController::class, 'store']);

Route::group([
    'middleware' => 'guest',
], function () {
    Route::get('register', [RegisterController::class, 'create']);
    Route::post('register', [RegisterController::class, 'store']);
    Route::get('login', [SessionsController::class, 'create']);
    Route::post('login', [SessionsController::class, 'store']);
});

Route::group([
    'middleware' => 'auth',
], function () {
    Route::post('logout', [SessionsController::class, 'destroy']);
});

Route::get('ping', function () {
    $mailchimp = new \MailchimpMarketing\ApiClient();

    $mailchimp->setConfig([
        'apiKey' => config('services.mailchimp.key'),
        'server' => 'us6',
    ]);

    $response = $mailchimp->lists->addListMember('e7d8479f61', [
        'email_address' => 'mr.itpe@gmail.com',
        'status' => 'subscribed',
    ]);

    ddd($response);
});
