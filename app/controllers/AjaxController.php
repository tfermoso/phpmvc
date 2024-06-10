<?php

namespace App\Controllers;

use App\Models\Post;

class AjaxController
{
    public function posts()
    {
        if (isset($_POST["datos"])) {
            $busqueda = $_POST["datos"];
            $posts = Post::with('user')
                ->where('tittle', 'like', '%' . $busqueda . '%')
                ->orderBy('id', 'desc')
                ->get();
            $response = [
                'status' => 'success',
                'message' => 'Datos recibidos correctamente',
                'data' => $posts
            ];

            // Envía la respuesta JSON
            header('Content-Type: application/json');
            echo json_encode($response);
            exit();
        }
    }
}
