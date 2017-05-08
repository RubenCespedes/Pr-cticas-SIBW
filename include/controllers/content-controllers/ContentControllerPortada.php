

<?php
	include 'include/data/content-data/ContentPortada.php';
	include 'include/views/content-views/ContentViewPortada.php';
	class ContentControllerPortada {

        private $content;
        private $contentView;

        public function ContentControllerPortada() {

            $this->content = new ContentPortada();
            $this->contentView = new ContentViewPortada($this->content);
        }

        public function start() {

            $this->contentView->generateHTML();
        }
    }

?>