<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Praktikum5 extends CI_Controller
{
    public function index(){
        
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('praktikum5/praktikum5');
        $this->load->view('layout/footer');

    }
}
