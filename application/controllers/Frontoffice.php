<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    require('Basesession.php');
    class Frontoffice extends Basesession{
        
        public function indexfront(){
            // echo("INDEX FRONT");

            $this->load->view('forms/index_client');

        }
        
    }
?>