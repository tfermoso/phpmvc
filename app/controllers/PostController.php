<?php

namespace App\Controllers;

class PostController
{
    public function list()
    {
        // Cargar la vista
        require '../app/views/post/index.php';
    }
}


