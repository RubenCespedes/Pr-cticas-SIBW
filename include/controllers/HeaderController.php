<?php
/**
 * Created by PhpStorm.
 * User: carlos
 * Date: 17/04/2017
 * Time: 19:08
 */

<?php
	include 'include/data/Header.php';
	include 'include/views/HeaderView.php';
	class HeaderController {

        private $header;
        private $headerView;

        public function HeaderController() {

            $this->header = new Header();
            $this->headerView = new HeaderView($this->header);
        }

        public function start() {

            $this->headerView->generateHTML();
        }
    }

?>