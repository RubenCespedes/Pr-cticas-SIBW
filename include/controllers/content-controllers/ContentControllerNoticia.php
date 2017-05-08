
<?php
	include 'include/data/content-data/ContentNoticia.php';
	include 'include/views/content-views/ContentViewNoticia.php';
	class ContentControllerNoticia {

        private $content;
        private $contentView;

        public function ContentControllerNoticia() {

            $this->content = new ContentNoticia();
            $this->contentView = new ContentViewNoticia($this->content);
        }

        public function start() {

            $this->contentView->generateHTML();
        }
    }

?>