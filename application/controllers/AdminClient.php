<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AdminClient extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
		$this->load->library('curl');
        $this->load->model('admin_model');
        

    }

    public function index()
    {
        $data['title'] = "Dashboard";
        $this->load->view('header0', $data, FALSE);
        $this->load->view('bar', $data, FALSE);
        $this->load->view('admin/index', $data, FALSE);
        $this->load->view('footer1', $data, FALSE);
    }
    public function materi()
    {
        $data['materi'] = $this->admin_model->get1();
        $data['title'] = 'Katalog';
        $this->load->view('header4', $data, FALSE);
        $this->load->view('materi/subindexhabitat', $data, FALSE);
        $this->load->view('footer', $data, FALSE);

    }
    
    public function tambah()
    {
        // $data['login'] = $this->admin_model->get_user();
        $data['materi'] = $this->admin_model->get1();
        $data['title'] = 'Reserve';
        $this->load->view('materi/post', $data, FALSE);
    }

     public function verification()
    {
        // $this->API = "http://localhost/tugasbesar/user";
        // $data['user'] = json_decode($this->curl->simple_get($this->API));
        $data['login'] = $this->admin_model->get_user();    
        $data['title'] = 'verification';
        $this->load->view('header0');
        $this->load->view('bar');
        $this->load->view('admin/verif', $data, FALSE);
        $this->load->view('footer1');
        
    }
    public function verification_process($id)
    {
        $data['login'] = $this->admin_model->verif($id);
        $this->session->set_flashdata('status', 'User has been verified');
        redirect('adminclient/verification', 'refresh');
    }
    public function verification_deny($id)
    {
        $data['login'] = $this->admin_model->deny($id);
        $this->session->set_flashdata('status', 'User has been denied');
        redirect('adminclient/verification', 'refresh');
    }

}
