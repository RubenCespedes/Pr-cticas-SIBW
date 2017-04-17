<?php
    include 'include/controllers/HeaderController.php';
    include 'include/controllers/ContentController.php';
    include 'include/controllers/SidebarController.php';
    include 'include/controllers/FooterController.php';

    echo "<!DOCTYPE html>
    <html>";
    
    // Variable global para la sección
    $sec = $_GET["sec"];
    
    // Variable global para el identificador de la noticia
    $idNoticia = $_GET["idNoticia"];
    
    // Incluir los meta datos
    $metadataController = new MetadataController();
    $metadataController->start();
    
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

?>