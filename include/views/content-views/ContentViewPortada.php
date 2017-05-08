<?php

    class ContentViewPortada {
        private portada;
        
        public function ContentViewPortada($portada) {
            $this->portada = $portada;
        }
        
        public function generateHTML() {
            echo "<nav>
    
                <li><a href='index.php?sec=españa'>españa</a></li> |
                <li><a href='index.php?sec=internacional'>internacional</a></li> |
                <li><a href='index.php?sec=deportes'>deportes</a></li> |
                <li><a href='index.php?sec=politica'>politica</a></li> |
                <li><a href='index.php?sec=economia'>economia</a></li> |
                <li><a href='index.php?sec=tecnologia'>tecnologia</a></li> |
                <li><a href='index.php?sec=sociedad'>sociedad</a></li> |
                <li><a href='index.php?sec=opinion'>opinion</a></li> |
                <li><a href='index.php?sec=cultura'>cultura</a></li> |
                <li><a href='index.php?sec=moda'>moda</a></li> |
    
                <section class='redes_sociales'>
                    <i class='fa fa-facebook'></i>
                    <i class='fa fa-twitter'></i>
                    <i class='fa fa-google-plus'></i>
	           </section>	
            </nav>";
            
            echo "<div id='cuerpo_noticias'>
                <article class='cont_noticia_importante'>
        
                <section class='foto_noticia_importante'>
                    <img src='" . $this->portada->getImagenNoticiaImportante() . "' width='100%' height='440px'>
                </section>
        
                <section class='titulo_noticia_importante'>
                    <a href='index.php?idNoticia=" . $this->portadda->getIdNoticiaImportante() . ">" . $this->portada->getTitularNoticiaImportante() . "</a>
                </section>
        
                <footer>
                    <span class='autor'>" . $this->portada->getAutorNoticiaImportante() . "</span>
            <span>" . $this->portada->getLugarNoticiaImportante() . "</span>
        </footer>
        
        <section class='noticias_relacionadas'>
            <span><a href='index.php?idNoticia=" . $this->portada->getIdRelacionadaImportante1() . "'>· " . $this->portada->getTitularRelacionadaImportante1() . "</a></span>
            <span><a href='index.php?idNoticia=" . $this->portada->getIdRelacionadaImportante2() . "'>· " . $this->portada->getTitularRelacionadaImportante2() . "</a></span>
            <span class='ultima_relacionada'><a href='index.php?idNoticia=" . $this->portada->getIdRelacionadaImportante3() . "'>· " . $this->portada->getTitularRelacionadaImportante3() . "</a></span>
        </section>
        
    </article>
    <article class='cont_noticia_destacada'>
        
        <section class='foto_noticia'>
            <img src='" . $this->portada->getImagenNoticiaDestacada() . "' alt='foto noticia destacada' width='100%' height='300px'>
        </section>
        
        <footer>
            <span class='autor'>" . $this->portada->getAutorImagenNoticiaDestacada() . "</span>
            <span>" . $this->portada->getLugarImagenNoticiaDestacada() "</span>
        </footer>
        
        <section class='titulo_noticia_destacada'>
            <a href='index.php?idNoticia" . $this->portada->getIdNoticiaDestacada() . "'>" . $this->portada->getTitularNoticiaDestacada() . "</a>
        </section>
        
        <footer>
            <span class='autor'>" . $this->portada->getAutorNoticiaDestacada() . "</span>
            <span>" . $this->portada->getLugarNoticiaDestacada() . "</span>
        </footer>
        
        <section class='entradilla'>" . $this->portada->getEntradillaNoticiaDestacada() . "
        </section>
        
        <section class='noticias_relacionadas relacionadas_destacadas'>
            <span><a href='index.php?idNoticia=" . $this->portada->getIdRelacionadaDestacada1() . "'>· " .  $this->portada->getTitularRelacionadaDestacada1() . "</a></span>
            <span><a href='index.php?idNoticia=" . $this->portada->getIdRelacionadaDestacada2() . "'>· " .  $this->portada->getTitularRelacionadaDestacada2() . "</a></span>
            <span class='ultima_relacionada'><a href='index.php?idNoticia=" . $this->portada->getIdRelacionadaDestacada3() . "'>· " .  $this->portada->getTitularRelacionadaDestacada3() . "</a></span>
        </section>
        
    </article>
    <article class='cont_noticia_normal'>
        
        <section class='titulo_noticia sola'>
            <a href='index.php?idNoticia" . $this->portada->getIdNoticiaNormal1() . "'>" . $this->portada->getTitularNoticiaNormal1() . "</a>
        </section>
        
        <footer>
            <span class='autor'>" . $this->portada->getAutorNoticiaNormal1() . "</span>
            <span>" . $this->portada->getLugarNoticiaNormal1() . "</span>
        </footer>
        
        <section class='noticias_relacionadas'>
            <span><a href='index.php?idNoticia=" . $this->portada->getIdRelacionadaNormal1() . "'>· " .  $this->portada->getTitularRelacionadaNormal1() . "</a></span>
        </section>
        
    </article>
    <article class='cont_noticia_normal'>
        
        <section class='foto_noticia'>
            <img src='" . $this->portada->getImagenNoticiaNormal() . "' width='100%' height='250px' alt='foto de la noticia'>
        </section>
        
        <section class='titulo_noticia'>
            <a href='index.php?idNoticia=" . $this->portada->getIdNoticiaNormal()2 . "'>" . $this->portada->getTitularNoticiaNormal2() . "</a>
        </section>
        
        <footer>
            <span class='autor'>" . $this->portada->getAutorNoticiaNormal2() . "</span>
            <span>" . $this->portada->getLugarNoticiaNormal2() . "</span>
        </footer>
        
    </article>
    <article class='cont_noticia_principal'>
    
        <section class='foto_noticia'>
            <img src='" . $this->portada->getImagenNoticiaPrincipal1() . "' width='100%' height='200px' alt='foto de la noticia'>
        </section>
        
        <footer>
            <span class='autor'>" . $this->portada->getAutorNoticiaPrincipal1() ."</span>
            <span>" . $this->portada->getLugarNoticiaPrincipal1() . "</span>
        </footer>
        
        <section class='titulo_noticia inferior'>
            <a href='index.php?idNoticia=" . $this->portada->getIdNoticiaPrincipal1() . "'>" . $this->portada->getTitularNoticiaPrincipal1() . "</a>
        </section>
        
    </article>
    <article class='cont_noticia_secundaria'>
        
        <section class='foto_noticia'>
            <img src='" . $this->portada->getImagenNoticiaSecundaria11() ."' width='100%' height='200px'>
        </section>
        
        <footer>
            <span class='autor'>" . $this->portada->getAutorNoticiaSecundaria11() . "</span>
            <span>" . $this->portada->getLugarNoticiaSecundaria11() . "</span>
        </footer>
        
        <section class='titulo_noticia inferior'>
            <a href='index.php?idNoticia=" . $this->portadda->getIdNoticiaSecundaria11() . "'>" . $this->portada->getTitularNoticiaSecundaria11() . "</a>
        </section>
        
    </article>
    <article class='cont_noticia_secundaria'>
        
        <section class='foto_noticia'>
            <img src='" . $this->portada->getImagenNoticiaSecundaria12() ."' width='100%' height='200px'>
        </section>
        
        <footer>
            <span class='autor'>" . $this->portada->getAutorNoticiaSecundaria12() . "</span>
            <span>" . $this->portada->getLugarNoticiaSecundaria12() . "</span>
        </footer>
        
        <section class='titulo_noticia inferior'>
            <a href='index.php?idNoticia=" . $this->portadda->getIdNoticiaSecundaria12() . "'>" . $this->portada->getTitularNoticiaSecundaria12() . "</a>
        </section>
        
    </article>
    <article class='cont_noticia_principal clear'>
    
        <section class='foto_noticia'>
            <img src='" . $this->portada->getImagenNoticiaPrincipal2() . "' width='100%' height='200px' alt='foto de la noticia'>
        </section>
        
        <footer>
            <span class='autor'>" . $this->portada->getAutorNoticiaPrincipal2() ."</span>
            <span>" . $this->portada->getLugarNoticiaPrincipal2() . "</span>
        </footer>
        
        <section class='titulo_noticia inferior'>
            <a href='index.php?idNoticia=" . $this->portada->getIdNoticiaPrincipal2() . "'>" . $this->portada->getTitularNoticiaPrincipal2() . "</a>
        </section>
        
    </article>
    <article class='cont_noticia_secundaria'>
        
        <section class='foto_noticia'>
            <img src='" . $this->portada->getImagenNoticiaSecundaria21() ."' width='100%' height='200px'>
        </section>
        
        <footer>
            <span class='autor'>" . $this->portada->getAutorNoticiaSecundaria21() . "</span>
            <span>" . $this->portada->getLugarNoticiaSecundaria21() . "</span>
        </footer>
        
        <section class='titulo_noticia inferior'>
            <a href='index.php?idNoticia=" . $this->portadda->getIdNoticiaSecundaria21() . "'>" . $this->portada->getTitularNoticiaSecundaria21() . "</a>
        </section>
        
    </article>
    <article class='cont_noticia_secundaria'>
        
        <section class='foto_noticia'>
            <img src='" . $this->portada->getImagenNoticiaSecundaria22() ."' width='100%' height='200px'>
        </section>
        
        <footer>
            <span class='autor'>" . $this->portada->getAutorNoticiaSecundaria22() . "</span>
            <span>" . $this->portada->getLugarNoticiaSecundaria22() . "</span>
        </footer>
        
        <section class='titulo_noticia inferior'>
            <a href='index.php?idNoticia=" . $this->portadda->getIdNoticiaSecundaria22() . "'>" . $this->portada->getTitularNoticiaSecundaria22() . "</a>
        </section>
        
    </article>";
        }
    }

?>