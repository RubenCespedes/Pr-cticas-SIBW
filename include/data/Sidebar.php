<?php

    class Sidebar {
        private $imagen;
        
        public function Sidebar() {
            $this->imagen = "images/publicidad.png";
        }
        
        public function getImagen() {
            return $this->imagen;
        }
    }

?>