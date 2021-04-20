<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller{

    function __construct()
    {
        parent:: __construct();
        $this->load->model('M_account');
    }
    
    public function index(){
        $this->load->view('Front_End/Head_Foot/head');
        $this->load->view('Front_End/index_account');
        $this->load->view('Front_End/Head_Foot/foot');

    }

    public function input(){
        $first=$this->input->post('first');
        $last=$this->input->post('last');
        $email=$this->input->post('email');
        $pass=$this->input->post('password');

        $data = array(
            'firts_name' => $first,
            'last_name' => $last,
            'email' => $email,
            'password' => $pass
        );

        $this->M_account->input($data);

        if($this->db->affected_rows()){
            echo "<script>alert('Data anda Berhasil Di simpan');</script>";
            $this->load->view('Front_End/Head_Foot/head');
            $this->load->view('Front_End/index_login');
            $this->load->view('Front_End/Head_Foot/foot');
        }else{
            echo "<script>alert('Data Gagal Disimpan');</script>";
            $this->load->view('Front_End/Head_Foot/head');
            $this->load->view('Front_End/index_account');
            $this->load->view('Front_End/Head_Foot/foot');
        }
    }

}