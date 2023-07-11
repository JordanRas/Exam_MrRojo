<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    require('Basesession.php');
    class Frontoffice extends Basesession{
        
        public function indexfront(){
            // echo("INDEX FRONT");

            $userdata=$this->session->userdata('user');
            $data = array();
            $data['userdata']=$userdata;
            $this->load->model('Regime');
            $listeregime=$this->Regime->select();
            $data['listeregime']=$listeregime;
            $this->load->view('forms/index_client', $data);
            

        }
        
    }
?>