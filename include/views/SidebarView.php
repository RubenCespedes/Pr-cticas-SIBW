<?php

    class SidebarView {
        private $sidebar;
        
        public function SidebarView($sidebar) {
            $this->sidebar = $sidebar;
        }
        
        public function generateHTML() {
            echo "<div class='sidebar'>
                    <img src='" . $this->sidebar->getImagen() . "' width='100%' alt='PUBLI'>
                </div>";
        }
    }

?>