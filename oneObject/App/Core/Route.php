<?php


class Route
{

    static function stripURL($url)
    {
        $defaultController = "Index";

        $route = explode('/', $url);

        print_r($url);

        if ($route === '') {
            return $defaultController;
        } else {
            $controller = "";
            return $controller;
        }


    }

    static function start()
    {
        $controller = Route::stripURL($_SERVER['REQUEST_URI']);

        print_r($controller);
    }
}