<?php

class Metadata {
    private $description;
    private $keywords;
    private $title;
    
    public function Metadata() {
        global $idNoticia;
        
        if(empty($idNoticia)) {
            global $sec;
            
            switch($sec){
                case 'nacional':
                    $this->description = "Portada con las noticias nacionales del periódico 'El Profeta'";
                    $this->keywords = "Noticia nacional Periodico, Noticia nacional Periodico Granada, Periodico nacional Granada, Periodico nacional España, Periodico nacional";
                    $this->title = "Noticia nacional periódico 'El Profeta'";
                    break;
                case 'internacional':
                    $this->description = "Portada con las noticias internacionales del periódico 'El Profeta'";
                    $this->keywords = "Noticia internacional Periodico, Noticia internacional Periodico Granada, Periodico internacional Granada, Periodico internacional España, Periodico internacional";
                    $this->title = "Noticia internacional periódico 'El Profeta'";
                    break;
                case 'politica':
                    $this->description = "Portada con las noticias políticas del periódico 'El Profeta'";
                    $this->keywords = "Noticia politica Periodico, Noticia politica Periodico Granada, Periodico politica Granada, Periodico politica España, Periodico politica";
                    $this->title = "Noticia política periódico 'El Profeta'";
                    break;
                case 'deportes':
                    $this->description = "Portada con las noticias deportivas del periódico 'El Profeta'";
                    $this->keywords = "Noticia deportiva Periodico, Noticia deportiva Periodico Granada, Periodico deportiva Granada, Periodico deportiva España, Periodico deportivo";
                    $this->title = "Noticia deportes periódico 'El Profeta'";
                    break;
                case 'tecnologia':
                    $this->description = "Portada con las noticias tecnologicas del periódico 'El Profeta'";
                    $this->keywords = "Noticia tecnologica Periodico, Noticia tecnologica Periodico Granada, Periodico tecnologica Granada, Periodico tecnologica España, Periodico deportivo";
                    $this->title = "Noticia deportes periódico 'El Profeta'";
                    break;
                default:
                    $this->description = "Portada del periódico 'El Profeta'";
                    $this->keywords = "Noticia Periodico, Noticia Periodico Granada, Periodico Granada, Periodico España, Periodico nacional";
                    $this->title = "Portada periódico 'El Profeta'";
                    break;     
            } 
        } else {
            $this->description = "Noticia del periódico 'El Profeta'";
            $this->keywords = "Noticia Periódico, Noticia Periódico Granada, Periódico Granada, Periódico España, Periódico nacional";
            $this->title = "Noticia periódico 'El Profeta'";
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