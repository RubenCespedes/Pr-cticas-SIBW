<?php

class FooterView {
    private $footer;

    public function FooterView($footer) {
        $this->footer = footer;
    }


    public function generateHTML() {
        echo "<footer id='footer_general'>

                    <section id='redes_sociales'>
                        <i class='fa fa-facebook'></i>
                        <i class='fa fa-twitter'></i>
                        <i class='fa fa-google-plus'></i>
                    </section>
                
                    <section id='contacto'>
                        <p>" . $this->footer->getTitulofooter() . "</p>
                        <p>" . $this->footer->getNombrePeriodico() . "</p>
                        <p>" . $this->footer->getDireccion() . "</p>
                        <p>" . $this->footer->getPhone() . " / " . $this->footer->getPhone2() . "</p>
                        <p>" . $this->footer->getEmail() . "</p>
                    </section>
                
                    <section id='copyright'>
                        <p>" . $this->footer->getCopyRight() . "</p>
                    </section>
                
                
                </footer>";
    }
}

?>