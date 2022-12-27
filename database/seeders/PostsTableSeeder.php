<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'title' => 'post one',
                'excerpt' => 'summary of post one',
                'body' => 'body of post one',
                'image_path' => 'empty',
                'is_published' => false,
                'min_to_read' => 2,
            ],
            [
                'title' => 'post two',
                'excerpt' => 'summary of post two',
                'body' => 'body of post two',
                'image_path' => 'empty',
                'is_published' => false,
                'min_to_read' => 2,
            ]

        ];
        foreach ($posts as $key => $value){
            Post::create($value);
        }
    }
}
