<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'name' => 'john doe',
                'email' => 'john@example.com',
                'password' => bcrypt('password'),
                'post_id' => 1
            ]
        );

        $postIds = Post::all()->pluck('id')->toArray();

        foreach ($postIds as $post_id) User::factory()->create(compact('post_id'));
    }
}
