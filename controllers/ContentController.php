<?php
    
    class ContentController {
        private $contentSubController;
        
        public function ContentController() {
            global $sec;
            
            if(!empty($sec)) {
                include 'include/controllers/content-controllers/ContentControllerPortada.php';
                
                $this->contentSubController = new ContentControllerPortada();
            } else {
                include 'include/controllers/content-controllers/ContentControllerNoticia.php';
                
                $this->contentSubController = new ContentControllerNoticia();
            }
        }
        
        public function start() {
            $this->contentSubController->start();
        }
    }

?>