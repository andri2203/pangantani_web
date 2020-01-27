<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Komoditas_model extends CI_Model
{

    public function create($data)
    {
        # Simpan data ke database
        $query = $this->db->insert('tb_komoditas', $data);

        # Check data berhasil masuk atau tidak
        if ($query == true) {
            return true;
        } else {
            return false;
        }
    }

    public function show()
    {
        $data = $this->db->get('tb_komoditas')->result_array();
        return $data;
    }

    public function update()
    {
        $this->db->set('komoditas', $this->input->post('komoditas'));
        $this->db->where('id_komoditas', $this->input->post('id_komoditas'));
        $query = $this->db->update('tb_komoditas');

        # Check data berhasil masuk atau tidak
        if ($query == true) {
            return true;
        } else {
            return false;
        }
    }

    public function delete()
    {
        $this->db->where('id_komoditas', $this->input->post('id_komoditas'));
        $query = $this->db->delete('tb_komoditas');

        # Check data berhasil masuk atau tidak
        if ($query == true) {
            return true;
        } else {
            return false;
        }
    }
}
                        
/* End of file Komoditas.php */
