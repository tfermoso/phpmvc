<?php

namespace App\Controllers;

class UserController
{
    public function create()
    {

        if(isset($_POST["nombre"])){
            var_dump($_POST);
            exit();
        }
        // Cargar la vista
        require '../app/views/user/create_view.php';
    }
}

