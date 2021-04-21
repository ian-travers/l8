<?php

use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

Route::get('/', function () {
    $files = File::files(resource_path("posts"));

    $posts = collect($files)
        ->map(function ($file) {
            $document = YamlFrontMatter::parseFile($file);

            return new Post($document->title, $document->excerpt, $document->date, $document->body(), $document->slug);
        });

//    ddd($posts);

    return view('posts', [
        'posts' => $posts,
    ]);
});

Route::get('/posts/{post}', function ($slug) {
    return view('post', ['post' => Post::find($slug)]);
})->where('post', '[a-zA-Z\-_]+');
