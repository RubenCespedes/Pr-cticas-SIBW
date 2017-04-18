<?php

    class ContentNoticia {
        // Variable conforme a la base de datos
        private $idNoticia;
        private $genero;
        private $etiquetas;
        private $titulo;
        private $autor;
        private $lugar;
        private $horaActualizacion;
        private $imagen;
        private $descripcionImagen;
        private $autorImagen;
        private $lugarImagen;
        private $entradilla;
        private $cuerpo;
        
        public function ContentNoticia() {
            global $idNoticia;
            
            $this->idNoticia = $idNoticia;
            $this->etiquetas = array();
            
            // 1. Conectamos con la base de datos
            require './includes/conexionBD.php';
            $conn = conectarBD();
                  
            // 2. Realizamos todas las consultas necesarias
            // 2.1 Creamos una sentencia preparada
            $sentencia = mysqli_stmt_init($conn);

            if (mysqli_stmt_prepare($sentencia, 'SELECT genero FROM Noticia WHERE idNoticia=?')) {
    
                // 2.2 Vinculamos los parámetro para los marcadores
                //mysqli_stmt_bind_param($sentencia, "i", $this->idNoticia);
    
                // 2.3 Ejecutamos la consulta
                mysqli_stmt_execute($sentencia);
    
    
                // 2.4 Vinculamos las variables de resultados
                mysqli_stmt_bind_result($sentencia, $genero);
    
                mysqli_stmt_fetch($sentencia);
                
                this->genero = $genero;
                
                // 2.5 Cerramos la sentencia
                mysqli_stmt_close($sentencia);
                
                
            }
            
            // 2.6 Repetimos desde el paso 2.1
            
            $sentencia = mysqli_stmt_init($conn);

            if (mysqli_stmt_prepare($sentencia, 'SELECT nombreEtiqueta FROM Etiqueta, NoticiaTieneEtiqueta WHERE (Etiqueta.idEtiqueta = NoticiaTieneEtiqueta.idEtiqueta AND NoticiaTieneEtiqueta.idNoticia = ?)')) {
    
                mysqli_stmt_bind_param($sentencia, "i", $this->idNoticia);
    
                mysqli_stmt_execute($sentencia);
    
    
                mysqli_stmt_bind_result($sentencia, $nombreEtiqueta);
    
                while(mysqli_stmt_fetch($sentencia)){
                    array_push($etiquetas, $nombreEtiqueta);
                }
    
                mysqli_stmt_close($sentencia);
            }
            
            $sentencia = mysqli_stmt_init($conn);

            if (mysqli_stmt_prepare($sentencia, 'SELECT titularExtendido FROM Noticia WHERE idNoticia = ?')) {
    
                mysqli_stmt_bind_param($sentencia, "i", $this->idNoticia);
    
                mysqli_stmt_execute($sentencia);
    
    
                mysqli_stmt_bind_result($sentencia, $titular);
    
                mysqli_stmt_fetch($sentencia);
                
                $this->titular = $titular;
    
                mysqli_stmt_close($sentencia);
            }
            
            $sentencia = mysqli_stmt_init($conn);

            if (mysqli_stmt_prepare($sentencia, 'SELECT autor FROM Noticia WHERE idNoticia = ?')) {
    
                mysqli_stmt_bind_param($sentencia, "i", $this->idNoticia);
    
                mysqli_stmt_execute($sentencia);
    
                mysqli_stmt_bind_result($sentencia, $autor);
    
                mysqli_stmt_fetch($sentencia);
                
                $this->autor = $autor;
    
                mysqli_stmt_close($sentencia);
            }
            
            $sentencia = mysqli_stmt_init($conn);

            if (mysqli_stmt_prepare($sentencia, 'SELECT lugar FROM Noticia WHERE idNoticia = ?')) {
    
                mysqli_stmt_bind_param($sentencia, "i", $this->idNoticia);
    
                mysqli_stmt_execute($sentencia);
    
    
                mysqli_stmt_bind_result($sentencia, $lugar);
    
                mysqli_stmt_fetch($sentencia);
                
                $this->lugar = $lugar;
    
                mysqli_stmt_close($sentencia);
            }
            
            $sentencia = mysqli_stmt_init($conn);

            if (mysqli_stmt_prepare($sentencia, 'SELECT horaActualizacion FROM Noticia WHERE idNoticia = ?')) {
    
                mysqli_stmt_bind_param($sentencia, "i", $this->idNoticia);
    
                mysqli_stmt_execute($sentencia);
    
    
                mysqli_stmt_bind_result($sentencia, $horaActualizacion);
    
                mysqli_stmt_fetch($sentencia);
                
                $this->horaActualizacion = $horaActualizacion;
    
                mysqli_stmt_close($sentencia);
            }
            
            $sentencia = mysqli_stmt_init($conn);

            if (mysqli_stmt_prepare($sentencia, 'SELECT ubicacion FROM NoticiaContieneImagen, Imagen WHERE (Imagen.idImagen = NoticiaContieneImagen.idImagen AND idNoticia = ?)')) {
    
                mysqli_stmt_bind_param($sentencia, "i", $this->idNoticia);
    
                mysqli_stmt_execute($sentencia);
    
    
                mysqli_stmt_bind_result($sentencia, $imagen);
    
                mysqli_stmt_fetch($sentencia);
                
                $this->imagen = $imagen;
    
                mysqli_stmt_close($sentencia);
            }
            
            $sentencia = mysqli_stmt_init($conn);

            if (mysqli_stmt_prepare($sentencia, 'SELECT descripcion FROM Imagen, NoticiaContieneImagen WHERE (Imagen.idImagen = NoticiaContieneImagen.idImagen AND idNoticia = ?)')) {
    
                mysqli_stmt_bind_param($sentencia, "i", $this->idNoticia);
    
                mysqli_stmt_execute($sentencia);
    
    
                mysqli_stmt_bind_result($sentencia, $descripcionImagen);
    
                mysqli_stmt_fetch($sentencia);
                
                $this->descripcionImagen = $descripcionImagen;
    
                mysqli_stmt_close($sentencia);
            }
            
            $sentencia = mysqli_stmt_init($conn);

            if (mysqli_stmt_prepare($sentencia, 'SELECT autor FROM Imagen, NoticiaContieneImagen WHERE (Imagen.idImagen = NoticiaContieneImagen.idImagen AND idNoticia = ?)')) {
    
                mysqli_stmt_bind_param($sentencia, "i", $this->idNoticia);
    
                mysqli_stmt_execute($sentencia);
    
    
                mysqli_stmt_bind_result($sentencia, $autorImagen);
    
                mysqli_stmt_fetch($sentencia);
                
                $this->autorImagen = $autorImagen;
    
                mysqli_stmt_close($sentencia);
            }
            
            $sentencia = mysqli_stmt_init($conn);

            if (mysqli_stmt_prepare($sentencia, 'SELECT lugar FROM Imagen, NoticiaContieneImagen WHERE (Imagen.idImagen = NoticiaContieneImagen.idImagen AND idNoticia = ?)')) {
    
                mysqli_stmt_bind_param($sentencia, "i", $this->idNoticia);
    
                mysqli_stmt_execute($sentencia);
    
    
                mysqli_stmt_bind_result($sentencia, $lugarImagen);
    
                mysqli_stmt_fetch($sentencia);
                
                $this->lugarImagen = $lugarImagen;
    
                mysqli_stmt_close($sentencia);
            }
            
            $sentencia = mysqli_stmt_init($conn);

            if (mysqli_stmt_prepare($sentencia, 'SELECT entradilla FROM Noticia WHERE idNoticia = ?')) {
    
                mysqli_stmt_bind_param($sentencia, "i", $this->idNoticia);
    
                mysqli_stmt_execute($sentencia);
    
    
                mysqli_stmt_bind_result($sentencia, $entradilla);
    
                mysqli_stmt_fetch($sentencia);
                
                $this->entradilla = $entradilla;
    
                mysqli_stmt_close($sentencia);
            }
            
            $sentencia = mysqli_stmt_init($conn);

            if (mysqli_stmt_prepare($sentencia, 'SELECT cuerpo FROM Noticia WHERE idNoticia = ?')) {
    
                mysqli_stmt_bind_param($sentencia, "i", $this->idNoticia);
    
                mysqli_stmt_execute($sentencia);
    
    
                mysqli_stmt_bind_result($sentencia, $cuerpo);
    
                mysqli_stmt_fetch($sentencia);
                
                $this->cuerpo = $cuerpo;
    
                mysqli_stmt_close($sentencia);
            }
            
            // 3. Cerramos la conexión
            mysqli_stmt_close($sentencia);
        }
        
        public function getGenero() {
            return $this->genero;
        }
        
        public function getEtiquetas() {
            return $this->etiquetas;
        }
        
        public function getTitulo() {
            return $this->titulo;
        }
        
        public function getAutor() {
            return $this->autor;
        }
        
        public function getLugar() {
            return $this->lugar;
        }
        
        public function getIdNoticia() {
            return $this->idNoticia;
        }
        
        public function getHoraActualizacion() {
            return $this->horaActualizacion;
        }
        
        public function getImagen() {
            return this->imagen;
        }
        
        public function getDescripcionImagen() {
            return this->descripcionImagen;
        }
        
        public function getAutorImagen() {
            return $this->autorImagen;
        }
        
        public function getLugarImagen() {
            return $this->lugarImagen;
        }
        
        public function getEntradilla() {
            return $this->entradilla;
        }
    }
    
?>