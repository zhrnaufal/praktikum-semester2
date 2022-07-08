<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Praktikum2 extends CI_Controller
{
    public function index(){
        
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('praktikum2/praktikum2');
        $this->load->view('layout/footer');

    }
}
