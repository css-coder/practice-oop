<?php

    return array(

        'news/([a-z]+)/([0-9]+)' => 'news/view/$1/$2', // actionView в NewsController

        //'news/([0-9]+)' => 'news/view',  // actionView в NewsController
        'news' => 'news/index',  // actionIndex в NewsController
        'articles' => 'article/index',  // actionIndex в ArticleController
        'products' => 'product/list',  // actionList в ProductController
    );