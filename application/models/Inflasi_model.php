<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Inflasi_model extends CI_Model
{

    public function create()
    {
        $data = [
            'inflasi' => $this->input->post('inflasi'),
            'persen' => $this->input->post('persen'),
        ];

        $query = $this->db->insert('tb_inflasi', $data);

        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function show()
    {
        $data = $this->db->get('tb_inflasi')->result_array();
        return $data;
    }

    public function update()
    {
        $this->db->set('inflasi', $this->input->post('inflasi'));
        $this->db->set('persen', $this->input->post('persen'));
        $this->db->where('id_inflasi', $this->input->post('id_inflasi'));
        $query = $this->db->update('tb_inflasi');

        # Check data berhasil masuk atau tidak
        if ($query == true) {
            return true;
        } else {
            return false;
        }
    }

    public function delete()
    {
        $this->db->where('id_inflasi', $this->input->post('id_inflasi'));
        $query = $this->db->delete('tb_inflasi');

        # Check data berhasil masuk atau tidak
        if ($query == true) {
            return true;
        } else {
            return false;
        }
    }
}
                        
/* End of file inflasi.php */
