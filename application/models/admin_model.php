<?php

defined('BASEPATH') or exit('No direct script access allowed');

class admin_model extends CI_Model
{
public function get_user()
    {
        $this->db->select('id, nama, username, password');
        $this->db->from('login');
        $this->db->where('level', 'not verified');
        $query = $this->db->get();
        if ($query->num_rows() >= 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }
    public function get1()
    {
        $this->db->select('id_materi,id_sub,nama,image,keterangan');
        $this->db->from('materi');
        $query = $this->db->get();
        if ($query->num_rows() >= 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }
    public function get_user_verif()
    {
        $this->db->select('id,nama,username,password');
        $this->db->from('login');
        $this->db->where('level', 'user');
        $query = $this->db->get();
        if ($query->num_rows() >= 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }
    public function verif($id)
    {
        $this->db->set('level', 'user');
        $this->db->from('login');
        $this->db->where('id', $id);                
        $this->db->update();
    }
    public function deny($id)
    {
        $this->db->from('login');
        $this->db->where('id', $id);
        $this->db->delete();
    }
    public function input_materi($data)
    {
        $this->db->insert('materi',$data);
    }
    public function getgaleri($id_img = null){

        if($id_img === null){
            return $this->db->get('gambar')->result();
        }else{
            return $this->db->get_where('gambar', ['id_img' => $id_img])->result();
        }
    }
    public function getTransById($id_img)
    {
        $this->db->select('transaksi.*, barang.nama_barang');
        return $this->db->get_where('transaksi', ['id_transaksi' => $id])->result();
    }
 
}