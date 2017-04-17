<?php
/**
 * Created by PhpStorm.
 * User: carlos
 * Date: 17/04/2017
 * Time: 19:20
 */

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