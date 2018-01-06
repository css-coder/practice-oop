<?php

    class NewsController
    {
        public function actionIndex()
        {
            echo 'НОВОСТИ';
            return true;
        }

        public function actionView()
        {
            echo 'Просмотр одной новости';
            return true;
        }
    }