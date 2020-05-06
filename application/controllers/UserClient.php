<?php

defined('BASEPATH') or exit('No direct script access allowed');

class UserClient extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
        
        $this->API = "http://localhost/tugasbesar/user";
    }

    public function index()
    {
        $data['user'] = json_decode($this->curl->simple_get($this->API));
         $data['title'] = "Soal";
        $this->load->view('header0');
        $this->load->view('bar');
        $this->load->view('datauser/index', $data, FALSE);
        $this->load->view('footer1');
    }
    public function unverif()
    {
        $user = $this->session->userdata('user');
        // $data['order'] = $this->user_model->get($user);
        $data['title'] = 'Notice';
        $this->load->view('user/unverif', $data, FALSE);
    }

    public function post()
    {
        $data['title'] = "Tambah Data Pelanggan";
        $this->load->view('header0');
        $this->load->view('bar');
        $this->load->view('datauser/post', $data, FALSE);
        $this->load->view('footer1');
    }

    public function post_process()
    {
        $data = array(
            'nama'          => $this->input->post('nama'),
            'username'         => $this->input->post('username'),
            'password'         => $this->input->post('password'),
            'level'         => $this->input->post('level'),

        );
        $insert =  $this->curl->simple_post($this->API, $data);
        if ($insert) {
            $this->session->set_flashdata('result', 'Data User Berhasil Ditambahkan');
        } else {
            $this->session->set_flashdata('result', 'Data User Gagal Ditambahkan');
        }
        redirect('Userclient');
    }

    public function put()
    {
        $params = array('id' =>  $this->uri->segment(3));
        $data['user'] = json_decode($this->curl->simple_get($this->API, $params));
        $data['title'] = "Edit Data User";
        $this->load->view('header', $data, FALSE);
        $this->load->view('datauser/put', $data, FALSE);
        $this->load->view('footer', $data, FALSE);
    }

    public function put_process()
    {
        $data = array(
            'id'          => $this->input->post('id'),
            'nama'          => $this->input->post('nama'),
            'username'         => $this->input->post('username'),
            'password'         => $this->input->post('password'),
            'level'         => $this->input->post('level'),
        );
         
        $update =  $this->curl->simple_put($this->API, $data, array(CURLOPT_BUFFERSIZE => 10));
        if ($update) {
            $this->session->set_flashdata('result', 'Update Data User Berhasil');
        } else {
            $this->session->set_flashdata('result', 'Update Data User Gagal');
        }
        redirect('userclient');
    }

    public function delete()
    {
        $params = array('id' =>  $this->uri->segment(3));
        $delete =  $this->curl->simple_delete($this->API, $params);
        if ($delete) {
            $this->session->set_flashdata('result', '');
        } else {
            $this->session->set_flashdata('result','');
        }
        redirect('userclient');
    }
}