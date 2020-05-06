<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class komentar extends REST_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
        $this->API = "http://localhost/tugasbesar/komentar";
    }

    public function index()
    {
        $data['komentar'] = json_decode($this->curl->simple_get($this->API));
        $data['title'] = "Bab";
        $this->load->view('header2', $data, FALSE);
        $this->load->view('komentar/index', $data, FALSE);
        $this->load->view('footer', $data, FALSE);
    }

    function index_get()
    {
        // $this->db->select('bab.nama_bab');
        // $this->db->from('bab');
        // $this->db->join('komentar', 'bab.id_bab = komentar.id_bab');
        // $this->db->where('id_komentar', $id);
        // if($id='id_bab'){
        //     $this->db->get('komentar')->result();
        // }
        // $materi = $this->db->get();
        // return $materi;

        $id = $this->get('id_komentar');
        if ($id == '') {
            $komentar = $this->db->get('komentar')->result();
        } else {
            $this->db->where('id_komentar', $id);
            $komentar = $this->db->get('komentar')->result();
        }
        $this->response($komentar, 200);
    }

    function index_post()
    {
        $data = array(
            'email'          => $this->post('emal'),
            'komen'         => $this->post('komen'),
        );
        $insert = $this->db->insert('komentar', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    function index_delete()
    {
        $id = $this->delete('id_komentar');
        $this->db->where('id_komentar', $id);
        $delete = $this->db->delete('komentar');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
