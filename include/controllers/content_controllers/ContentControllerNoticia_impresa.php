<?php
/**
 * Created by PhpStorm.
 * User: carlos
 * Date: 17/04/2017
 * Time: 19:20
 */

<?php
	include 'include/data/content-data/ContentNoticia_impresa.php';
	include 'include/views/content-views/ContentViewNoticia_impresa.php';
	class ContentControllerNoticia_impresa {

        private $content;
        private $contentView;

        public function ContentControllerNoticia_impresa() {

            $this->content = new ContentNoticia_impresa();
            $this->contentView = new ContentViewNoticia_impresa($this->content);
        }

        public function start() {

            $this->contentView->generateHTML();
        }
    }

?>