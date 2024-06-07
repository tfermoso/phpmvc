<?php
namespace App\Controllers;




use App\Models\User;
use App\Models\Post;
use App\Models\Category;


class PostController
{
    public function list()

    {


        if (isset($_GET["cat"])) {
            $category_id = $_GET["cat"];
            // Obtener los posts de la categoría especificada, ordenar por ID descendente y tomar los 10 más recientes
            $posts = Post::whereHas('categories', function ($query) use ($category_id) {
                $query->where('category_id', $category_id);
            })
                ->with('user')
                ->orderBy('id', 'desc')
                ->take(10)
                ->get();
        } else {
            $posts = Post::with('user')->orderBy('id', 'desc')->take(10)->get();
        }
        $categories = Category::all();



        // Cargar la vista
        require '../app/views/post/index.php';
    }
}
