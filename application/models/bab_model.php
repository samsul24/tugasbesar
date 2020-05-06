<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class bab_model extends CI_Model {

    public function getBab($id_sub = null){

        if($id_sub === null){
            $this->db->select('subbab.*, bab.nama_sub');
            $this->db->join('bab', 'subbab.id_bab = bab.id_bab');
            return $this->db->get('subbab')->result();
        }else{
            return $this->db->get_where('subbab', ['id_sub' => $id_sub])->result();
        }
    }

    public function deleteBab($id_sub){
        $this->db->delete('subbab', ['id_sub' => $id_sub]);
        return $this->db->affected_rows();
    }

    public function createBab($data){
        $this->db->insert('subbab', $data);
        return $this->db->affected_rows();
    }

    public function updateBab($data,$id_sub){
        $this->db->update('subbab', $data ,['id_materi'=>$id_sub]) ;
        return $this->db->affected_rows();
    }
}    