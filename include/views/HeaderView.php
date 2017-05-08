<?php
    class HeaderView {
        private $header;
        
        public function HeaderView($header) {
            $this->header = $header;
        }
        
        public function generateHTML() {
            global $idNoticia;
            
            if(!empty($idNoticia)) {
                echo "<nav class='primera_barra_navegacion_noticia'>
                    <div class='bloque_enlaces_primer_nav_noticia'>
                        <img class='logo_noticia' src='" . $this->header->getLogoPeriodico() . "' alt='logo'>
                        <a href='index.php?sec=españa'>España</a> |
                        <a href='index.php?sec=internacional'>Internacional</a> |
                        <a href='index.php?sec=politica'>Política</a> |
                        <a href='index.php?sec=economia'>Economía</a> |
                        <a href='index.php?sec=tecnologia'>Tecnología</a> |
                        <a href='index.php?sec=sociedad'>Sociedad</a> |
                        <a href='index.php?sec=cultura'>Cultura</a> |
                        <a href='index.php?sec=tv'>Tv</a>
                    </div>
		
                    <div class='bloque_botones_primer_nav_noticia'>
                        <button class='boton_suscribete_noticia'>Suscribete</button>
                        <button class='boton_sesion_noticia'>Sesión</button>
                    </div>
                </nav>";
            } else {
                echo "<header>
                    <div class='cont_fecha_header'>
                        <span id='fecha'>7 de Marzo de 2017</span>
                        <span id='hora_actualizado'>Actualizado a las 17:30</span>
                    </div>
	
                    <div class='cont_logo_header'>
                        <img id='logo' src='" . $this->header->getLogoPeriodico() . "' alt='LOGO'>
                    </div>
    
                    <div class='cont_botones_header'>
                        <button type='button' id='boton_suscribete_header'>SUSCRIBETE</button>
                        <button type='button' id='boton_inicio_header'>INICIO SESION</button>
                    </div>
                </header>";
            }
        }
    }
?>