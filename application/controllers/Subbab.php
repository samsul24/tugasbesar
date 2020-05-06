<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Subbab extends REST_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
        $this->API = "http://localhost/tugasbesar/subbab";
    }

    public function index()
    {
        $data['subbab'] = json_decode($this->curl->simple_get($this->API));
        $data['title'] = "Bab";
        $this->load->view('header2', $data, FALSE);
        $this->load->view('materi/subindexhabitat', $data, FALSE);
        $this->load->view('footer', $data, FALSE);
    }

    function index_get()
    {
        // $this->db->select('bab.nama_bab');
        // $this->db->from('bab');
        // $this->db->join('subbab', 'bab.id_bab = subbab.id_bab');
        // $this->db->where('id_sub', $id);
        // if($id='id_bab'){
        //     $this->db->get('subbab')->result();
        // }
        // $materi = $this->db->get();
        // return $materi;

        $id = $this->get('id_sub');
        if ($id == '') {
            $materi = $this->db->get('subbab')->result();
        } else {
            $this->db->where('id_sub', $id);
            $materi = $this->db->get('subbab')->result();
        }
        $this->response($materi, 200);
    }

    function index_post()
    {
        $data = array(
            'id_bab'          => $this->post('id_bab'),
            'nama_sub'         => $this->post('nama_sub'),
        );
        $insert = $this->db->insert('subbab', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_put()
    {
        $id = $this->put('id_sub');
        $data = array(
            'id_bab'          => $this->put('id_bab'),
            'nama_sub'         => $this->put('nama_sub'),
        );
        $this->db->where('id_sub', $id);
        $update = $this->db->update('subbab', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_delete()
    {
        $id = $this->delete('id_sub');
        $this->db->where('id_sub', $id);
        $delete = $this->db->delete('subbab');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
