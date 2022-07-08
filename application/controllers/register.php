<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function index(){
        $data = [];
        $this->load->view('register/register',$data);

    }

    public function save(){
        $this->load->model("register_model","user");

        $uname = $this->input->post('username');
        $pass= $this->input->post('password');
        $email = $this->input->post('email');
        $role = $this->input->post('role');
        $_idedit = $this->input->post('idedit');
        
        

        $data_rgt[]=$uname;
        $data_rgt[]=$pass;
        $data_rgt[]=$email;
        $data_rgt[]=$role;

        if(isset($_idedit)){
        
            $data_mhs[]=$_idedit;
            $this->user->update($data_rgt);  
        }else{ 
            
            $this->user->save($data_rgt);   
        }
        
        redirect(base_url().'index.php/login');
    }
}