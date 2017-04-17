<?php
class Header {

    private $logoPeriodico;

    private $idNacional;
    private $idInternacional;
    private $idPolitica;
    private $idDeportes;
    private $idTecnologia;


    private $secInputMain;
    private $secInput;

    public function Header() {

        $this->logoPeriodico = 'images/icons/logo.png';

        global $sec;

        $extraInput;


        if(!empty($sec)) {
            switch($sec) {

                case 'nacional':
                    $this->idNacional = 'active';
                    break;
                case 'internacional':
                    $this->idInternacional = 'active';
                    break;
                case 'politica':
                    $this->idPolitica = 'active';
                    break;
                case 'deportes':
                    $this->idDeportes = 'active';
                    break;
                case 'tecnologia':
                    $this->idTecnologia = 'active';
                    break;
            }


        }


    }

    public function getLogoPeriodico() {

        return $this->logoPeriodico;
    }

    public function getIdNacional() {

        return $this->idNacional;
    }

    public function getIdInternacional() {

        return $this->idInternacional;
    }

    public function getIdPolitica() {

        return $this->idPolitica;
    }

    public function getIdDeportes() {

        return $this->idDeportes;
    }

    public function getIdTecnologia() {

        return $this->idTecnologia;
    }

}

?>