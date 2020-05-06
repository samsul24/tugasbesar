<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

// require APPPATH . '/libraries/Format.php';

class Gambar extends REST_Controller
{

  function __construct($config = 'rest')
  {
    parent::__construct($config);
  }
  function index_get()
  {
    $id = $this->get('id_img');
    if ($id == '') {
      $foto = $this->db->get('image')->result();
    } else {
      $this->db->where('id_img', $id);
      $foto = $this->db->get('image')->result();
    }  
    $this->response($foto, 200);
  }

  function index_post()
  {
    $data = array(
      'foto'              => $this->post('foto'),
      'nama_img'           => $this->post('nama_img'),
      'keterangan'         => $this->post('keterangan'),
    );
    $insert = $this->db->insert('image', $data);
    if ($insert) {
      $this->response($data, 200);
    } else {
      $this->response(array('status' => 'fail', 502));
    }
  }

  function index_put()
  {
    $id = $this->put('id_img');
    $data = array(
   
        'foto'           => $this->put('foto'),
        'nama_img'        => $this->put('nama_img'),
        'keterangan'      => $this->put('keterangan'),
    );
    $this->db->where('id_img', $id);
    $update = $this->db->update('image', $data);
    if ($update) {
      $this->response($data, 200);
    } else {
      $this->response(array('status' => 'fail', 502));
    }
  }

  function index_delete()
  {
    $id = $this->delete('id_img');
    $this->db->where('id_img', $id);
    $delete = $this->db->delete('image');
    if ($delete) {
      $this->response(array('status' => 'success'), 201);
    } else {
      $this->response(array('status' => 'fail', 502));
    }
  }
  function index_detail()
  {
    $id = $this->detail('id_img');
    $this->db->where('id_img', $id);
    $delete = $this->db->detail('image');
    if ($detail) {
      $this->response(array('status' => 'success'), 201);
    } else {
      $this->response(array('status' => 'fail', 502));
    }
  }

}
