<?php

defined('BASEPATH') or exit('No direct script access allowed');

class komentarUser extends CI_Controller
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
        $data['title'] = "komentar";
        // $this->load->view('header');
        $this->load->view('komentar/index', $data, FALSE);
        // $this->load->view('footer');
    }

    public function post()
    {
        // $this->API2 = "http://localhost/tugasbesar/komentar";
        // $data['komentar'] = json_decode($this->curl->simple_get($this->API2));
        $data['title'] = "Tambah Data bab";
        $this->load->view('header');
        $this->load->view('komentar/index', $data, FALSE);
        $this->load->view('footer');
    }

    public function post_process()
    {
        $data = array(
            'nama'          => $this->post('nama'),
            'email'          => $this->post('email'),
            'keterangan'         => $this->post('keterangan'),
        );
        
        $insert =  $this->curl->simple_post($this->API, $data);
        if ($insert) {
            $this->session->set_flashdata('result', '');
            redirect('komentaruser', 'refresh');
        } else {
            $this->session->set_flashdata('result', '');
        }
        redirect('komentaruser', 'refresh');
    }

    public function put()
    {
        $params = array('id_komentar' =>  $this->uri->segment(3));
        // $this->API2 = "http://localhost/tugasbesar/komentar";
        $data['komentar'] = json_decode($this->curl->simple_get($this->API, $params));
        $data['title'] = "Edit Data bab";
        $this->load->view('header', $data, FALSE);
        $this->load->view('komentar/put', $data, FALSE);
        $this->load->view('footer', $data, FALSE);
    }

    public function put_process()
    {
        $data = array(
            'id_komentar'   => $this->post('id_komentar'),
            'komen_status'         => $this->post('komen_status'),
            'nama'          => $this->post('nama'),
            'email'         => $this->post('email'),
            'komentar'         => $this->post('komentar'),
        );
        $update =  $this->curl->simple_put($this->API, $data, array(CURLOPT_BUFFERSIZE => 10));
        if ($update) {
            $this->session->set_flashdata('result', 'Update Data bab Berhasil');
        } else {
            $this->session->set_flashdata('result', 'Update Data bab Gagal');
        }
        redirect('komentaruser');
    }

    public function delete()
    {
        $params = array('id_komentar' =>  $this->uri->segment(3));
        $delete =  $this->curl->simple_delete($this->API, $params);
        if ($delete) {
            $this->session->set_flashdata('result', 'Hapus Data bab Berhasil');
        } else {
            $this->session->set_flashdata('result', 'Hapus Data bab Gagal');
        }
        redirect('komentaruser');
    }
}
