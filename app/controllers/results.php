<?php
    class Results extends C_Controller {

        public function index()
        {
 			$this->addStyle('styles');

        	$this->setView('results/index');
        }

    }
  ?>
