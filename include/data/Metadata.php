<?php
class Metadata {

    private $description;
    private	$keywords;
    private $title;


    public function Metadata() {

        global $sec;

        switch($sec) {
            case 'noticia_impresa':
                $this->description = 'Noticia impresa del Hotel Plaza Nueva en Granada';
                $this->keywords = 'Noticia impresa Periodico, Noticia impresa Periodico Granada, Periodico impreso Granada, Periodico impreso España, Periodico impreso';
                $this->title = 'Noticia Periodico El Profeta';
                break;
            case 'noticia':
                $this->description = 'Noticia del Hotel Plaza Nueva en Granada';
                $this->keywords = 'Noticia Periodico, Noticia Periodico Granada, Periodico Granada, Periodico España, Periodico';
                $this->title = 'Noticia Periodico El Profeta';
                break;
            default:
                $this->description = 'Página principal del periodico El Profeta';
                $this->keywords = 'Periodico Granada, Periodico España, Periodico';
                $this->title = 'Periodico El Profeta';
                break;
        }
    }

    public function getDescription() {

        return $this->description;
    }

    public function getKeywords() {

        return $this->keywords;
    }

    public function getTitle() {

        return $this->title;
    }

}

?>