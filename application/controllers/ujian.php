<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Ujian extends REST_Controller
{

    function __construct($config ='rest')
    {
        parent::__construct($config);
    }

    function index_get($limit,$start)
    {
        $id = $this->get('nomor');
        if ($id == '') {
            $soal = $this->db->get('soal_ujian',$limit=1,$start=1)->result_array();
        } else {
            $this->db->where('nomor', $id);
            $soal = $this->db->get('soal_ujian',$limit,$start)->result_array();
        }
        $this->response($soal, 200);
    }

    public function getUjian($limit,$start){
        return $this->db->get('soal_ujian',$limit,$start)->result_array();
    }

    function index_post()
    {
        $data = array(
          'pertanyaan'      => $this->input->post('pertanyaan'),
          'jawab_a'         => $this->input->post('jawab_a'),
          'jawab_b'         => $this->input->post('jawab_b'),
          'jawab_c'         => $this->input->post('jawab_c'),
          'jawab_d'         => $this->input->post('jawab_d'),
          'jawaban'         => $this->input->post('jawaban'),
          'kunci'         => $this->input->post('kunci'),
      
        );
        $insert = $this->db->insert('soal_ujian',$data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_put()
    {
        $id = $this->put('nomor');
        $data = array(
          'pertanyaan'      => $this->input->put('pertanyaan'),
          'jawab_a'         => $this->input->put('jawab_a'),
          'jawab_b'         => $this->input->put('jawab_b'),
          'jawab_c'         => $this->input->put('jawab_c'),
          'jawab_d'         => $this->input->put('jawab_d'),
          'jawaban'         => $this->input->post('jawaban'),
          'kunci'         => $this->input->post('kunci'),
        $this->db->where('nomor', $id);
        $update = $this->db->update('soal_ujian', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_delete()
    {
        $id = $this->delete('nomor');
        $this->db->where('nomor', $id);
        $delete = $this->db->delete('soal_ujian');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
