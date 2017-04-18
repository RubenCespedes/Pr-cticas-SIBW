<?php

    class Header {
        private $logoPeriodico;
        
        public function Header() {
            global $idNoticia;
            
            if(!empty($idNoticia)) {
                $this->logoPeriodico = "./images/logo_pequeño_noticia.png";
            } else {
                $this->logoPeriodico = "./images/logo.png";
            }
        }
        
        public function getLogoPeriodico() {
            return $this->logoPeriodico;
        }
    }
    
?>