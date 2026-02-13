<?php
    class Route
    {
        public static function start()
        {
            // контроллер и действие по умолчанию
            $controller_name = 'main';
            $action_name = 'index';
            $routes = $_GET['url'];

            // var_dump($_SERVER['REQUEST_URI']);
            // echo "<br>";
            // var_dump($_GET['url']);
            // echo "<br>";

            // получаем имя контроллера
            if (!empty($routes))
            {
                $controller_name = $routes;
            }

            // добавляем префиксы
            $model_name = 'model_'.$controller_name;
            $controller_name = 'controller_'.$controller_name;
            $action_name = 'action_'.$action_name;

            // echo "Model: $model_name <br>";
            // echo "Controller: $controller_name <br>";
            // echo "Action: $action_name <br>";

            // подцепляем файл с классом модели (файла модели может и не быть)
            $model_file = strtolower($model_name).'.php';
            $model_path = "application/models/".$model_file;
            if(file_exists($model_path))
            {
                include "application/models/".$model_file;
            }
            // подцепляем файл с классом контроллера
            $controller_file = strtolower($controller_name).'.php';
            $controller_path = "application/controllers/".$controller_file;

            // echo "File: $controller_file <br>";
            // echo "Path: $controller_path <br>";

            if(file_exists($controller_path))
            {
                include "application/controllers/".$controller_file;
            }
            else
            {
                // $route = new Route(); 
                // $route()->ErrorPage404();
                (new Route())->ErrorPage404();
                // Route::ErrorPage404();
            }

            // создаем контроллер
            $controller = new $controller_name;
            $action = $action_name;
            if(method_exists($controller, $action))
            {
                // вызываем действие контроллера
                $controller->$action();
            }
            else
            {
                (new Route())->ErrorPage404();
                // Route::ErrorPage404();
            }
        }
        function ErrorPage404()
        {
            $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
            header('HTTP/1.1 404 Not Found');
            header("Status: 404 Not Found");
            header('Location:'.$host.'404');
        }
    }