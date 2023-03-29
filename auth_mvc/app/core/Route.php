<?php

namespace App\core;


class Route{
    public static function start(){
        $controllerClassName = 'home';
        $actionName = 'index';
        $model = null;
        $payload =[];

        $routes = explode('/', $_SERVER['REQUEST_URI']);
        
        // var_dump($routes);
        // die();

        if(!empty($routes[1])){
            $controllerClassName = $routes[1];
        }
        if(!empty($routes[2])){
            $actionName = $routes[2];
        }

        $controllerName = CONTROLLER_NAMESPACE.ucfirst($controllerClassName);
        $modelName = $controllerName;
        $modelFile = strtolower($controllerName).'.php';
        $modelPath = MODEL.$modelFile;
        if(file_exists($modelPath)){
            include_once MODEL.$modelFile;
            $model = new $modelName;
        }

        $controllerFile = ucfirst(strtolower($controllerClassName)).'.php';
        $controllerPath = CONTROLLER.$controllerFile;
        if(file_exists($controllerPath)){
            include_once CONTROLLER.$controllerFile;
        }
        else{
            Route::ErrorPage404();
        }

        $controller = new $controllerName($model);

        $action = $actionName;
        if(method_exists($controller, $action)){
            $controller->$action($payload);
        }
        else{
            Route::ErrorPage404();
        }

        // $printFile = array($controllerFile, $actionName);
        // var_dump($printFile);

    }

    public static function ErrorPage404(){

        // echo 'hi error';

        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:'.$host.'error');
    }
}
