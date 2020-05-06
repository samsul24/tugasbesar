<?php

defined('BASEPATH') or exit('No direct script access allowed');

class registration_model extends CI_Model
{
    public function input_data($data)
    {
        $this->db->insert('login', $data);
        // $this->session->set_flashdata('status', 'Registration success, please wait for verification');
    }
}


/* End of file registration_model.php */
?>