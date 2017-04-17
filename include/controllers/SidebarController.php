<?php
/**
 * Created by PhpStorm.
 * User: carlos
 * Date: 17/04/2017
 * Time: 19:08
 */

<?php
	include 'include/data/Sidebar.php';
	include 'include/views/SidebarView.php';
	class SidebarController {

        private $sidebar;
        private $sidebarView;

        public function SidebarController() {

            $this->sidebar = new Sidebar();
            $this->sidebarView = new SidebarView($this->sidebar);
        }

        public function start() {

            $this->sidebarView->generateHTML();
        }
    }

?>