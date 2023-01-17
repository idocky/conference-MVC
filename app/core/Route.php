<?php

class Route
{
    static function start()
    {
        // контроллер и действие по умолчанию
        $controller_name = 'Conference';
        $action_name = 'index';

        $routes = explode('/', $_SERVER['REQUEST_URI']);

        // получаем имя контроллера
        if ( !empty($routes[1]) )
        {
            $controller_name = $routes[1];
        }

        // получаем имя экшена
        if ( !empty($routes[2]) )
        {
            $action_name = $routes[2];
        }


        \app\core\Database::connect();

        // добавляем префиксы
        $model_name = $controller_name;
        $controller_name = $controller_name . 'Controller';

        // подцепляем файл с классом модели (файла модели может и не быть)

        $model_file = ucfirst(strtolower($model_name)).'.php';
        $model_path = "app/models/".$model_file;
        if(file_exists($model_path))
        {
            include "app/models/".$model_file;
        }

        // подцепляем файл с классом контроллера
        $controller_file = $controller_name.'.php';

        $controller_path = "app/controllers/".$controller_file;
        if(file_exists($controller_path))
        {
            include "app/controllers/" . $controller_file;
        }
//        else
//        {
//            Route::ErrorPage404();
//        }
        $controller_name = '\app\controllers\\'.$controller_name;

        // создаем контроллер
        $controller = new $controller_name();

        $action = $action_name;


        if(method_exists($controller, $action))
        {
            // вызываем действие контроллера
            $controller->$action();
        }
//        else
//        {
//            // здесь также разумнее было бы кинуть исключение
//            Route::ErrorPage404();
//        }

    }

    static function ErrorPage404()
    {
        $host = 'http://' . $_SERVER['HTTP_HOST'] . '/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:'.$host.'404');
    }
}