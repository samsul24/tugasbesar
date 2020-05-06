<?php

defined('BASEPATH') or exit('No direct script access allowed');

class SubbabUser extends CI_Controller
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
        $data['title'] = "Subbab";
        $this->load->view('header', $data, FALSE);
        $this->load->view('subbab/index', $data, FALSE);
        $this->load->view('footer', $data, FALSE);
    }

    public function post()
    {
        // $this->API2 = "http://localhost/tugasbesar/subbab";
        // $data['subbab'] = json_decode($this->curl->simple_get($this->API2));
        $data['title'] = "Tambah Data bab";
        $this->load->view('header', $data, FALSE);
        $this->load->view('subbab/index_post', $data, FALSE);
        $this->load->view('footer', $data, FALSE);
    }

    public function post_process()
    {
        $data = array(
            'id_bab'          => $this->post('id_bab'),
            'nama_sub'         => $this->post('nama_sub'),
        );
        $insert =  $this->curl->simple_post($this->API, $data);
        if ($insert) {
            $this->session->set_flashdata('result', 'Data bab Berhasil Ditambahkan');
        } else {
            $this->session->set_flashdata('result', 'Data bab Gagal Ditambahkan');
        }
        redirect('subbabuser');
    }

    public function put()
    {
        $params = array('id_subbab' =>  $this->uri->segment(3));
        // $this->API2 = "http://localhost/tugasbesar/subbab";
        $data['subbab'] = json_decode($this->curl->simple_get($this->API, $params));
        $data['title'] = "Edit Data bab";
        $this->load->view('header', $data, FALSE);
        $this->load->view('subbab/put', $data, FALSE);
        $this->load->view('footer', $data, FALSE);
    }

    public function put_process()
    {
        $data = array(
            'id_sub'          => $this->input->post('id_sub'),
            'id_bab'          => $this->post('id_bab'),
            'nama_sub'         => $this->post('nama_sub'),
        );
        $update =  $this->curl->simple_put($this->API, $data, array(CURLOPT_BUFFERSIZE => 10));
        if ($update) {
            $this->session->set_flashdata('result', 'Update Data bab Berhasil');
        } else {
            $this->session->set_flashdata('result', 'Update Data bab Gagal');
        }
        redirect('subbabuser');
    }

    public function delete()
    {
        $params = array('id_sub' =>  $this->uri->segment(3));
        $delete =  $this->curl->simple_delete($this->API, $params);
        if ($delete) {
            $this->session->set_flashdata('result', 'Hapus Data bab Berhasil');
        } else {
            $this->session->set_flashdata('result', 'Hapus Data bab Gagal');
        }
        redirect('subbabuser');
    }
}
