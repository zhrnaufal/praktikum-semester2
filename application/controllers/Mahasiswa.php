<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    public function index(){

        $this->load->model('mahasiswa_model','mahasiswa');

        $data['list_mahasiswa']=$this->mahasiswa->getAll();

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mahasiswa/index',$data);
        $this->load->view('layout/footer');
        
    }

    public function view(){
        $_nim = $this->input->get('id');
        $this->load->model('mahasiswa_model','mahasiswa');
        $data['mhs']=$this->mahasiswa->findById($_nim);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mahasiswa/view',$data);
        $this->load->view('layout/footer');
    }

    public function create(){
        $data['judul']='Form Kelola Mahasiswa';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mahasiswa/create',$data);
        $this->load->view('layout/footer');
    }

    public function save(){
        $this->load->model("mahasiswa_model","mahasiswa");

        $_nim = $this->input->post('nim');
        $_nama= $this->input->post('nama');
        $_gender = $this->input->post('jk');
        $_tmp_lahir = $this->input->post('tmp_lahir');
        $_tgl_lahir = $this->input->post('tgl_lahir');
        $_prodi = $this->input->post('prodi');
        $_ipk = $this->input->post('ipk');
        $_idedit = $this->input->post('idedit');

        $data_mhs[]=$_nim;
        $data_mhs[]=$_nama;
        $data_mhs[]=$_gender;
        $data_mhs[]=$_tmp_lahir;
        $data_mhs[]=$_tgl_lahir;
        $data_mhs[]=$_prodi;
        $data_mhs[]=$_ipk;

        if(isset($_idedit)){
        
            $data_mhs[]=$_idedit;
            $this->mahasiswa->update($data_mhs);  
        }else{ 
            
            $this->mahasiswa->save($data_mhs);   
        }
        
        redirect(base_url().'index.php/mahasiswa/view?id='.$_nim, 'refresh');

    }

    public function edit(){
        $_id = $this->input->get('id');
        $this->load->model("mahasiswa_model","mahasiswa");
        $mhsedit = $this->mahasiswa->findById($_id);

        $data['judul']='Form Update Mahasiswa';
        $data['mhsedit']=$mhsedit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mahasiswa/update',$data);
        $this->load->view('layout/footer');
    }

    public function delete(){
        $_id = $this->input->get('id');
        $this->load->model("mahasiswa_model","mahasiswa");
        $this->mahasiswa->delete($_id);
        redirect(base_url().'index.php/mahasiswa', 'refresh');
    }
    
    
    
    public function upload() {
        error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
        $_idmahasiswa = $this->input->post('idmahasiswa');
        $this->load->model('mahasiswa_model', 'mhs');
        $mahasiswa = $this->mhs->findById($_idmahasiswa);
        $data['mahasiswa'] = $mahasiswa;

        $config['upload_path'] = './uploads/mahasiswa';
        $config['allowed_types'] = 'jpg|png';
        $config['overwrite'] = true;
        $config['max_size'] = 2894;
        $config['max_width'] = 2894;
        $config['max_height'] = 2894;


        // menginisialisasi file upload
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) {
            $data['error'] = $this->upload->display_errors();
        } else {
            $data['error'] = 'data sukses';
            $data['upload_data'] = $this->upload->data();
        }

        // kirim dan render ke detail
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mahasiswa/view', $data);
        $this->load->view('layout/footer');
    }
    }
