<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
        $this->load->model('M_crud');
    }

    public function index(){
        $this->load->view('Front_End/Head_Foot/head');
        $this->load->view('Front_End/index_login');
        $this->load->view('Front_End/Head_Foot/foot');
    }

    public function auth_action(){
        $email= $this->input->post('email');
        $password= $this->input->post('password');

        $auth=$this->M_login->auth($email, $password)->num_rows();
        if($auth>0){

            $data_session=array(
                'email' => $email,
                'status' => "Login"
            );

            $this->session->set_userdata($data_session);
            $data['mahasiswa']=$this->M_crud->get_data();
            $data['email']=$this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('Front_End/index_dashboard',$data);
        }else{
            $this->load->view('Front_End/Head_Foot/head');
            $this->load->view('Front_End/index_login');
            $this->load->view('Front_End/Head_Foot/foot');
            echo "<script>alert('Password atau Username Salah')</script>";
        }
    }
   
    public function logout(){
        session_start();
        session_destroy();
        redirect('Auth');
    }

}
?>

