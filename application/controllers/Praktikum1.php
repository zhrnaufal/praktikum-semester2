<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Praktikum1 extends CI_Controller
{
    public function index(){
        
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('praktikum1/praktikum1');
        $this->load->view('layout/footer');

    }
}
