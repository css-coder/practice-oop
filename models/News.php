<?php
    class News
    {
        /**
         *  Получаем полную новость по id
         * @param integer $id
         */
        public static function getNewsItemById($id)
        {
            // Запрос к бд
            $db = Db::getConnection();
            $result = $db->query('SELECT * FROM news WHERE id=' . $id);

            /*$result->setFetchMode(PDO::FETCH_NUM);*/
            $result->setFetchMode(PDO::FETCH_ASSOC);

            $newsItem = $result->fetch();

            return $newsItem;
        }

        /**
         *  Получаем список новостей
         * @param array
         */
        public static function getNewsList()
        {
            // Запрос к бд
            $db = Db::getConnection();
            $newsList = array();

            $result = $db->query('SELECT id, title_h1, date, short_content FROM news ORDER BY id ASC LIMIT 10');

            $i = 0;
            while($row = $result->fetch()) {
                $newsList[$i]['id'] = $row['id'];
                $newsList[$i]['title_h1'] = $row['title_h1'];
                $newsList[$i]['date'] = $row['date'];
                $newsList[$i]['short_content'] = $row['short_content'];
                $i++;
            }

            return $newsList;
        }
    }