<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MX_Controller {

       public function __construct()
       {
            parent::__construct();
            // Your own constructor code
       }

       public function index(){
       		$this->load->view('welcomepage');
       }
}
?>