<?php
Class Laporanpdf extends CI_Controller{
    
  public function __construct(){    
    parent::__construct();        
    // $this->load->model('siswa_model');  
    $this->load->library('curl');

    $this->API = "http://localhost/tugasbesar/soal";
  }    
    
    public function index(){   
       $data['soal'] = json_decode($this->curl->simple_get($this->API));
       $this->load->view('latihan', $data);  }    
     
      public function cetak(){    
        ob_start();    
        $data['soal'] =json_decode($this->curl->simple_get($this->API)); 
        $this->load->view('user/latihan', $data);    
        $html = ob_get_contents();        
        ob_end_clean();                
        require_once('./assets/html2pdf/html2pdf.class.php');    
        $pdf = new HTML2PDF('P','A4','en');    
        $pdf->WriteHTML($html);    
        $pdf->Output('Lathian Soal.pdf', 'D');  }}