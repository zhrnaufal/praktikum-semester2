<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi extends CI_Controller {

    public function index(){
        $this->load->model('prodi_model','prodi');
        $list_prodi = $this->prodi->getAll();

        $data['list_prodi'] = $list_prodi;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('prodi/index',$data);
        $this->load->view('layout/footer');
    }

    public function view(){
        $kode = $this->input->get('id');
        $this->load->model('prodi_model','prodi');
        $data['prd']=$this->prodi->findById($kode);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('prodi/view',$data);
        $this->load->view('layout/footer');
    }

    public function create(){
        $data['judul']='Form Kelola Program Studi';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('prodi/create',$data);
        $this->load->view('layout/footer');
    }

    public function save(){
        $this->load->model("prodi_model","prodi");

        $kode = $this->input->post('kode');
        $nama= $this->input->post('nama');
        $kaprodi = $this->input->post('kaprodi');
        

        $data_prd[]=$kode;
        $data_prd[]=$nama;
        $data_prd[]=$kaprodi;
       

        if(isset($_idedit)){
        
            $data_prd[]=$_idedit;
            $this->prodi->update($data_prd);  
        }else{ 
            
            $this->prodi->save($data_prd);   
        }
        
        redirect(base_url().'index.php/prodi/view?id='.$kode, 'refresh');

    }

    public function edit(){
        $_id = $this->input->get('id');
        $this->load->model("prodi_model","prodi");
        $prdedit = $this->prodi->findById($_id);

        $data['judul']='Form Update Program Studi';
        $data['prdedit']=$prdedit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('prodi/update',$data);
        $this->load->view('layout/footer');
    }

    public function delete(){
        $_id = $this->input->get('id');
        $this->load->model("prodi_model","prodi");
        $this->prodi->delete($_id);
        redirect(base_url().'index.php/prodi', 'refresh');
    }
}