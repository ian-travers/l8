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

Route::post('newsletter', function () {
    request()->validate([
        'email' => 'required|email',
    ]);

    $mailchimp = new \MailchimpMarketing\ApiClient();

    $mailchimp->setConfig([
        'apiKey' => config('services.mailchimp.key'),
        'server' => 'us6',
    ]);

    try {
        $mailchimp->lists->addListMember('e7d8479f61', [
            'email_address' => request('email'),
            'status' => 'subscribed',
        ]);
    } catch (Exception $e) {
        throw \Illuminate\Validation\ValidationException::withMessages([
            'email' => 'This email could not be added to our newsletter list.'
        ]);
    }


    return redirect('/')->with('success', 'You are now signed up for our newsletter! ');
});
