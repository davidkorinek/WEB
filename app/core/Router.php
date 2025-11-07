<?php

class Router
{
    public function route(array $params): void
    {
        $page = $params['page'] ?? 'home'; //defaultni stranka

        $controllerName = ucfirst($page) . 'Controller';
        $controllerFile = __DIR__ . '/../controllers/' . $controllerName . '.php';

        if (file_exists($controllerFile)) {
            require_once $controllerFile;
            $controller = new $controllerName();
            $controller->index();
        }
        else {
            http_response_code(404);
            echo "<h1>404 - Stranka nenalezena</h1>";
        }
    }
}