<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_crud');
    }

   public function input(){
       $name= $this->input->post('name');
       $program= $this->input->post('program');
       $hp= $this->input->post('hp');
       $email= $this->input->post('email');
       $pass= $this->input->post('pass');

       $data=array(
           'id_program' => $program,
           'name' => $name,
           'phone_number'=> $hp,
           'email' => $email,
           'password' =>$pass
       );

       $this->M_crud->insert_data($data);

       if($this->db->affected_rows()){
           echo "<script>alert('data berhasil disimpan');</script>";
           $this->load->view('Front_End/index_registration');
       }else{
        echo "<script>alert('data gagal disimpan');</script>";
        $this->load->view('Front_End/index_registration');
       }
    }

    public function edit($id_student){
        $data['mahasiswa']= $this->M_crud->get_data_by_id($id_student)->row_array();
        $data['email']=$this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('Front_End/index_edit', $data);
    } 

    public function editprofile($id_user){
        $data['email']= $this->M_crud->get_data_by_email($id_user)->row_array();
        $data['e']=$this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('Front_End/index_profile', $data);
    } 

    public function aksiedit(){
        $student=$this->input->post('idstudent');
        $name=$this->input->post('name');
        $program=$this->input->post('program');
        $hp=$this->input->post('hp');
        $email=$this->input->post('email');
        $pass=$this->input->post('pass');

        $data=array(
            'id_student' => $student,
            'id_program' => $program,
            'name' => $name,
            'phone_number'=> $hp,
            'email' => $email,
            'password' =>$pass
        );

        $this->M_crud->update_data($data, $student);  
        
        if($this->db->affected_rows()){
            echo "<script>alert('Data berhasil di update');</script>";
            $data['mahasiswa']=$this->M_crud->get_data();
            $data['email']=$this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('Front_End/index_dashboard', $data);
        }else{
            echo "<script>alert('Data gagal di update');</script>";
            $data['mahasiswa']=$this->M_crud->get_data();
            $data['email']=$this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('Front_End/index_dashboard', $data);
        }

        
    }

    public function aksieditprofile(){
        $id=$this->input->post('id');
        $email=$this->input->post('email');
        $pass=$this->input->post('password');

        $data=array(
            'id_user' => $id,
            'email' => $email,
            'password' =>$pass
        );

        $this->M_crud->update_data_user($data, $id);  
        
        if($this->db->affected_rows()){
            echo "<script>alert('Data berhasil di update');</script>";
            $data['mahasiswa']=$this->M_crud->get_data();
            $data['email']=$this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('Front_End/index_dashboard', $data);
        }else{
            echo "<script>alert('Data gagal di update');</script>";
            $data['mahasiswa']=$this->M_crud->get_data();
            $data['email']=$this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('Front_End/index_dashboard', $data);
        }

        
    }

    public function hapus($id_student){
        $this->M_crud->hapus_data($id_student);
        if($this->db->affected_rows()){
            $data['mahasiswa']=$this->M_crud->get_data();
            $data['email']=$this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('Front_End/index_dashboard', $data);
        }else{
            echo "<script>alert('Data gagal di hapus');</script>";
            $data['mahasiswa']=$this->M_crud->get_data();
            $data['email']=$this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('Front_End/index_dashboard', $data);
        }
    }
}    