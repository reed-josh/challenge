<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lorem = 'Morbi semper sem in dapibus porttitor. Vestibulum faucibus nulla eu nulla bibendum, ut vestibulum justo eleifend. Suspendisse scelerisque neque ultrices quam ultricies dapibus. Morbi id accumsan velit. Quisque turpis magna, posuere non metus ac, vulputate ullamcorper massa. Aenean efficitur felis vitae fringilla cursus. Sed laoreet dui in tortor suscipit, vitae feugiat neque laoreet.';
        Post::create(['title' => 'Post 1', 'body' => $lorem]);
        Post::create(['title' => 'Post 2', 'body' => $lorem]);
        Post::create(['title' => 'Post 3', 'body' => $lorem]);
        Post::create(['title' => 'Post 4', 'body' => $lorem]);
    }
}
