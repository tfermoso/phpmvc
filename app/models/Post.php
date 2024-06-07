<?php

namespace App\Models;

class Post
{
    public static function getAll()
    {
        return [
            ['id' => 1, 'title' => 'Post 1', 'content' => 'Content of post 1'],
            ['id' => 2, 'title' => 'Post 2', 'content' => 'Content of post 2'],
        ];
    }
}
