<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model{

    public function auth($e, $p){
        return $this->db->get_where('tb_user', array('email' => $e, 'password' => $p));
    }

}