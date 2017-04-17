<?php
class ContentNoticia {


    //variables conforme a la base de datos
    private $idNoticia;
    private $titularExtendido;
    private $titularCorto;
    private $entradilla;
    private $cuerpo;
    private $autor;
    private $lugar;
    private $genero;
    private $tipo;
    private $fechaSubida;
    private $horaActualizacion;

    private $etiquetas;
    private $imagenes;



    public function ContentNoticia() {

        // POR QUE PONE ESTO EL TIO?? $this->room = htmlspecialchars($_GET["room_type"]);




        //RELLENAR TODAS LAS VARIABLES CON LLAMADAS A LA BASE DE DATOS
        $this->idNoticia = 0; //COMO SABER QUE INDEX TIENE LA NOTICIA, A CUAL ESTAMOS LLAMANDO??
        $this->titularExtendido = 0;
        $this->titularCorto = 0;
        $this->entradilla = 0;
        $this->cuerpo = 0;
        $this->autor = 0;
        $this->lugar = 0;
        $this->genero = 0;
        $this->tipo = 0;
        $this->fechaSubida = 0;
        $this->horaActualizacion = 0;

        $this->etiquetas = array();
        $this->imagenes = array();


    }

    public function getIdNoticia() {

        return $this->idNoticia;
    }

    public function getTitularExtendido() {

        return $this->titularExtendido;
    }

    public function getTitularCorto() {

        return $this->titularCorto;
    }

    public function getEntradilla() {

        return $this->entradilla;
    }

    public function getCuerpo() {

        return $this->cuerpo;
    }

    public function getAutor() {

        return $this->autor;
    }

    public function getLugar() {

        return $this->lugar;
    }

    public function getGenero() {

        return $this->genero;
    }

    public function getTipo() {

        return $this->tipo;
    }

    public function getFechaSubida() {

        return $this->fechaSubida;
    }

    public function getHoraActualizacion() {

        return $this->horaActualizacion;
    }

    public function getEtiquetas() {

        return $this->etiquetas;
    }

    public function getImagenes() {

        return $this->imagenes;
    }
}

?>