<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

require('Basesession.php');
    class Backoffice extends Basesession{

        
        public function indexback(){
            // echo("INDEX BACK");
            $this->load->view('forms/index_admin');
        }


        public function insert_menu(){
            // echo("INDEX BACK");
            $this->load->view('forms/nouveau_menu');
        }


        public function insert_regime(){
            // echo("INDEX BACK");
            $this->load->view('forms/nouveau_regime');
        }

        public function insert_sport(){
            // echo("INDEX BACK");
            $this->load->view('forms/nouveau_sport');
        }

        public function ajouter_au_regime(){
            // echo("INDEX BACK");
            $this->load->view('forms/ajouter_menu');
        }

        public function codes(){
            // echo("INDEX BACK");
            $this->load->view('forms/codes');
        }

        
        public function details($id)
        {
            echo("DETAILS");
        }
    }
?> 