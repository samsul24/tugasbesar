<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Bab extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
    }

    function index_get()
    {
        $id = $this->get('id_bab');
        if ($id == '') {
            $materi = $this->db->get('bab')->result();
        } else {
            $this->db->where('id_bab', $id);
            $materi = $this->db->get('bab')->result();
        }
        $this->response($materi, 200);
    }

    function index_post()
    {
        $data = array(
            'nama_bab'          => $this->post('nama_bab'),
        );
        $insert = $this->db->insert('bab', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_put()
    {
        $id = $this->put('id_bab');
        $data = array(
            'nama_bab'          => $this->put('nama_bab'),
        );
        $this->db->where('id_bab', $id);
        $update = $this->db->update('bab', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_delete()
    {
        $id = $this->delete('id_bab');
        $this->db->where('id_bab', $id);
        $delete = $this->db->delete('bab');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
