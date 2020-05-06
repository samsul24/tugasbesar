<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

// require APPPATH . '/libraries/Format.php';

class Materi extends REST_Controller
{

  function __construct($config = 'rest')
  {
    parent::__construct($config);
  }

  function index_get()
  {
    // $this->db->select('subbab.nama_sub');
    // $this->db->from('subbab');
    // $this->db->join('materi', 'subbab.id_sub = materi.id_sub');
    // if($id !=null){
    //   $this->db->where('id_materi', $id);
    // }
    // $materi = $this->db->get():
    // return $materi:


    $id = $this->get('id_materi');
    $id2 = $this->get('id_sub');
    if ($id == '') {
      $materi = $this->db->get('materi')->result();
    } else {
      $this->db->where('id_materi', $id);
      $materi = $this->db->get('materi')->result();
    }
    if ($id2 != '') {
      $this->db->where('id_sub', $id2);
      $materi = $this->db->get('materi')->result();
    }
    $this->response($materi, 200);
  }

  function index_post()
  {
    $data = array(

      'id_sub'             => $this->post('id_sub'),
      'kategori'               => $this->post('kategori'),
      'nama'               => $this->post('nama'),
      'keterangan'         => $this->post('keterangan'),
      'image'              => $this->post('image'),
    );
    $insert = $this->db->insert('materi', $data);
    if ($insert) {
      $this->response($data, 200);
    } else {
      $this->response(array('status' => 'fail', 502));
    }
  }

  function index_put()
  {
    $id = $this->put('id_materi');
    $data = array(
      'id_sub'         => $this->put('id_sub2 '),
      'kategori'         => $this->put('kategori'),
      'nama'         => $this->put('nama'),
      'keterangan'         => $this->put('keterangan'),
      'image'         => $this->put('image'),
    );
    $this->db->where('id_materi', $id);
    $update = $this->db->update('materi', $data);
    if ($update) {
      $this->response($data, 200);
    } else {
      $this->response(array('status' => 'fail', 502));
    }
  }

  function index_delete()
  {
    $id = $this->delete('id_materi');
    $this->db->where('id_materi', $id);
    $delete = $this->db->delete('materi');
    if ($delete) {
      $this->response(array('status' => 'success'), 201);
    } else {
      $this->response(array('status' => 'fail', 502));
    }
  }


  public function AlatPernafasan()
  {
    $data['title'] = "Theory";
    $this->load->view('header', $data, FALSE);
    $this->load->view('materi/AlatPernafasan', $data, FALSE);
    $this->load->view('footer', $data, FALSE);
  }
  public function family()
  {
    $data['title'] = "Theory";
    $this->load->view('header', $data, FALSE);
    $this->load->view('materi/family', $data, FALSE);
    $this->load->view('footer', $data, FALSE);
  }
  public function habitat()
  {
    $data['title'] = "Theory";
    $this->load->view('header', $data, FALSE);
    $this->load->view('materi/habitat', $data, FALSE);
    $this->load->view('footer', $data, FALSE);
  }
  public function morfologi()
  {
    $data['title'] = "Theory";
    $this->load->view('header', $data, FALSE);
    $this->load->view('materi/morfologi', $data, FALSE);
    $this->load->view('footer', $data, FALSE);
  }
  public function latsol()
  {
    $data['title'] = "Theory";
    $this->load->view('header', $data, FALSE);
    $this->load->view('materi/latsol', $data, FALSE);
    $this->load->view('footer', $data, FALSE);
  }
}
