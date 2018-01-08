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
            $result = $db->query('SELECT * FROM publication WHERE id=' . $id);

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

            $result = $db->query('SELECT id, title, date, short_content FROM publication ORDER BY id ASC LIMIT 10');

            $i = 0;
            while($row = $result->fetch()) {
                $newsList[$i]['id'] = $row['id'];
                $newsList[$i]['title'] = $row['title'];
                $newsList[$i]['date'] = $row['date'];
                $newsList[$i]['short_content'] = $row['short_content'];
                $i++;
            }

            return $newsList;
        }
    }