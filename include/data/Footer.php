<?php

class Footer {

    private $titulo_footer;
    private $nombre_periodico;
    private $direccion;
    private $phone;
    private $phone2;
    private $email;
    private $copyright;

    public function Footer() {
        
        $this->titulo_footer = "CONTACTO";
        $this->nombre_periodico = "El Profeta";
        $this->direccion = 'C/ Plaza Flores, 8 . España, Almería';

        $this->phone = '+30 22890 29001';
        $this->phone2 = '+30 22890 78788';
        $this->email = 'info@Kenshomykonos.com';

        $this->copyright = 'El Profeta © 2016 - 2017 All Rights Reserved';
    }



    public function getTitulofooter() {
        return $this->titulo_footer;
    }


    public function getNombrePeriodico() {

        return $this->nombre_periodico;
    }

    public function getDireccion() {

        return $this->direccion;
    }


    public function getPhone() {

        return $this->phone;
    }

    public function getPhone2() {

        return $this->phone2;
    }


    public function getEmail() {

        return $this->email;
    }


    public function getCopyRight() {

        return $this->copyright;
    }
}

?>