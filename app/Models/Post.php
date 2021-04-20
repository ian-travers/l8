<?php

namespace App\Models;


use Illuminate\Database\Eloquent\ModelNotFoundException;

class Post
{
    public static function find(string $slug)
    {
        if (!file_exists($path = resource_path("/posts/{$slug}.html") )) {
            throw new ModelNotFoundException();
        }

        return cache()->remember("posts.{$slug}", 3600, fn() => file_get_contents($path));
    }
}
