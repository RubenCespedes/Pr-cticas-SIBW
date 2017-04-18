<?php

    class Header {
        private $logoPeriodico;
        
        public function Header() {
            global $idNoticia;
            
            if(!empty($idNoticia)) {
                $this->logoPeriodico = "./images/logo_pequeño_noticia.png";
            }
        }
        
        public function getLogoPeriodico() {
            return $this->logoPeriodico;
        }
    }
    
?>