<?php
class Footer {

    private $socialNetworkLinks;
    private $socialNetworkIcons;
    private $titulo_footer;
    private $nombre_periodico
    private $direccion;
    private $phone;
    private $phone2;
    private $email;
    private $copyright;

    public function Footer() {


        //esta parte la obtenemos de una clase del css, pero deberiamos hacerlo nosotros manualmente
        $this->socialNetworkIcons = array('images/icons/facebook.png',
            'images/icons/twitter.png',
            'images/icons/instagram.png',
            'images/icons/google+.png');
        $this->socialNetworkLinks = array('https://www.facebook.com/Hotel-Plaza-Nueva-176542882374100/?fref=ts',
            'https://twitter.com/HOTELPLAZANUEVA',
            'https://www.instagram.com/explore/locations/44043216/',
            'https://plus.google.com/117874938358313917312/posts');

        $this->titulo_footer = 'CONTACTO';
        $this->nombre_periodico = 'El Profeta';
        $this->direccion = 'C/ Plaza Flores, 8 . España, Almería';

        $this->phone = '+30 22890 29001';
        $this->phone2 = '+30 22890 78788';
        $this->email = 'info@Kenshomykonos.com';

        $this->copyright = 'El Profeta © 2016 - 2017 All Rights Reserved';
    }


    public function getSocialNetworkIcons() {

        return $this->socialNetworkIcons;
    }

    public function getSocialNetworkLinks() {

        return $this->socialNetworkLinks;
    }

    public function getTitulo_footer() {

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