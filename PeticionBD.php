<?php
function conectarBD() {
    $servername = "localhost";
    $username = "root";
    $password = "Ruben.pc.1";
    $dbname = "SIBW_bd";

    // Creamos la conexión
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Comprobar la conexión
    if (!$conn) {
        die("Conexión fallida: " . mmysqli_connect_error());
    }

    //printf("Conexión correcta\n");
    
    return $conn;
}

function peticionBD() {
    
    
    
}

echo "<!DOCTYPE html>
<html>

<head>
    <!-- CODIFICACIÓN USADA -->
    <meta charset='UTF-8'>
    <!-- TITULO -->
    <title>NOTICIA</title>
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

echo "<body>
    <!-- PRIMERA BARRA DE NAVEGACIÓN -->
	<nav class='primera_barra_navegacion_noticia'>
        <div class='bloque_enlaces_primer_nav_noticia'>
            <img class='logo_noticia' src='./images/logo_pequeño_noticia.png' alt='logo'>
            <a href='#'>España</a> |
            <a href='#'>Internacional</a> |
            <a href='#'>Política</a> |
            <a href='#'>Economía</a> |
            <a href='#'>Tecnología</a> |
            <a href='#'>Sociedad</a> |
            <a href='#'>Cultura</a> |
            <a href='#'>Tv</a>
        </div>
		
        <div class='bloque_botones_primer_nav_noticia'>
            <button class='boton_suscribete_noticia'>Suscribete</button>
            <button class='boton_sesion_noticia'>Sesión</button>
        </div>
    </nav>
		
	<!-- SEGUNDA BARRA DE NAVEGACIÓN -->
	<nav class='segunda_barra_navegacion_noticia'>
		
        <div class='contenedor_categoria_noticia'>";

$conn = conectarBD(); // Llamada a la función

// Crear una sentencia preparada
$sentencia = mysqli_stmt_init($conn);

if (mysqli_stmt_prepare($sentencia, 'SELECT genero FROM Noticia')) {
    
    // Vincular los parámetro para los marcadores
    //mysqli_stmt_bind_param($sentencia, "s", $genero);
    
    // Ejecutar la consulta
    mysqli_stmt_execute($sentencia);
    
    
    // Vincular las variables de resultados
    mysqli_stmt_bind_result($sentencia, $genero);
    
    // Obtener el valor
    /*while(mysqli_stmt_fetch($sentencia)){
        echo "id: " . $id . " - Autor: " . $autor . "<br>";
    }*/
    
    mysqli_stmt_fetch($sentencia);
    
    echo "<p>" . $genero . "</p>";
    
    // Cerrar la sentencia
    mysqli_stmt_close($sentencia);
}

// Cerrar la conexión
mysqli_close($conn);

echo "</div>
    
        ";
$id = 1;

$conn = conectarBD(); // Llamada a la función

// Crear una sentencia preparada
$sentencia = mysqli_stmt_init($conn);

if (mysqli_stmt_prepare($sentencia, 'SELECT nombreEtiqueta FROM Etiqueta, NoticiaTieneEtiqueta WHERE (Etiqueta.idEtiqueta = NoticiaTieneEtiqueta.idEtiqueta AND NoticiaTieneEtiqueta.idNoticia = ?)')) {
    
    // Vincular los parámetro para los marcadores
    mysqli_stmt_bind_param($sentencia, "i", $id);
    
    // Ejecutar la consulta
    mysqli_stmt_execute($sentencia);
    
    
    // Vincular las variables de resultados
    mysqli_stmt_bind_result($sentencia, $nombreEtiqueta);
    
    // Obtener el valor
    while(mysqli_stmt_fetch($sentencia)){
        echo "<a href='#'>" . $nombreEtiqueta . "</a>";
    }
    
    //mysqli_stmt_fetch($sentencia);
    
    //echo "<p>" . $genero . "</p>";
    
    // Cerrar la sentencia
    mysqli_stmt_close($sentencia);
}

// Cerrar la conexión
mysqli_close($conn);

echo "</nav>";

?>