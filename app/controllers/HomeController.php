<?php

namespace App\Controllers;

class HomeController
{
    public function index()
    {
        // Cargar la vista
        require '../app/views/home/index.php';
    }
}


