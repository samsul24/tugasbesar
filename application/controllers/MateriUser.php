<?php

defined('BASEPATH') or exit('No direct script access allowed');

class MateriUser extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('curl');
    $this->API = "http://localhost/tugasbesar/materi";
    $this->API2 = "http://localhost/tugasbesar/bab";
    $this->API3 = "http://localhost/tugasbesar/subbab";
  }

  public function index()
  {
    $data['materi'] = json_decode($this->curl->simple_get($this->API));
    $data['title'] = "Materi";

    $this->load->view('header0');
    $this->load->view('bar');
    $this->load->view('materi/subindexhabitat', $data, FALSE);
    $this->load->view('footer1');
  }

  public function post()
  {
    // $params = array('is_materi' =>  $this->uri->segment(3));
    $this->API2 = "http://localhost/tugasbesar/bab";
    $data['bab'] = json_decode($this->curl->simple_get($this->API2));
    $this->API3 = "http://localhost/tugasbesar/subbab";
    $data['subbab'] = json_decode($this->curl->simple_get($this->API3));
    // $data['materi'] = json_decode($this->curl->simple_get($this->API, $params));
    $data['title'] = "Tambah Data Materi";
    $this->load->view('header0');
    $this->load->view('bar');
    $this->load->view('materi/post', $data, FALSE);
    $this->load->view('footer1');
  }

  public function post_process()
  {
    // $params = json_decode(file_get_contents('php://input'), TRUE);
    $config['upload_path'] = './img/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = 2000;
    $config['max_width'] = 4000;
    $config['max_height'] = 4000;
    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('image')) {
      $this->session->set_flashdata('gagal', $this->upload->display_errors());
      redirect('materiuser', 'refresh');
    } else {
      $upload_data = $this->upload->data();

      $file_name = $upload_data['file_name'];
      $data = array(
        'id_sub'             => $this->input->post('id_sub'),
        'kategori'               => $this->input->post('kategori'),
        'nama'               => $this->input->post('nama'),
        'keterangan'         => $this->input->post('keterangan'),
        'image'              => $file_name,
      );
      // var_dump($data);
      // die;

      $insert = $this->curl->simple_post($this->API, $data);
      if ($insert) {
        $this->session->set_flashdata('result', '');

        redirect('materiuser', 'refresh');
      } else {
        $this->session->set_flashdata('result', '');
      }
      redirect('materiuser', 'refresh');
    }
  }

  public function put()
  {
    $params = array('id_materi' =>  $this->uri->segment(3));
    $this->API2 = "http://localhost/tugasbesar/bab";
    $data['bab'] = json_decode($this->curl->simple_get($this->API2));
    $this->API3 = "http://localhost/tugasbesar/subbab";
    $data['bab'] = json_decode($this->curl->simple_get($this->API3));
    $data['subbab'] = json_decode($this->curl->simple_get($this->API, $params));
    $data['title'] = "Edit Data Materi";
    $this->load->view('header0');
    $this->load->view('bar');
    $this->load->view('materi/put', $data, FALSE);
    $this->load->view('footer1');
  }

  public function put_process()
  {
    $data = array(
      'id_materi'          => $this->input->post('id_materi'),
      'id_sub'         => $this->input->post('id_sub'),
      'kategori'         => $this->input->post('kategori'),
      'nama'         => $this->input->post('nama'),
      'image'         => $this->input->post('image'),
      'keterangan'         => $this->input->post('keterangan'),
    );

    $update =  $this->curl->simple_put($this->API, $data, array(CURLOPT_BUFFERSIZE => 10));
    if ($update) {
      $this->session->set_flashdata('result', 'Update Data Transaksi Berhasil');
    } else {
      $this->session->set_flashdata('result', 'Update Data Transaksi Gagal');
    }
    redirect('materiuser');
  }

  public function delete()
  {
    $params = array('id_materi' =>  $this->uri->segment(3));
    $delete =  $this->curl->simple_delete($this->API, $params);
    if ($delete) {
      $this->session->set_flashdata('result', '');
    } else {
      $this->session->set_flashdata('result', '');
    }
    redirect('materiuser');
  }
 
}
