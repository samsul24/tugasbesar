<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ujian_model extends CI_Model {

    function __construct() {
    parent::__construct();
    }

    public function getUjian($limit,$start){
        return $this->db->get('soal_ujian',$limit,$start)->result_array();
    }   
    public function getAllUjian(){
        return $this->db->get('soal_ujian')->result_array();
    }
    public function getJawab(){
        return $this->db->get('temp_jawab')->result_array();
    }
               
    public function countAllUjian()
    {
        return $this->db->get('soal_ujian')->num_rows();
    }
	function input_data($data){
        $this->db->insert('soal_ujian',$data);
	
	}
    public function insertJawab($data){
    $this->db->insert('temp_jawab', $data);
  }
}
