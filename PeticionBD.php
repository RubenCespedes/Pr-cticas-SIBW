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
    </nav>";

$idNoticia = 1;

$etiquetas = array();

$conn = conectarBD(); // Llamada a la función

$sentencia = mysqli_stmt_init($conn);

            if (mysqli_stmt_prepare($sentencia, 'SELECT genero, titularExtendido, autor, lugar, horaActualizacion, entradilla, cuerpo FROM Noticia WHERE idNoticia=?')) {
    
                // 2.2 Vinculamos los parámetro para los marcadores
                //mysqli_stmt_bind_param($sentencia, "i", $this->idNoticia);
    
                // 2.3 Ejecutamos la consulta
                mysqli_stmt_execute($sentencia);
    
    
                // 2.4 Vinculamos las variables de resultados
                mysqli_stmt_bind_result($sentencia, $genero, $titular, $autor, $lugar, $horaActualizacion, $entradilla, $cuerpo);
    
                mysqli_stmt_fetch($sentencia);
                
                //this->genero = $genero;
                
                // 2.5 Cerramos la sentencia
                mysqli_stmt_close($sentencia); 
            }
            
            // 2.6 Repetimos desde el paso 2.1
            
            $sentencia = mysqli_stmt_init($conn);

            if (mysqli_stmt_prepare($sentencia, 'SELECT nombreEtiqueta FROM Etiqueta, NoticiaTieneEtiqueta WHERE (Etiqueta.idEtiqueta = NoticiaTieneEtiqueta.idEtiqueta AND NoticiaTieneEtiqueta.idNoticia = ?)')) {
    
                mysqli_stmt_bind_param($sentencia, "i", $idNoticia);
    
                mysqli_stmt_execute($sentencia);
    
    
                mysqli_stmt_bind_result($sentencia, $nombreEtiqueta);
    
                while(mysqli_stmt_fetch($sentencia)){
                    array_push($etiquetas, $nombreEtiqueta);
                }
    
                mysqli_stmt_close($sentencia);
            }
            
            $sentencia = mysqli_stmt_init($conn);

            if (mysqli_stmt_prepare($sentencia, 'SELECT ubicacion FROM NoticiaContieneImagen, Imagen WHERE (Imagen.idImagen = NoticiaContieneImagen.idImagen AND idNoticia = ?)')) {
    
                mysqli_stmt_bind_param($sentencia, "i", $idNoticia);
    
                mysqli_stmt_execute($sentencia);
    
    
                mysqli_stmt_bind_result($sentencia, $imagen);
    
                mysqli_stmt_fetch($sentencia);
                
                //$this->imagen = $imagen;
    
                mysqli_stmt_close($sentencia);
            }
            
            $sentencia = mysqli_stmt_init($conn);

            if (mysqli_stmt_prepare($sentencia, 'SELECT descripcion FROM Imagen, NoticiaContieneImagen WHERE (Imagen.idImagen = NoticiaContieneImagen.idImagen AND idNoticia = ?)')) {
    
                mysqli_stmt_bind_param($sentencia, "i", $idNoticia);
    
                mysqli_stmt_execute($sentencia);
    
    
                mysqli_stmt_bind_result($sentencia, $descripcionImagen);
    
                mysqli_stmt_fetch($sentencia);
                
                //$this->descripcionImagen = $descripcionImagen;
    
                mysqli_stmt_close($sentencia);
            }
            
            $sentencia = mysqli_stmt_init($conn);

            if (mysqli_stmt_prepare($sentencia, 'SELECT autor FROM Imagen, NoticiaContieneImagen WHERE (Imagen.idImagen = NoticiaContieneImagen.idImagen AND idNoticia = ?)')) {
    
                mysqli_stmt_bind_param($sentencia, "i", $idNoticia);
    
                mysqli_stmt_execute($sentencia);
    
    
                mysqli_stmt_bind_result($sentencia, $autorImagen);
    
                mysqli_stmt_fetch($sentencia);
                
                //$this->autorImagen = $autorImagen;
    
                mysqli_stmt_close($sentencia);
            }
            
            $sentencia = mysqli_stmt_init($conn);

            if (mysqli_stmt_prepare($sentencia, 'SELECT lugar FROM Imagen, NoticiaContieneImagen WHERE (Imagen.idImagen = NoticiaContieneImagen.idImagen AND idNoticia = ?)')) {
    
                mysqli_stmt_bind_param($sentencia, "i", $idNoticia);
    
                mysqli_stmt_execute($sentencia);
    
    
                mysqli_stmt_bind_result($sentencia, $lugarImagen);
    
                mysqli_stmt_fetch($sentencia);
                
                //$this->lugarImagen = $lugarImagen;
    
                mysqli_stmt_close($sentencia);
            }
            
            // 3. Cerramos la conexión
            mysqli_close($conn);

            echo "<nav class='segunda_barra_navegacion_noticia'>
		
                    <div class='contenedor_categoria_noticia'>
                        <p>" . $genero . "</p>
                    </div>";
            
            $etiquetaslength = count($etiquetas);
            
            for($x = 0; $x < $etiquetaslength; $x++) {
                echo "<a href='#'>" . $etiquetas[$x] . "</a>";
            }
            
            echo "</nav>
		
                <!-- RESTO DE LA NOTICIA -->
                <div id='cont_noticia'>
                    <div class='bloque_noticia_completa'>
                        <section class='bloque_titulo_noticia'>
                            <div class='titulo_noticia'>
                                <h1>" . $titular . "</h1>
                            </div>
                        </section>
		
                        <section class='bloque_fijo_noticia'>
                            <div class='bloque_autor_fijo_noticia'>
                                <span>" . $autor . "</span>
                                <span>" . $lugar . "</span>
                            </div>
                            
                            <div class='bloque_botones_fijo_noticia'>
                                <span><i class='fa fa-facebook-square'></i></span>
                                <span><i class='fa fa-twitter-square'></i></span>
                                <span><i class='fa fa-google-plus-square'></i></span>
                                <span><a href='index.php?idNoticia=" . $idNoticia . "&impreso=si><i class='fa fa-print'></i></a></span>
                            </div>
			
                            <div class='hora_actualizado_fijo_noticia'>
                                <span>Actualizado " . $horaActualizacion . " CET</span>
                            </div>
                        </section>
		
                        <section class='bloque_texto_noticia'>
                            <div class='bloque_imagen_noticia'>
                                <div class='imagen_noticia'>
                                    <img src='" . $imagen . "' width='100%' alt='imagen_noticia'>
                                </div>
                                
                                <div class='bloque_pie_foto_noticia'>
                                    <span>" . $descripcionImagen . "</span>
                                    <span class='creditos_pie_foto'>". $autorImagen . " " . $lugarImagen . "</span>
                                </div>
                            </div>
			
                            <div class='texto_noticia'>
                                <article class='entradilla_noticia'>
                                    <p>" . $entradilla . "</p>
                                </article>
                            </div>
			
                            <div>
                                <article class='cuerpo_noticia'>
                                    <p>" . $cuerpo . "
                                </article>
                            </div>
                        </section>  
        
                        <!-- FORMULARIO CON EL COMENTARIO NUEVO -->
                        <div id='formulario_comentarios'>
        
                            <!-- Contenedor con los datos del formulario -->
                            <div>
                                <div id='datos_comentario'>
                                    Nombre:<br>
                                    <input id='name' type='text' name='name' required><br>
                                    E-mail:<br>
                                    <input type='email' name='email' required><br>
                                </div>
                                
                                <div id='boton_comentario'>
                                    <button onclick='aniadir_comentario()'>Enviar</button>
                                </div>
                                
                                <textarea id='fname' onkeyup='myFunction()' name='message' rows='10' cols='70' required>Introduzca aquí su comentario...</textarea>               
                            </div>         
                        </div>
                    </div>
                </div>";
?>