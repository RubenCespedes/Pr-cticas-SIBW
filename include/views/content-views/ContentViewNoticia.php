<?php

    class ContentViewNoticia {
        private $noticia;
        
        public function ContentViewNoticia($noticia) {
            $this->noticia = $noticia;
        }
        
        public function generateHTML() {
            echo "<nav class='segunda_barra_navegacion_noticia'>
		
                    <div class='contenedor_categoria_noticia'>
                        <p>" . $this->noticia->getGenero() . "</p>
                    </div>";
            
            $etiquetas = $this->noticia->getEtiquetas();
            
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
                                <h1>" . $this->noticia->getTitulo() . "</h1>
                            </div>
                        </section>
		
                        <section class='bloque_fijo_noticia'>
                            <div class='bloque_autor_fijo_noticia'>
                                <span>" . $this->noticia->getAutor() . "</span>
                                <span>" . $this->noticia->getLugar() . "</span>
                            </div>
                            
                            <div class='bloque_botones_fijo_noticia'>
                                <span><i class='fa fa-facebook-square'></i></span>
                                <span><i class='fa fa-twitter-square'></i></span>
                                <span><i class='fa fa-google-plus-square'></i></span>
                                <span><a href='index.php?idNoticia=" . $this->noticia->getIdNoticia() . "&impreso=si><i class='fa fa-print'></i></a></span>
                            </div>
			
                            <div class='hora_actualizado_fijo_noticia'>
                                <span>Actualizado " . $this->noticia->getHoraActualizacion() . " CET</span>
                            </div>
                        </section>
		
                        <section class='bloque_texto_noticia'>
                            <div class='bloque_imagen_noticia'>
                                <div class='imagen_noticia'>
                                    <img src='" . $this->noticia->getImagen() . "' width='100%' alt='imagen_noticia'>
                                </div>
                                
                                <div class='bloque_pie_foto_noticia'>
                                    <span>" . $this->noticia->getDescripcionImagen() . "</span>
                                    <span class='creditos_pie_foto'>". $this->noticia->getAutorImagen() . " " . $this->noticia->getLugarImagen() . "</span>
                                </div>
                            </div>
			
                            <div class='texto_noticia'>
                                <article class='entradilla_noticia'>
                                    <p>" . $this->noticia->getEntradilla() . "</p>
                                </article>
                            </div>
			
                            <div>
                                <article class='cuerpo_noticia'>
                                    <p>" . $this->noticia->getCuerpo() . "
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
        }
    }

?>