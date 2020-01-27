<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{

    public function is_login()
    {
        return $this->session->userdata('id');
    }

    public function login()
    {
        $query = $this->db->get_where('tb_admin', [
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
        ]);

        if ($query) {
            return $query->row_array();
        } else {
            return false;
        }
    }
}
                        
/* End of file Auth_model.php */
