<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create(
            [
                'title' => 'London',
                'content' => 'Is the best city in the world....',
                'likes' => 18
            ]
        );


        Post::factory(10)->create();
        Post::factory(5)->create([
            'content' => 'I love to code'
        ]);
    }
}
