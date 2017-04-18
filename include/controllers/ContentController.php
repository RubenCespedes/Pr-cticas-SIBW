
<?php
	class ContentController {

        private $contentSubcontroller;

        public function ContentController() {

            global $sec;

            switch($sec) {

                case 'noticia':
                    include 'include/controllers/content-controllers/ContentControllerNoticia.php';

                    $this->contentSubcontroller = new ContentControllerNoticia();
                    break;
                case 'noticia_impresa':
                    include 'include/controllers/content-controllers/ContentControllerNoticia_impresa.php';

                    $this->contentSubcontroller = new ContentControllerNoticia_impresa();
                    break;

                default:
                    include 'include/controllers/content-controllers/ContentControllerPortada.php';

                    $this->contentSubcontroller = new ContentControllerPortada();
                    break;
            }
        }

        public function start() {

            $this->contentSubcontroller->start();
        }
    }

?>