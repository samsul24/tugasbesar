<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Login extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('curl');
    $this->load->model('login_model');
    $this->load->model('admin_model');
  }

  public function index()
  {
    $data['title'] = 'login';
    $this->load->view('header1');
    $this->load->view('login/index', $data, FALSE);
    $this->load->view('footer');
  }
  public function footer()
  {
    $data['title'] = 'login';
    $this->load->view('header2');
    $this->load->view('footer/samsul', $data, FALSE);
    $this->load->view('footer');
  }
  public function footer2()
  {
    $data['title'] = 'login';
    $this->load->view('header2', $data, FALSE);
    $this->load->view('footer/bethania', $data, FALSE);
    $this->load->view('footer', $data, FALSE);
  }

  public function log_process()
  {
    $user = $this->input->post('user');
    $password = $this->input->post('password');
    $check = $this->login_model->login($user, $password);
    if ($check) {
      foreach ($check as $rows) {
        $this->session->set_userdata('id', $rows->id);
        $this->session->set_userdata('username', $rows->username);
        $this->session->set_userdata('level', $rows->level);

        // redirect('userclient');
      }
      if ($this->session->userdata('level') == "admin") {
        redirect('adminclient');
      } elseif ($this->session->userdata('level') == "user") {
        redirect('userlogin');
      } else {
        redirect('userclient/unverif');;
      }
    } else {
      $this->session->set_flashdata('result', 'Login gagal');
      redirect('login');
    }
  }




  public function reg()
  {
    $data['title'] = 'registrasi';
    $this->load->view('header1', $data, FALSE);
    $this->load->view('login/registrasi', $data, FALSE);
    $this->load->view('footer', $data, FALSE);
  }

  public function reg_process()
  {
    $this->API = "http://localhost/tugasbesar/user";
    $data = array(
      'nama'          => $this->input->post('nama'),
      'username'         => $this->input->post('username'),
      'password'         => $this->input->post('password'),
      'level' => 'not verified'
    );

    $update =  $this->curl->simple_post($this->API, $data, array(CURLOPT_BUFFERSIZE => 10));
    if ($update) {
      $this->session->set_flashdata('result', 'Regsitrasi Berhasil,please wait for verification');
    } else {
      $this->session->set_flashdata('result', 'Registrasi Gagal');
    }
    redirect('login', 'refresh');
  }

  public function out()
  {
    $this->session->sess_destroy();
    redirect('login', 'refresh');
  }
}

/* End of file Home.php */
