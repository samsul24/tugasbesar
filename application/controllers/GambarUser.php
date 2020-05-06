<?php

defined('BASEPATH') or exit('No direct script access allowed');

class GambarUser extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('curl');
    $this->API = "http://localhost/tugasbesar/gambar";
  }

  public function index()
  {
    $data['gambar'] = json_decode($this->curl->simple_get($this->API));
    $data['title'] = "Galeri";
    $this->load->view('header0');
    $this->load->view('bar');
    $this->load->view('galeri/index', $data, FALSE);
    $this->load->view('footer1');
  }

  public function post()
  {
    $data['title'] = "Tambah Data Galeri";
    $this->load->view('header0');
    $this->load->view('bar');
    $this->load->view('galeri/post', $data, FALSE);
    $this->load->view('footer1');
  }

  public function post_process()
  {
    // $params = json_decode(file_get_contents('php://input'), TRUE);
    $config['upload_path'] = './img/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = 5000;
    $config['max_width'] = 4000;
    $config['max_height'] = 4000;
    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('foto')) {
      $this->session->set_flashdata('gagal', $this->upload->display_errors());
      redirect('gambaruser', 'refresh');
    } else {
      $upload_data = $this->upload->data();

      $file_name = $upload_data['file_name'];
      $data = array(
        'foto'              => $file_name,
        'nama_img'           => $this->input->post('nama_img'),
        'keterangan'         => $this->input->post('keterangan'),
      );
      // var_dump($data);
      // die;

      $insert = $this->curl->simple_post($this->API, $data);
      if ($insert) {
        $this->session->set_flashdata('result', '');

        redirect('gambaruser', 'refresh');
      } else {
        $this->session->set_flashdata('result', '');
      }
      redirect('gambaruser', 'refresh');
    }
  }

  public function put()
  {
    $params = array('id_img' =>  $this->uri->segment(3));
    $data['foto'] = json_decode($this->curl->simple_get($this->API, $params));
    $data['title'] = "Edit Data Materi";
    $this->load->view('header', $data, FALSE);
    $this->load->view('gambar/put', $data, FALSE);
    $this->load->view('footer', $data, FALSE);
  }
  
  public function put_process()
  {
    $data = array(
      'id_img'         => $this->input->post('id_img'),
      'foto'         => $this->input->post('foto'),
      'nama_img'               => $this->input->post('nama_img'),
        'keterangan'         => $this->input->post('keterangan'),
    );
    
    $update =  $this->curl->simple_put($this->API, $data, array(CURLOPT_BUFFERSIZE => 10));
    if ($update) {
      $this->session->set_flashdata('result', '');
    } else {
      $this->session->set_flashdata('result', '');
    }
    redirect('gambaruser');
  }

  public function delete()
  {
    $params = array('id_img' =>  $this->uri->segment(3));
    $delete =  $this->curl->simple_delete($this->API, $params);
    if ($delete) {
      $this->session->set_flashdata('result', '');
    } else {
      $this->session->set_flashdata('result', '');
    }
    redirect('gambaruser');
  }
  public function detail(){
    $params = array('id_img' =>  $this->uri->segment(3));
    $data['gambar'] = json_decode($this->curl->simple_get($this->API, $params));
    $data['title']='Detail Kategori';
    $this->load->view('header', $data, FALSE);
    $this->load->view('user/detailgaleri', $data, FALSE);
    $this->load->view('footer', $data, FALSE);
}
  public function detail_prosses()
  {
    $data = array(
      'id_img'         => $this->input->post('id_img'),
      'foto'         => $this->input->post('foto'),
      'nama_img'               => $this->input->post('nama_img'),
      'keterangan'         => $this->input->post('keterangan'),
    );
    
    $detail =  $this->curl->simple_put($this->API, $data, array(CURLOPT_BUFFERSIZE => 10));
    if ($detail) {
      $this->session->set_flashdata('result', '');
    } else {
      $this->session->set_flashdata('result', '');
    }
    redirect('gambaruser');
  }
 
}
