<?php

class Asosiasi_model extends CI_Model {
    public function __construct(){
        $this->load->database();
    }


    public function get_Data(){
        $query = $this->db->get('asosiasi');
        return $query->result_array();
    }
}