<?php

defined('BASEPATH') or exit('No direct script access allowed');

class UserLogin extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('curl');

    $this->load->model('ujian_model');

    $this->API = "http://localhost/tugasbesar/user";
    $this->API1 = "http://localhost/tugasbesar/soal";
    $this->API2 = "http://localhost/tugasbesar/ujian";
    $this->API3 = "http://localhost/tugasbesar/subbab";
    $this->API4 = "http://localhost/tugasbesar/bab";
    $this->API5 = "http://localhost/tugasbesar/materi";
    $this->API6 = "http://localhost/tugasbesar/gambar";
  }

  public function index()
  {
    $this->load->library('curl');

    $data['user'] = json_decode($this->curl->simple_get($this->API));
    $data['title'] = "Dashboard";
    // $this->load->view('header4', $data, FALSE);
    $this->load->view('user/index', $data, FALSE);
    // $this->load->view('footer', $data, FALSE);
  }
  public function latsoal()
  {
    $this->load->library('curl');

    $data['soal'] = json_decode($this->curl->simple_get($this->API1));
    $data['title'] = "Latihan soal";
    $this->load->view('header', $data, FALSE);
    $this->load->view('user/latihan', $data, FALSE);
    $this->load->view('footer', $data, FALSE);
  }

  public function ujian1()
  {
    $this->load->view('user/ujian1');
  }
  public function ujian2()
  {
    $this->load->view('user/ujian2');
  }
  public function index1()
  {

    $data['title'] = "Ujian";

    // $this->load->library('pagination');
    // $config['base_url']= 'http://localhost/tugasbesar/userlogin/index1';
    // $config['total_rows']= $this->ujian_model->countAllUjian();        
    // $config['per_page']= 1 ;

    // $config['ful1_link'] ="";
    // $config['ful1_tag_open'] ="";
    // $config['ful1_tag_close'] ="";

    // $config['first_link'] = 'First ';
    // $config['first_tag_open'] = "<a><button>";
    // $config['first_tag_close'] = "</button></a>";

    // $config['last_link'] = ' Last';
    // $config['last_tag_open'] = "<a><button>";
    // $config['last_tag_close'] = "</button></a>";

    // $config['next_link'] = 'Selanjutnya(&raquo)';
    // $config['next_tag_open'] = "<a><button>";
    // $config['next_tag_close'] = "</button></a>";

    // $config['prev_link'] = '(&laquo)Sebelumnya';
    // $config['prev_tag_open'] = "<a><button>";
    // $config['prev_tag_close'] = "</button></a>";

    // $config['cur_tag_open'] = "";
    // $config['cur_tag_close'] = "";

    // $config['num_tag_open'] = "";
    // $config['num_tag_close'] = "";

    // $config['attributes'] = array('class'=>"");


    // $this->pagination->initialize($config);	







    // $data['start']= $this->uri->segment(3);
    // $data['ujian'] =$this->ujian_model->getUjian($config['per_page'], $data['start']);
    // $this->load->view('user/ujian', $data, FALSE);        




    $this->load->library('form_validation');
    $this->form_validation->set_rules('pilihan', 'pilihan', 'required');
    $a = $this->input->post('angka');
    $a++;
    if ($this->form_validation->run() == TRUE) {
      $data = [
        "id_user" => $this->session->userdata('id'),
        "id_soal" => $this->input->post('nomor'),
        "jawaban" => $this->input->post('pilihan'),
      ];
      $this->ujian_model->insertJawab($data);
      $this->session->set_userdata('angka', $a);
      $data['ujian'] = $this->ujian_model->getUjian(1, $a);
      $this->load->view('header', $data, FALSE);
      $this->load->view('user/ujian', $data, FALSE);
      $this->load->view('footer', $data, FALSE);
    } else {
      // $data['start'] = $this->uri->segment(3);

      $data['ujian'] = $this->ujian_model->getUjian(1, 0);
      $this->load->view('header', $data, FALSE);
      $this->load->view('user/ujian', $data, FALSE);
      $this->load->view('footer', $data, FALSE);
    }
  }

  public function hasil()
  {
    $data['title'] = "Latihan soal";
    $data['temp_jawab'] = $this->ujian_model->getJawab();
    $this->load->view('header', $data, FALSE);
    $this->load->view('user/cek', $data, FALSE);
    $this->load->view('footer', $data, FALSE);
  }

  public function cek_hasil()
  {
  }
  public function family()
  {
    $this->load->library('curl');
    $data['bab'] = json_decode($this->curl->simple_get($this->API4));
    $data['title'] = "Bab";
    $this->load->view('header', $data, FALSE);
    $this->load->view('materi/family', $data, FALSE);
    $this->load->view('footer', $data, FALSE);
  }

  public function materi()
  {
    $this->load->library('form_validation');

    $this->load->library('curl');
    // $result=$this->db->get_where('materi',array('id_materi'=>1))
    // $data['result']=$result;
    $data['materi'] = json_decode($this->curl->simple_get($this->API5));
    $data['title'] = "Bab";
    $this->form_validation->set_rules('id_materi', 'id_materi', 'required');

    // die;
    if ($this->form_validation->run() == TRUE) {
      $data['isimateri'] = json_decode($this->curl->simple_get(
        $this->API5 . '?id_materi=' . $this->input->post('id_materi')
      ));
      $this->load->view('header');
      $this->load->view('user/materi', $data, FALSE);
    } else {
      $this->load->view('header');
      $this->load->view('user/materi', $data, FALSE);
    }
    // $this->load->view('footer');

  }



  public function galeri()
  {
    $this->load->library('curl');
    $data['gambar'] = json_decode($this->curl->simple_get($this->API6));
    $data['title'] = "Galeri";
    $this->load->view('header', $data, FALSE);
    $this->load->view('user/galeri', $data, FALSE);
    $this->load->view('footer', $data, FALSE);
  }

  public function detail($id_img)
  {
    $url = $this->API . "?id_img=" . $id_img;
    $params = array('id_img' =>  $this->uri->segment(3));
    $data['gambar'] = json_decode($this->curl->simple_get($this->API, $params));
    $data['title'] = 'Detail Kategori';
    $this->load->view('header', $data, FALSE);
    $this->load->view('user/detailgaleri', $data, FALSE);
    $this->load->view('footer', $data, FALSE);
  }

  // public function kategori()
  // {
  //   $url = $this->API5 . "?id_materi=" . $id_materi;
  //   $params = array('id_materi' =>  $this->uri->segment(3));
  //   $data['materi'] = json_decode($this->curl->simple_get($this->API5, $params));
  //   $data['title'] = 'Detail Kategori';
  //   $this->load->view('header', $data, FALSE);
  //   $this->load->view('user/habitat', $data, FALSE);
  //   $this->load->view('footer', $data, FALSE);
  // }
  // public function habitat($id_materi){
  //     $url = $this->API."?id_materi=".$id_materi;
  //     $params = array('id_materi' =>  $this->uri->segment(3));
  //     $data['materi'] = json_decode($this->curl->simple_get($this->API, $params));
  //     $data['title']='Detail Kategori';
  //     $this->load->view('header', $data, FALSE);
  //     $this->load->view('user/habitat', $data, FALSE);
  //     $this->load->view('footer', $data, FALSE);
  // }
}
