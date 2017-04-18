<?php
class Metadata {

    private $description;
    private	$keywords;
    private $title;


    public function Metadata() {

        global $sec;

        switch($sec) {
            case 'nacional':
                $this->description = 'Noticia nacional del Periodico El Profeta';
                $this->keywords = 'Noticia nacional Periodico, Noticia nacional Periodico Granada, Periodico nacional Granada, Periodico nacional España, Periodico nacional';
                $this->title = 'Noticia nacional Periodico El Profeta';
                break;
            case 'internacional':
                $this->description = 'Noticia internacional del Periodico El Profeta';
                $this->keywords = 'Noticia internacional Periodico, Noticia internacional Periodico Granada, Periodico internacional Granada, Periodico internacional España, Periodico internacional';
                $this->title = 'Noticia internacional Periodico El Profeta';
                break;
            case 'politica':
                $this->description = 'Noticia politica del Periodico El Profeta';
                $this->keywords = 'Noticia politica Periodico, Noticia politica Periodico Granada, Periodico politica Granada, Periodico politica España, Periodico politica';
                $this->title = 'Noticia politica Periodico El Profeta';
                break;
            case 'deportes':
                $this->description = 'Noticia deportes del Periodico El Profeta';
                $this->keywords = 'Noticia deportes Periodico, Noticia deportes Periodico Granada, Periodico deportes Granada, Periodico deportes España, Periodico deportes';
                $this->title = 'Noticia deportes Periodico El Profeta';
                break;
            case 'tecnologia':
                $this->description = 'Noticia tecnologia del Periodico El Profeta';
                $this->keywords = 'Noticia tecnologia Periodico, Noticia tecnologia Periodico Granada, Periodico tecnologia Granada, Periodico tecnologia España, Periodico tecnologia';
                $this->title = 'Noticia tecnologia Periodico El Profeta';
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