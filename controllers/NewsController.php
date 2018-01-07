<?php

    include_once ROOT . '/models/News.php';

    class NewsController
    {
        public function actionIndex()
        {
            echo 'НОВОСТИ';
            return true;
        }

        public function actionView($category, $id)
        {
            echo '<br>' . $category;
            echo '<br>' . $id;

            return true;
        }
    }