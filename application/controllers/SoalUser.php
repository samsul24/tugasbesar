<?php

defined('BASEPATH') or exit('No direct script access allowed');

class SoalUser extends CI_Controller
{

    public function __construct()
    {
            parent::__construct();
            $this->load->library('curl');
            
        $this->load->library('pdf');
        $this->API = "http://localhost/tugasbesar/soal";
    }

    public function index()
    {
        $data['soal'] = json_decode($this->curl->simple_get($this->API));
        $data['title'] = "Soal";
        $this->load->view('header0');
        $this->load->view('bar');
        $this->load->view('soal/index', $data, FALSE);
        $this->load->view('footer1');
    }

    public function post()
    {
        $data['title'] = "Tambah Data Menu";
        $this->load->view('header0');
        $this->load->view('bar');
        $this->load->view('soal/post', $data, FALSE);
        $this->load->view('footer1');
    }
    
    public function post_process()
    {
        $data = array(            
            'kategori'      => $this->input->post('kategori'),
            'pertanyaan'    => $this->input->post('pertanyaan'),
            'pil_a'         => $this->input->post('pil_a'),
            'pil_b'         => $this->input->post('pil_b'),
            'pil_c'         => $this->input->post('pil_c'),
            'pil_d'         => $this->input->post('pil_d'),
            'jawaban'       => $this->input->post('jawaban'),
     
        );
        $insert =  $this->curl->simple_post($this->API,$data);
        if ($insert) {
            $this->session->set_flashdata('result', 'Data Menu Berhasil Ditambahkan');
        } else {
            $this->session->set_flashdata('result', 'Data Menu Gagal Ditambahkan');
        }
        redirect('soaluser');
    }

    public function put()
    {
        $params = array('id_soal' =>  $this->uri->segment(3));
        $data['soal'] = json_decode($this->curl->simple_get($this->API, $params));
        $data['title'] = "Edit Data Menu";
        $this->load->view('header0');
        $this->load->view('bar');
        $this->load->view('soal/put', $data, FALSE);
        $this->load->view('footer1');
    }

    public function put_process()
    {
        $data = array(
            'id_soal'       => $this->input->post('id_soal'),
            'kategori'      => $this->input->post('kategori'),
            'pertanyaan'    => $this->input->post('pertanyaan'),
            'pil_a'         => $this->input->post('pil_a'),
            'pil_b'         => $this->input->post('pil_b'),
            'pil_c'         => $this->input->post('pil_c'),
            'pil_d'         => $this->input->post('pil_d'),
            'jawaban'       => $this->input->post('jawaban'),
            // 'keterangan'         => $this->putpost('keterangan'),
            // 'publish'         => $this->put('publish'),
        );
         
        $update =  $this->curl->simple_put($this->API, $data, array(CURLOPT_BUFFERSIZE => 10));
        if ($update) {
            $this->session->set_flashdata('result', 'Update Data Menu Berhasil');
        } else {
            $this->session->set_flashdata('result', 'Update Data Menu Gagal');
        }
        redirect('soaluser');
    }

    public function delete()
    {
        $params = array('id_soal' =>  $this->uri->segment(3));
        $delete =  $this->curl->simple_delete($this->API, $params);
        if ($delete) {
            $this->session->set_flashdata('result', '');
        } else {
            $this->session->set_flashdata('result', '');
        }
        redirect('soaluser');
    }
    public function latihan_pdf(){

        $this->load->library('pdf');
        $data['soal'] = json_decode($this->curl->simple_get($this->API));
        $this->load->view('user/pdfsoal', $data);


        $paper_size = 'A4';
        $orientation = 'potrait';
        $html = $this->output->get_output();
        $this->pdf->set_paper($paper_size, $orientation);
        $this->pdf->load_html($html);
        $this->pdf->render();
        $this->pdf->stream("latihan-soal.pdf", array('Attachment' => 0));
    }
    public function print(){
        $data['soal'] = json_decode($this->curl->simple_get($this->API));
        $this->load->view('user/print', $data);

    }
}
