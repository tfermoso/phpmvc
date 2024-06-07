<?php

require '../vendor/autoload.php';

//use App\Controllers\HomeController;

// Obtener la URL solicitada
$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : 'home/index';
$url = filter_var($url, FILTER_SANITIZE_URL);
$url = explode('/', $url);

// Determinar el controlador y la acción
$controllerName = ucfirst($url[0]) . 'Controller';
$action = isset($url[1]) ? $url[1] : 'index';

// Crear el controlador y llamar a la acción
$controllerPath = '../app/controllers/' . $controllerName . '.php';
if (file_exists($controllerPath)) {
    require $controllerPath;
    $controller = new $controllerName;
    if (method_exists($controller, $action)) {
        $controller->{$action}();
    } else {
        echo "La acción $action no existe.";
    }
} else {
    echo "El controlador $controllerName no existe.";
}
