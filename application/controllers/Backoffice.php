<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

require('Basesession.php');
    class Backoffice extends Basesession{

        
        public function indexback(){
            echo("INDEX BACK");
        }

        
        public function details($id)
        {
            echo("DETAILS");
        }
    }
?> 