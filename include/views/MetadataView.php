<?php

    class MetadataView {
        private $metadata;
        
        public function MetadataView($metadata) {
            $this->metadata = $metadata;
        }
        
        public function generateHTML() {
            echo "<head>
                <!-- CODIFICACIÓN USADA -->
                <meta charset='UTF-8'>
                <!-- TITULO -->
                <title>" . $this->metadata->getTitle() . "</title>
                <!-- ETIQUETA PARA EL CONTROL DEL TAMAÑO DE LA PÁGINA WEB -->
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <!-- PALABRAS CLAVE PARA EL BUSCADOR -->
                <meta name='keywords' content='" . $this->metadata->getKeywords() . "HTML, CSS, XML, XHTML, JavaScript'>
                <!-- DESCRIPCION DE NUESTRA PAGINA WEB -->
                <meta name='description' content=' " . $this->metadata->getDescription() . "'>
                <!-- AUTOR DE LA PAGINA -->
                <meta name='author' content='RUBEN CESPEDES & CARLOS ENTRENA'>
                <!-- ETIQUETA PARA REFRESCAR EL DOCUMENTO CADA X SEGUNDOS -->
                <!--<meta http-equiv='refresh' content='30'>-->
    
                <!-- ENLACE PARA EL CSS DONDE TENEMOS DEFINIDO EL ESTILO -->
                <link rel='stylesheet' type='text/css' href='./CSS/index.css'>
                <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    
                <script src='./JavaScript/funciones.js'></script>
            </head>";
        }
    }

?>