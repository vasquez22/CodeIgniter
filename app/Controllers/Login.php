<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Login extends CI_Controller{
    public function index(){
        $this->load->view('login');
    }
}