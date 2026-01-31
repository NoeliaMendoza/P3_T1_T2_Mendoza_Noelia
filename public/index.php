<?php
require __DIR__ . '/../framework/Database.php';
$db = new Database();
$routes = require __DIR__ . '/../routes/web.php'; //Dirigue al sistema de rutas 
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$route = $routes[$requestUri] ?? null;
if ($route) {
    require __DIR__ . '/../' . $route;
} else {
    http_response_code(404);
    echo "404 Not Found";
}

//Primera pagina en redirecionarse 
//$SERVER -> Permite realizar peticiones, solo reconoce el formato JSON 
//REQUEST_URI -> Tio de peticion 
//Front controller es el punto de control, tiene acceso al sistema de rutas
