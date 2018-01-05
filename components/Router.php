<?php

    class Router
    {
        private $routes;

        public function __construct()
        {
            $routesPath = ROOT . '/config/routes.php';
            $this->routes = include($routesPath);
        }

        public function run()
        {
            // Получить строку запроса


            // Проверить наличие запроса в routes.php


            // Если есть совпадение, определить какой контроллер
            // и action обрабатывает запрос


            // Подключить файл класса-контроллера


            // Создать объект, вызвать метод (action)


        }
    }