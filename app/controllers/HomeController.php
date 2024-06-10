<?php

namespace App\Controllers;

class HomeController
{
    public function index()
    {
        if(isset($_POST["datos"])){
            $response = [
                'status' => 'success',
                'message' => 'Datos recibidos correctamente',
                'data' => [
                    'miInput' => "hola"
                ]
            ];
        
            // Envía la respuesta JSON
            header('Content-Type: application/json');
            echo json_encode($response);
        }
        // Cargar la vista
        require '../app/views/home/index.php';
    }
}


