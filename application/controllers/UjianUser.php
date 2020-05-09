<?php

defined('BASEPATH') or exit('No direct script access allowed');

class UjianUser extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("ujian_model");
    }

    public function index()
    {
        $data['title'] = "Ujian";
        $this->load->model('ujian_model','ujian');
        $data['ujian'] =$this->ujian->getAllUjian();
        $this->load->view('header0');
        $this->load->view('bar');
        $this->load->view('ujian/index', $data, FALSE);
        $this->load->view('footer1');
    }
    public function hasil()
    {
      $data['title'] = "Latihan soal";
      $data['temp_jawab'] = $this->ujian_model->getJawab();
      $this->load->view('header0');
      $this->load->view('bar');
      $this->load->view('ujian/hasil', $data, FALSE);
      $this->load->view('footer1');
    }

    public function post()
    {
        $data['title'] = "Tambah Data Menu";
        $this->load->view('header0');
        $this->load->view('bar');
        $this->load->view('ujian/post', $data, FALSE);
        $this->load->view('footer1');
    }
    public function post_process()
    {
        $data = array(            
            'pertanyaan'      => $this->input->post('pertanyaan'),
            'jawab_a'         => $this->input->post('jawab_a'),
            'jawab_b'         => $this->input->post('jawab_b'),
            'jawab_c'         => $this->input->post('jawab_c'),
            'jawab_d'         => $this->input->post('jawab_d'),
            'jawaban'         => 'no answer',
            'kunci'         => $this->input->post('kunci'),
        );
        $this->ujian_model->input_data($data);
        redirect('ujianuser ','refresh');
        
    }
     
    //     );
    //     $insert=$this->curl->simple_post($this->API,$data);
    //     if ($insert) {
    //         $this->session->set_flashdata('result', '');
    //     } else {
    //         $this->session->set_flashdata('result', '');
    //     }
    //     redirect('ujianuser');
    // }

    // public function put()
    // {
    //     $params = array('nomor' =>  $this->uri->segment(3));
    //     $data['ujian'] = json_decode($this->curl->simple_get($this->API, $params));
    //     $data['title'] = "Edit Data Menu";
    //     $this->load->view('header0');
    //     $this->load->view('bar');
    //     $this->load->view('soal/put', $data, FALSE);
    //     $this->load->view('footer1');
    // }

    // public function put_process()
    // {
    //     $data = array(
    //         'nomor'       => $this->input->post('nomor'),
    //         'pertanyaan'    => $this->input->post('pertanyaan'),
    //         'jawab_a'         => $this->input->post('jawab_a'),
    //         'jawab_b'         => $this->input->post('jawab_b'),
    //         'jawab_c'         => $this->input->post('jawab_c'),
    //         'jawab_d'         => $this->input->post('jawab_d'),
    //         'jawaban'       => $this->input->post('jawaban'),
    //         // 'keterangan'         => $this->putpost('keterangan'),
    //         // 'publish'         => $this->put('publish'),
    //     );
         
    //     $update =  $this->curl->simple_put($this->API, $data, array(CURLOPT_BUFFERSIZE => 10));
    //     if ($update) {
    //         $this->session->set_flashdata('result', 'Update Data Menu Berhasil');
    //     } else {
    //         $this->session->set_flashdata('result', 'Update Data Menu Gagal');
    //     }
    //     redirect('ujianuser');
    // }

    // public function delete()
    // {
    //     $params = array('nomor' =>  $this->uri->segment(3));
    //     $delete =  $this->curl->simple_delete($this->API, $params);
    //     if ($delete) {
    //         $this->session->set_flashdata('result', '');
    //     } else {
    //         $this->session->set_flashdata('result', '');
    //     }
    //     redirect('ujianuser');
    // }
    // public function latihan_pdf(){

    //     $this->load->library('pdf');
    //     $data['soal'] = json_decode($this->curl->simple_get($this->API));
    //     $this->load->view('user/pdfsoal', $data);


    //     $paper_size = 'A4';
    //     $orientation = 'potrait';
    //     $html = $this->output->get_output();
    //     $this->pdf->set_paper($paper_size, $orientation);
    //     $this->pdf->load_html($html);
    //     $this->pdf->render();
    //     $this->pdf->stream("latihan-soal.pdf", array('Attachment' => 0));
    // }
    // public function print(){
    //     $data['soal'] = json_decode($this->curl->simple_get($this->API));
    //     $this->load->view('user/print', $data);

    // }
}
