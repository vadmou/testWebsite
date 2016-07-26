<html>
    <meta charset="UTF-8">
    <?php

    abstract class Publications {

        public $id;
        public $title;
        public $date;
        public $short_content;
        public $content;
        public $preview;
        public $author_name;
        public $type;

        abstract public function printItem();

        function __construct($row) {
            $this->id = $row['id'];
            $this->title = $row['title'];
            $this->date = $row['date'];
            $this->short_content = $row['short_content'];
            $this->content = $row['content'];
            $this->preview = $row['preview'];
            $this->author_name = $row['author_name'];
            $this->type = $row['type'];
        }

    }

    class NewsPublications extends Publications {

        public function printItem() {
            echo '<br>Новость: ' . $this->title;
            echo '<br>Дата: ' . $this->date;
            echo '<br>';
            echo '<br>Содержание новости: ' . $this->content;
            echo '<hr>';
        }

    }

    class ArticlePublications extends Publications {

        public function printItem() {
            echo '<br>Статья: ' . $this->title;
            echo '<br>Автор: ' . $this->author_name;
            echo '<br>';
            echo '<br>Содержание новости: ' . $this->content;
            echo '<hr>';
        }

    }

    class PhotoReportPublications extends Publications {

        public function printItem() {
            echo '<br>Фотоочет: ' . $this->title;
            echo '<br><img src="http://localhost/test1' . $this->preview . '">';
            echo '<br>';
            echo '<br>Содержание новости: ' . $this->content;
            echo '<hr>';
        }

    }


    ?>

</html>