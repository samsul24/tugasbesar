<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Soal extends REST_Controller
{

    function __construct($config ='rest')
    {
        parent::__construct($config);
    }

    function index_get()
    {
        $id = $this->get('id_soal');
        if ($id == '') {
            $soal = $this->db->get('soal')->result();
        } else {
            $this->db->where('id_soal', $id);
            $soal = $this->db->get('soal')->result();
        }
        $this->response($soal, 200);
    }

    function index_post()
    {
        $data = array(
            'kategori'      => $this->post('kategori'),
            'pertanyaan'    => $this->post('pertanyaan'),
            'pil_a'         => $this->post('pil_a'),
            'pil_b'         => $this->post('pil_b'),
            'pil_c'         => $this->post('pil_c'),
            'pil_d'         => $this->post('pil_d'),
            'jawaban'       => $this->post('jawaban'),
      
        );
        $insert = $this->db->insert('soal',$data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_put()
    {
        $id = $this->put('id_soal');
        $data = array(
            'kategori'      => $this->put('kategori'),
            'pertanyaan'    => $this->put('pertanyaan'),
            'pil_a'         => $this->put('pil_a'),
            'pil_b'         => $this->put('pil_b'),
            'pil_c'         => $this->put('pil_c'),
            'pil_d'         => $this->put('pil_d'),
            'jawaban'       => $this->put('jawaban'),
            // 'keterangan'         => $this->put('keterangan'),
            // 'publish'         => $this->put('publish'),
        );
        $this->db->where('id_soal', $id);
        $update = $this->db->update('soal', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_delete()
    {
        $id = $this->delete('id_soal');
        $this->db->where('id_soal', $id);
        $delete = $this->db->delete('soal');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
