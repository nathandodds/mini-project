<?php
    class Grid extends C_Controller {

        public function index()
        {
        	$this->addStyle('grids');

        	$this->setView('grid/index');
        }

    }
  ?>
