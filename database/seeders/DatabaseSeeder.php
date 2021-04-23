<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family',
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work',
        ]);

        Post::create([
            'title' => 'My Personal Post',
            'slug' => 'my-personal-post',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing.',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium autem blanditiis cum dolore dolorem ea error excepturi exercitationem expedita fugit harum id incidunt iure labore laborum libero maxime minima neque obcaecati officia possimus provident rerum ullam unde, velit voluptatem voluptates! Architecto assumenda consequatur corporis delectus ipsam libero molestias nemo nulla perferendis, perspiciatis quia quo, recusandae tempore tenetur voluptates. Alias aliquam dolor dolorum officiis. Eius illo itaque molestiae pariatur, quam quidem voluptas! Ab aut distinctio enim esse, est maiores nihil, perspiciatis possimus quae repellendus sequi tenetur veniam voluptates? Eaque enim exercitationem maiores officia perspiciatis praesentium sunt suscipit ullam voluptate? Architecto delectus facilis optio praesentium quo, reiciendis veniam voluptates. Debitis ducimus eaque esse et exercitationem, illo inventore itaque laudantium nam quaerat! Dolor dolorum omnis temporibus? Eum officia quia sapiente! Architecto consectetur cum dolore ducimus eos est fugiat hic, impedit minus molestias numquam pariatur quia velit voluptatem?',
            'user_id' => $user->id,
            'category_id' => $personal->id,
        ]);

        Post::create([
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => 'Alias aliquam dolor dolorum officiis.',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium autem blanditiis cum dolore dolorem ea error excepturi exercitationem expedita fugit harum id incidunt iure labore laborum libero maxime minima neque obcaecati officia possimus provident rerum ullam unde, velit voluptatem voluptates! Architecto assumenda consequatur corporis delectus ipsam libero molestias nemo nulla perferendis, perspiciatis quia quo, recusandae tempore tenetur voluptates. Alias aliquam dolor dolorum officiis. Eius illo itaque molestiae pariatur, quam quidem voluptas! Ab aut distinctio enim esse, est maiores nihil, perspiciatis possimus quae repellendus sequi tenetur veniam voluptates? Eaque enim exercitationem maiores officia perspiciatis praesentium sunt suscipit ullam voluptate? Architecto delectus facilis optio praesentium quo, reiciendis veniam voluptates. Debitis ducimus eaque esse et exercitationem, illo inventore itaque laudantium nam quaerat! Dolor dolorum omnis temporibus? Eum officia quia sapiente! Architecto consectetur cum dolore ducimus eos est fugiat hic, impedit minus molestias numquam pariatur quia velit voluptatem?',
            'user_id' => $user->id,
            'category_id' => $work->id,
        ]);
    }
}
