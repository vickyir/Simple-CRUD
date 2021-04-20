<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_account extends CI_Model{

    public function input($data){
        $this->db->insert('tb_user', $data);
    }

    public function userdata($email){
        return $this->db->get_where('tb_user', ['email' => $email])->row_array();
    }

}