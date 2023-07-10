<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
class BaseSession extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $confirmsession = $this->session->has_userdata('user');

        if ($confirmsession == false) {
            redirect(site_url('acceuil/return_login'));
        } 
    }
}
?>