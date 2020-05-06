<?php

defined('BASEPATH') or exit('No direct script access allowed');

class game extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index1()
    {
        $data['title'] = "Game";
        // $this->load->view('header', $data, FALSE);
        $this->load->view('game/index1', $data, FALSE);
        // $this->load->view('footer', $data, FALSE);

    }
    
    public function index2()
    {
        $data['title'] = "Game";
        // $this->load->view('header', $data, FALSE);
        $this->load->view('game/index2', $data, FALSE);
        // $this->load->view('footer', $data, FALSE);

    }

}
