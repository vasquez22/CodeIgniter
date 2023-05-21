<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Registro extends CI_Controller{
    public function index(){
        $this->load->view('registro');
    }
}