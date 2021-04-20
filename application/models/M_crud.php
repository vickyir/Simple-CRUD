<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class M_crud extends CI_Model
{
    public function get_data(){
        return $this->db->get('student')->result_array();
    }

    public function insert_data($data){
        $this->db->insert('student', $data);
    }

    public function update_data($data,$id){
        $this->db->where('id_student', $id);
        $this->db->update('student', $data);
    }

    public function update_data_user($data,$id){
        $this->db->where('id_user', $id);
        $this->db->update('tb_user', $data);
    }

    public function hapus_data($id){
        $this->db->where('id_student', $id);
        $this->db->delete('student');
    }

    public function get_data_by_id($id_student){
        return $this->db->get_where('student', array('id_student' => $id_student));
    }

    public function get_data_by_email($id_user){
        return $this->db->get_where('tb_user', array('id_user' => $id_user));
    }


}







































