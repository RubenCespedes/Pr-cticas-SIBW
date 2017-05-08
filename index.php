<?php

    echo "<!DOCTYPE html>
        <html>";

    include 'include/controllers/MetadataController.php';
    include 'include/controllers/HeaderController.php';
        
    if(empty($_GET["sec"])){
        $sec = "";
    } else {
        $sec = $_GET["sec"];
    }

    if(empty($_GET["idNoticia"])){
        $idNoticia = "";
    } else {
        $idNoticia = $_GET["idNoticia"];
    }

    // Generamos los metadatos
    $metaDataController = new MetadataController();
    $metaDataController->start();

    // Generamos el header
    $headerController = new HeaderController();
    $headerController->start();

    echo "</body></html>";
/*
    include 'include/controllers/HeaderController.php';
    include 'include/controllers/ContentController.php';
    include 'include/controllers/SidebarController.php';
    include 'include/controllers/FooterController.php';

    echo "<!DOCTYPE html>
    <html>";

    if(empty($_GET["sec"])) {
        $sec = "";
    }else {
        $sec = $_GET["sec"];
    }

    if(empty($_GET["idNoticia"])) {
        $idNoticia = "";
    } else {
        $idNoticia = $_GET["idNoticia"];
    }
    
    echo "<head>
    <!-- CODIFICACIÓN USADA -->
    <meta charset='UTF-8'>
    <!-- TITULO -->
    <title>EL PLANETA</title>
    <!-- ETIQUETA PARA EL CONTROL DEL TAMAÑO DE LA PÁGINA WEB -->
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <!-- PALABRAS CLAVE PARA EL BUSCADOR -->
    <meta name='keywords' content='HTML, CSS, XML, XHTML, JavaScript'>
    <!-- DESCRIPCION DE NUESTRA PAGINA WEB -->
    <meta name='description' content='Free Portal Web with news'>
    <!-- AUTOR DE LA PAGINA -->
    <meta name='author' content='RUBEN CESPEDES & CARLOS ENTRENA'>
    <!-- ETIQUETA PARA REFRESCAR EL DOCUMENTO CADA X SEGUNDOS -->
    <!--<meta http-equiv='refresh' content='30'>-->
    
    <!-- ENLACE PARA EL CSS DONDE TENEMOS DEFINIDO EL ESTILO -->
    <link rel='stylesheet' type='text/css' href='./CSS/index.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    
    <script src='./JavaScript/funciones.js'></script>
</head>";


    // Incluir los meta datos
    //$metadataController = new MetadataController();
    //$metadataController->start();
    
    if(!empty($sec)) {
        echo "<body onload='actualizarHora()'>";
    } else {
        echo "<body>";
    }
    
    // Incluir el header de la web
    $headerController = new HeaderController();
    $headerController->start();
    
    // Incluir el contenido de la web
    $contentController = new ContentController();
    $contentController->start();

    // Incluir el sidebar de la web
    $sidebarController = new SidebarController();
    $sidebarController->start();
    
    // Incluir el footer de la web
    $footerController = new FooterController();
    $footerController->start();
    
    echo "</body>
		</html>";
*/
?>