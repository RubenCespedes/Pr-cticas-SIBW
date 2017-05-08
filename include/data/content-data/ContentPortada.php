<?php
    class ContentPortada {
        private imagenNoticiaImportante;
        private idNoticiaImportante;
        private titularNoticiaImportante;
        private autorNoticiaImportante;
        private lugarNoticiaImportante;
        private idRelacionadaImportante1;
        private titularRelacionadaImportante1;
        private idRelacionadaImportante2;
        private titularRelacionadaImportante2;
        private idRelacionadaImportante3;
        private titularRelacionadaImportante3;
        private imagenNoticiaDestacada;
        private autorImagenNoticiaDestacada;
        private lugarImagenNoticiaDestacada:
        private idNoticiaDestacada;
        private titularNoticiaDestacada;
        private autorNoticiaDestacada;
        private lugarNoticiaDestacada;
        private entradillaNoticiaDestacada;
        private idRelacionadaDestacada1;
        private titularRelacionadaDestacada1;
        private idRelacionadaDestacada2;
        private titularRelacionadaDestacada2;
        private idRelacionadaDestacada3;
        private titularRelacionadaDestacada3;
        private idNoticiaNormal1;
        private titularNoticiaNormal1;
        private autorNoticiaNormal1;
        private lugarNoticiaNormal1;
        private idRelacionadaNormal1;
        private titularRelacionadaNormal1;
        private imagenNoticiaNormal;
        private idNoticiaNormal2;
        private titularNoticiaNormal2;
        private autorNoticiaNormal2;
        private lugarNoticiaNormal2;
        private imagenNoticiaPrincipal1;
        private autorNoticiaPrincipal1;
        private lugarNoticiaPrincipal1;
        private idNoticiaPrincipal1;
        private titularNoticiaPrincipal1;
        private imagenNoticiaSecundaria11;
        private autorNoticiaSecundaria11;
        private lugarNoticiaSecundaria11;
        private idNoticiaSecundaria11;
        private titularNoticiaSecundaria11;
        private imagenNoticiaSecundaria12;
        private autorNoticiaSecundaria12;
        private lugarNoticiaSecundaria12;
        private idNoticiaSecundaria12;
        private titularNoticiaSecundaria12;
        private imagenNoticiaPrincipal2;
        private autorNoticiaPrincipal2;
        private lugarNoticiaPrincipal2;
        private idNoticiaPrincipal2;
        private titularNoticiaPrincipal2;
        private imagenNoticiaSecundaria21;
        private autorNoticiaSecundaria21;
        private lugarNoticiaSecundaria21;
        private idNoticiaSecundaria21;
        private titularNoticiaSecundaria21;
        private imagenNoticiaSecundaria22;
        private autorNoticiaSecundaria22;
        private lugarNoticiaSecundaria22;
        private idNoticiaSecundaria22;
        private titularNoticiaSecundaria22;
        
        public function ContentPortada(){
            global $sec;
            
            include './include/conexionBD.php';
            
            $conn = conectarBD();
            
            if(empty(sec)){
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT idNoticia FROM Noticia WHERE tipo = "importante" ORDER BY fechaSubida DESC LIMIT 1')) {
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $id);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->idNoticiaImportante = $id;
    
                    mysqli_stmt_close($sentencia);
                }
                
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT titularExtendido FROM Noticia WHERE idNoticia = ?')) {
                    
                    mysqli_stmt_bind_param($sentencia, "i", $this->idNoticiaImportante);
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $titular);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->titularNoticiaImportante = $titular;
    
                    mysqli_stmt_close($sentencia);
                }
            
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT autor FROM Noticia WHERE idNoticia = ?')) {
                    
                    mysqli_stmt_bind_param($sentencia, "i", $this->idNoticiaImportante);
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $autor);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->autorNoticiaImportante = $autor;
    
                    mysqli_stmt_close($sentencia);
                }
                
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT lugar FROM Noticia WHERE idNoticia = ?')) {
                    
                    mysqli_stmt_bind_param($sentencia, "i", $this->idNoticiaImportante);
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $lugar);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->lugarNoticiaImportante = $lugar;
    
                    mysqli_stmt_close($sentencia);
                }
                
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT ubicacion FROM Noticia, Imagen, NoticiaContieneImagen WHERE (Noticia.idNoticia = ? AND Noticia.idNoticia = NoticiaContieneImagen.idNoticia AND Imagen.idImagen = NoticiaContieneImagen.idImagen)')) {
                    
                    mysqli_stmt_bind_param($sentencia, "i", $this->idNoticiaImportante);
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $imagen);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->imagenNoticiaImportante = $imagen;
    
                    mysqli_stmt_close($sentencia);
                }
                
                $this->idRelacionadaImportante1 = 2;
                
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT titularExtendido FROM Noticia WHERE idNoticia = ?')) {
                    
                    mysqli_stmt_bind_param($sentencia, "i", $this->idRelacionadaImportante1);
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $titular);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->titularRelacionadaImportante1 = $titular;
    
                    mysqli_stmt_close($sentencia);
                }
                
                $this->idRelacionadaImportante2 = 2;
                
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT titularExtendido FROM Noticia WHERE idNoticia = ?')) {
                    
                    mysqli_stmt_bind_param($sentencia, "i", $this->idRelacionadaImportante2);
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $titular);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->titularRelacionadaImportante2 = $titular;
    
                    mysqli_stmt_close($sentencia);
                }
                
                $this->idRelacionadaImportante3 = 2;
                
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT titularExtendido FROM Noticia WHERE idNoticia = ?')) {
                    
                    mysqli_stmt_bind_param($sentencia, "i", $this->idRelacionadaImportante3);
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $titular);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->titularRelacionadaImportante3 = $titular;
    
                    mysqli_stmt_close($sentencia);
                }
                
                /* NOTICIA DESTACADA */
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT idNoticia FROM Noticia WHERE tipo = "destacada" ORDER BY fechaSubida DESC LIMIT 1')) {
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $id);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->idNoticiaDestacada = $id;
    
                    mysqli_stmt_close($sentencia);
                }
                
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT titularExtendido FROM Noticia WHERE idNoticia = ?')) {
                    
                    mysqli_stmt_bind_param($sentencia, "i", $this->idNoticiaDestacada);
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $titular);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->titularNoticiaDestacada = $titular;
    
                    mysqli_stmt_close($sentencia);
                }
            
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT autor FROM Noticia WHERE idNoticia = ?')) {
                    
                    mysqli_stmt_bind_param($sentencia, "i", $this->idNoticiaDestacada);
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $autor);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->autorNoticiaDestacada = $autor;
    
                    mysqli_stmt_close($sentencia);
                }
                
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT lugar FROM Noticia WHERE idNoticia = ?')) {
                    
                    mysqli_stmt_bind_param($sentencia, "i", $this->idNoticiaDestacada);
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $lugar);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->lugarNoticiaDestacada = $lugar;
    
                    mysqli_stmt_close($sentencia);
                }
                
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT ubicacion FROM Noticia, Imagen, NoticiaContieneImagen WHERE (Noticia.idNoticia = ? AND Noticia.idNoticia = NoticiaContieneImagen.idNoticia AND Imagen.idImagen = NoticiaContieneImagen.idImagen)')) {
                    
                    mysqli_stmt_bind_param($sentencia, "i", $this->idNoticiaDestacada);
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $imagen);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->imagenNoticiaDestacada = $imagen;
    
                    mysqli_stmt_close($sentencia);
                }
                
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT autor FROM Imagen WHERE ubicacion = ?')) {
                    
                    mysqli_stmt_bind_param($sentencia, "s", $this->imagenNoticiaDestacada);
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $autor);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->autorImagenNoticiaDestacada = $autor;
    
                    mysqli_stmt_close($sentencia);
                }
                
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT lugar FROM Imagen WHERE ubicacion = ?')) {
                    
                    mysqli_stmt_bind_param($sentencia, "s", $this->imagenNoticiaDestacada);
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $lugar);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->lugarImagenNoticiaDestacada = $lugar;
    
                    mysqli_stmt_close($sentencia);
                }
                
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT entradilla FROM Noticia WHERE idNoticia = ?')) {
                    
                    mysqli_stmt_bind_param($sentencia, "i", $this->idNoticiaDestacada);
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $entradilla);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->entradillaNoticiaDestacada = $entradilla;
    
                    mysqli_stmt_close($sentencia);
                }
                
                $this->idRelacionadaDestacada1 = 2;
                
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT titularExtendido FROM Noticia WHERE idNoticia = ?')) {
                    
                    mysqli_stmt_bind_param($sentencia, "i", $this->idRelacionadaDestacada1);
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $titular);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->titularRelacionadaDestacada1 = $titular;
    
                    mysqli_stmt_close($sentencia);
                }
                
                $this->idRelacionadaDestacada2 = 2;
                
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT titularExtendido FROM Noticia WHERE idNoticia = ?')) {
                    
                    mysqli_stmt_bind_param($sentencia, "i", $this->idRelacionadaDestacada2);
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $titular);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->titularRelacionadaDestacada2 = $titular;
    
                    mysqli_stmt_close($sentencia);
                }
                
                $this->idRelacionadaDestacada3 = 2;
                
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT titularExtendido FROM Noticia WHERE idNoticia = ?')) {
                    
                    mysqli_stmt_bind_param($sentencia, "i", $this->idRelacionadaDestacada3);
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $titular);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->titularRelacionadaDestacada3 = $titular;
    
                    mysqli_stmt_close($sentencia);
                }
                
                /* NOTICIA NORMAL SIN FOTO */
                
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT idNoticia FROM Noticia WHERE tipo = "normal" ORDER BY fechaSubida DESC LIMIT 1')) {
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $id);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->idNoticiaNormal1 = $id;
    
                    mysqli_stmt_close($sentencia);
                }
                
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT titularExtendido FROM Noticia WHERE idNoticia = ?')) {
                    
                    mysqli_stmt_bind_param($sentencia, "i", $this->idNoticiaNormal1);
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $titular);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->titularNoticiaNormal1 = $titular;
    
                    mysqli_stmt_close($sentencia);
                }
                
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT autor FROM Noticia WHERE idNoticia = ?')) {
                    
                    mysqli_stmt_bind_param($sentencia, "i", $this->idNoticiaNormal1);
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $autor);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->autorNoticiaNormal1 = $autor;
    
                    mysqli_stmt_close($sentencia);
                }
                
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT lugar FROM Noticia WHERE idNoticia = ?')) {
                    
                    mysqli_stmt_bind_param($sentencia, "i", $this->idNoticiaNormal1);
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $lugar);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->lugarNoticiaNormal1 = $lugar;
    
                    mysqli_stmt_close($sentencia);
                }
                
                $this->idRelacionadaNormal1 = 2;
                
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT titularExtendido FROM Noticia WHERE idNoticia = ?')) {
                    
                    mysqli_stmt_bind_param($sentencia, "i", $this->idRelacionadaNormal1);
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $titular);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->titularRelacionadaNormal1 = $titular;
    
                    mysqli_stmt_close($sentencia);
                }
                
                /* NOTICIA NORMAL CON IMAGEN */
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT idNoticia FROM Noticia WHERE (tipo = "normal" AND idNoticia != ?) ORDER BY fechaSubida DESC LIMIT 1')) {
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $idNoticiaNormal);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->idNoticiaNormal2 = $id;
    
                    mysqli_stmt_close($sentencia);
                }
                
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT  ubicacion FROM Imagen, Noticia, NoticiaContieneImagen WHERE (Noticia.idNoticia = ? AND NoticiaContieneImagen = Noticia.idNoticia AND Imagen.idImagen = NoticiaContieneImagen.idImagen)')) {
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $imagen);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->imagenNoticiaNormal = $imagen;
    
                    mysqli_stmt_close($sentencia);
                }
                
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT titularExtendido FROM Noticia WHERE idNoticia = ?')) {
                    
                    mysqli_stmt_bind_param($sentencia, "i", $this->idNoticiaNormal2);
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $titular);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->titularNoticiaNormal2 = $titular;
    
                    mysqli_stmt_close($sentencia);
                }
                
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT autor FROM Noticia WHERE idNoticia = ?')) {
                    
                    mysqli_stmt_bind_param($sentencia, "i", $this->idNoticiaNormal2);
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $autor);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->autorNoticiaNormal2 = $autor;
    
                    mysqli_stmt_close($sentencia);
                }
                
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT lugar FROM Noticia WHERE idNoticia = ?')) {
                    
                    mysqli_stmt_bind_param($sentencia, "i", $this->idNoticiaNormal2);
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $lugar);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->lugarNoticiaNormal2 = $lugar;
    
                    mysqli_stmt_close($sentencia);
                }
            } else {
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT idNoticia FROM Noticia WHERE (tipo = "importante" AND genero = ?) ORDER BY fechaSubida DESC LIMIT 1')) {
    
                    mysqli_stmt_bind_param($sentencia, "s", $sec);
                    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $id);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->idNoticiaImportante = $id;
    
                    mysqli_stmt_close($sentencia);
                }
                
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT titularExtendido FROM Noticia WHERE idNoticia = ?')) {
                    
                    mysqli_stmt_bind_param($sentencia, "i", $this->idNoticiaImportante);
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $titular);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->titularNoticiaImportante = $titular;
    
                    mysqli_stmt_close($sentencia);
                }
            
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT autor FROM Noticia WHERE idNoticia = ?')) {
                    
                    mysqli_stmt_bind_param($sentencia, "i", $this->idNoticiaImportante);
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $autor);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->autorNoticiaImportante = $autor;
    
                    mysqli_stmt_close($sentencia);
                }
                
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT lugar FROM Noticia WHERE idNoticia = ?')) {
                    
                    mysqli_stmt_bind_param($sentencia, "i", $this->idNoticiaImportante);
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $lugar);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->lugarNoticiaImportante = $lugar;
    
                    mysqli_stmt_close($sentencia);
                }
                
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT ubicacion FROM Noticia, Imagen, NoticiaContieneImagen WHERE (Noticia.idNoticia = ? AND Noticia.idNoticia = NoticiaContieneImagen.idNoticia AND Imagen.idImagen = NoticiaContieneImagen.idImagen)')) {
                    
                    mysqli_stmt_bind_param($sentencia, "i", $this->idNoticiaImportante);
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $imagen);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->imagenNoticiaImportante = $imagen;
    
                    mysqli_stmt_close($sentencia);
                }
                
                $this->idRelacionadaImportante1 = 2;
                
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT titularExtendido FROM Noticia WHERE idNoticia = ?')) {
                    
                    mysqli_stmt_bind_param($sentencia, "i", $this->idRelacionadaImportante1);
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $titular);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->titularRelacionadaImportante1 = $titular;
    
                    mysqli_stmt_close($sentencia);
                }
                
                $this->idRelacionadaImportante2 = 2;
                
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT titularExtendido FROM Noticia WHERE idNoticia = ?')) {
                    
                    mysqli_stmt_bind_param($sentencia, "i", $this->idRelacionadaImportante2);
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $titular);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->titularRelacionadaImportante2 = $titular;
    
                    mysqli_stmt_close($sentencia);
                }
                
                $this->idRelacionadaImportante3 = 2;
                
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT titularExtendido FROM Noticia WHERE idNoticia = ?')) {
                    
                    mysqli_stmt_bind_param($sentencia, "i", $this->idRelacionadaImportante3);
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $titular);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->titularRelacionadaImportante3 = $titular;
    
                    mysqli_stmt_close($sentencia);
                }
                
                /* NOTICIA DESTACADA */
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT idNoticia FROM Noticia WHERE (tipo = "destacada" AND genero = ?) ORDER BY fechaSubida DESC LIMIT 1')) {
                    
                    mysqli_stmt_bind_param($sentencia, "s", $sec);
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $id);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->idNoticiaDestacada = $id;
    
                    mysqli_stmt_close($sentencia);
                }
                
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT titularExtendido FROM Noticia WHERE idNoticia = ?')) {
                    
                    mysqli_stmt_bind_param($sentencia, "i", $this->idNoticiaDestacada);
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $titular);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->titularNoticiaDestacada = $titular;
    
                    mysqli_stmt_close($sentencia);
                }
            
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT autor FROM Noticia WHERE idNoticia = ?')) {
                    
                    mysqli_stmt_bind_param($sentencia, "i", $this->idNoticiaDestacada);
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $autor);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->autorNoticiaDestacada = $autor;
    
                    mysqli_stmt_close($sentencia);
                }
                
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT lugar FROM Noticia WHERE idNoticia = ?')) {
                    
                    mysqli_stmt_bind_param($sentencia, "i", $this->idNoticiaDestacada);
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $lugar);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->lugarNoticiaDestacada = $lugar;
    
                    mysqli_stmt_close($sentencia);
                }
                
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT ubicacion FROM Noticia, Imagen, NoticiaContieneImagen WHERE (Noticia.idNoticia = ? AND Noticia.idNoticia = NoticiaContieneImagen.idNoticia AND Imagen.idImagen = NoticiaContieneImagen.idImagen)')) {
                    
                    mysqli_stmt_bind_param($sentencia, "i", $this->idNoticiaDestacada);
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $imagen);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->imagenNoticiaDestacada = $imagen;
    
                    mysqli_stmt_close($sentencia);
                }
                
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT autor FROM Imagen WHERE ubicacion = ?')) {
                    
                    mysqli_stmt_bind_param($sentencia, "s", $this->imagenNoticiaDestacada);
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $autor);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->autorImagenNoticiaDestacada = $autor;
    
                    mysqli_stmt_close($sentencia);
                }
                
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT lugar FROM Imagen WHERE ubicacion = ?')) {
                    
                    mysqli_stmt_bind_param($sentencia, "s", $this->imagenNoticiaDestacada);
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $lugar);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->lugarImagenNoticiaDestacada = $lugar;
    
                    mysqli_stmt_close($sentencia);
                }
                
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT entradilla FROM Noticia WHERE idNoticia = ?')) {
                    
                    mysqli_stmt_bind_param($sentencia, "i", $this->idNoticiaDestacada);
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $entradilla);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->entradillaNoticiaDestacada = $entradilla;
    
                    mysqli_stmt_close($sentencia);
                }
                
                $this->idRelacionadaDestacada1 = 2;
                
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT titularExtendido FROM Noticia WHERE idNoticia = ?')) {
                    
                    mysqli_stmt_bind_param($sentencia, "i", $this->idRelacionadaDestacada1);
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $titular);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->titularRelacionadaDestacada1 = $titular;
    
                    mysqli_stmt_close($sentencia);
                }
                
                $this->idRelacionadaDestacada2 = 2;
                
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT titularExtendido FROM Noticia WHERE idNoticia = ?')) {
                    
                    mysqli_stmt_bind_param($sentencia, "i", $this->idRelacionadaDestacada2);
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $titular);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->titularRelacionadaDestacada2 = $titular;
    
                    mysqli_stmt_close($sentencia);
                }
                
                $this->idRelacionadaDestacada3 = 2;
                
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT titularExtendido FROM Noticia WHERE idNoticia = ?')) {
                    
                    mysqli_stmt_bind_param($sentencia, "i", $this->idRelacionadaDestacada3);
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $titular);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->titularRelacionadaDestacada3 = $titular;
    
                    mysqli_stmt_close($sentencia);
                }
                
                /* NOTICIA NORMAL SIN FOTO */
                
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT idNoticia FROM Noticia WHERE (tipo = "normal" AND genero = ?) ORDER BY fechaSubida DESC LIMIT 1')) {
                    
                    mysqli_stmt_bind_param($sentencia, "s", $sec);
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $id);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->idNoticiaNormal1 = $id;
    
                    mysqli_stmt_close($sentencia);
                }
                
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT titularExtendido FROM Noticia WHERE idNoticia = ?')) {
                    
                    mysqli_stmt_bind_param($sentencia, "i", $this->idNoticiaNormal1);
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $titular);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->titularNoticiaNormal1 = $titular;
    
                    mysqli_stmt_close($sentencia);
                }
                
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT autor FROM Noticia WHERE idNoticia = ?')) {
                    
                    mysqli_stmt_bind_param($sentencia, "i", $this->idNoticiaNormal1);
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $autor);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->autorNoticiaNormal1 = $autor;
    
                    mysqli_stmt_close($sentencia);
                }
                
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT lugar FROM Noticia WHERE idNoticia = ?')) {
                    
                    mysqli_stmt_bind_param($sentencia, "i", $this->idNoticiaNormal1);
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $lugar);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->lugarNoticiaNormal1 = $lugar;
    
                    mysqli_stmt_close($sentencia);
                }
                
                $this->idRelacionadaNormal1 = 2;
                
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT titularExtendido FROM Noticia WHERE idNoticia = ?')) {
                    
                    mysqli_stmt_bind_param($sentencia, "i", $this->idRelacionadaNormal1);
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $titular);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->titularRelacionadaNormal1 = $titular;
    
                    mysqli_stmt_close($sentencia);
                }
                
                /* NOTICIA NORMAL CON IMAGEN */
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT idNoticia FROM Noticia WHERE (tipo = "normal" AND idNoticia != ? AND genero = ?) ORDER BY fechaSubida DESC LIMIT 1')) {
                    
                    mysqli_stmt_bind_param($sentencia, "is", $this->idNoticiaNormal, $sec);
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $id);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->idNoticiaNormal2 = $id;
    
                    mysqli_stmt_close($sentencia);
                }
                
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT  ubicacion FROM Imagen, Noticia, NoticiaContieneImagen WHERE (Noticia.idNoticia = ? AND NoticiaContieneImagen = Noticia.idNoticia AND Imagen.idImagen = NoticiaContieneImagen.idImagen)')) {
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $imagen);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->imagenNoticiaNormal = $imagen;
    
                    mysqli_stmt_close($sentencia);
                }
                
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT titularExtendido FROM Noticia WHERE idNoticia = ?')) {
                    
                    mysqli_stmt_bind_param($sentencia, "i", $this->idNoticiaNormal2);
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $titular);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->titularNoticiaNormal2 = $titular;
    
                    mysqli_stmt_close($sentencia);
                }
                
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT autor FROM Noticia WHERE idNoticia = ?')) {
                    
                    mysqli_stmt_bind_param($sentencia, "i", $this->idNoticiaNormal2);
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $autor);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->autorNoticiaNormal2 = $autor;
    
                    mysqli_stmt_close($sentencia);
                }
                
                $sentencia = mysqli_stmt_init($conn);
                
                if (mysqli_stmt_prepare($sentencia, 'SELECT lugar FROM Noticia WHERE idNoticia = ?')) {
                    
                    mysqli_stmt_bind_param($sentencia, "i", $this->idNoticiaNormal2);
    
                    mysqli_stmt_execute($sentencia);
    
                    mysqli_stmt_bind_result($sentencia, $lugar);
    
                    mysqli_stmt_fetch($sentencia);
                
                    $this->lugarNoticiaNormal2 = $lugar;
    
                    mysqli_stmt_close($sentencia);
                }
            }
        }
        
        public function getImagenNoticiaImportante() {
            return $this->imagenNoticiaImportante;
        }
        
        public function getIdNoticiaImportante() {
            return $this->idNoticiaImportante;
        }
        
        public function getTitularNoticiaImportante() {
            return $this->titularNoticiaImportante;
        }
        
        public function getAutorNoticiaImportante() {
            return $this->autorNoticiaImportante;
        }
        
        public function getLugarNoticiaImportante() {
            return $this->lugarNoticiaImportante;
        }
        
        public function getIdRelacionadaImportante1() {
            return $this->idRelacionadaImportante1;
        }
        
        public function getTitularRelacionadaImportante1() {
            return $this->titularRelacionadaImportante1;
        }
        
        public function getIdRelacionadaImportante2() {
            return $this->idRelacionadaImportante2;
        }
        
        public function getTitularRelacionadaImportante2() {
            return $this->titularRelacionadaImportante2;
        }
        
        public function getIdRelacionadaImportante3() {
            return $this->idRelacionadaImportante3;
        }
        
        public function getTitularRelacionadaImportante3() {
            return $this->titularRelacionadaImportante3;
        }
        
        public function getImagenNoticiaDestacada() {
            return $this->imagenNoticiaDestacada;
        }
        
        public function getAutorImagenNoticiaDestacada() {
            return $this->autorImagenNoticiaDestacada;
        }
        
        public function getLugarImagenNoticiaDestacada() {
            return $this->lugarImagenNoticiaDestacada;
        }
        
        public function getIdNoticiaDestacada() {
            return $this->IdNoticiaDestacada;
        }
        
        public function getTitularNoticiaDestacada() {
            return $this->titularNoticiaDestacada;
        }
        
        public function getAutorrNoticiaDestacada() {
            return $this->autorNoticiaDestacada;
        }
        
        public function getLugarNoticiaDestacada() {
            return $this->lugarNoticiaDestacada;
        }
        
        public function getEntradillaNoticiaDestacada() {
            return $this->entradillaNoticiaDestacada;
        }
        
        public function getIdRelacionadaDestacada1() {
            return $this->idRelacionadaDestacada1;
        }
        
        public function getTitularRelacionadaDestacada1() {
            return $this->titularRelacionadaDestacada1;
        }
        
        public function getIdRelacionadaDestacada2() {
            return $this->idRelacionadaDestacada2;
        }
        
        public function getTitularRelacionadaDestacada2() {
            return $this->titularRelacionadaDestacada2;
        }
        
        public function getIdRelacionadaDestacada3() {
            return $this->idRelacionadaDestacada3;
        }
        
        public function getTitularRelacionadaDestacada3() {
            return $this->titularRelacionadaDestacada3;
        }
        
        public function getIdNoticiaNormal1() {
            return $this->idNoticiaNormal1;
        }
        
        public function getTitularNoticiaNormal1() {
            return $this->titularNoticiaNormal1;
        }
        
        public function getAutorNoticiaNormal1() {
            return $this->autorNoticiaNormal1;
        }
        
        public function getLugarNoticiaNormal1() {
            return $this->lugarNoticiaNormal1;
        }
        
        public function getIdRelacionadaNormal1() {
            return $this->idNoticiaNormal1;
        }
        
        public function getTitularRelacionadaNormal1() {
            return $this->titularNoticiaNormal1;
        }
        
        public function getImagenNoticiaNormal() {
            return $this->imagenNoticiaNormal;
        }
        
        public function getIdNoticiaNormal2() {
            return $this->idNoticiaNormal2;
        }
        
        public function getTitularNoticiaNormal2() {
            return $this->titularNoticiaNormal2;
        }
        
        public function getAutorNoticiaNormal2() {
            return $this->autorNoticiaNormal2;
        }
        
        public function getLugarNoticiaNormal2() {
            return $this->lugarNoticiaNormal2;
        }
    }
?>