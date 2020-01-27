<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Ketentuan_model extends CI_Model
{

    public function create()
    {
        $data = [
            'id_komoditas' => $this->input->post('komoditas'),
            'id_inflasi' => $this->input->post('inflasi'),
            'tanggal' => $this->input->post('tanggal'),
            'nm_ketentuan' => $this->input->post('nm_ketentuan'),
            'harga_satuan' => $this->input->post('harga_satuan'),
            'selisih_satuan' => $this->input->post('selisih_satuan'),
        ];

        $query = $this->db->insert('tb_ketentuan', $data);

        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function show()
    {
        $this->db->select('tb_ketentuan.*, tb_komoditas.komoditas');
        $this->db->from('tb_ketentuan');
        $this->db->join('tb_komoditas', 'tb_komoditas.id_komoditas = tb_ketentuan.id_komoditas', 'left');
        // $this->db->join('tb_inflasi', 'tb_inflasi.id_inflasi = tb_ketentuan.id_inflasi', 'right');
        $data = $this->db->get()->result_array();

        return $data;
    }

    public function update()
    {
        $data = [
            'id_komoditas' => $this->input->post('komoditas'),
            'id_inflasi' => $this->input->post('inflasi'),
            'tanggal' => $this->input->post('tanggal'),
            'nm_ketentuan' => $this->input->post('nm_ketentuan'),
            'harga_satuan' => $this->input->post('harga_satuan'),
            'selisih_satuan' => $this->input->post('selisih_satuan'),
        ];

        $this->db->where('id_ketentuan', $this->input->post('id_ketentuan'));
        $query = $this->db->update('tb_ketentuan', $data);

        # Check data berhasil masuk atau tidak
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function delete()
    {
        $this->db->where('id_ketentuan', $this->input->post('id_ketentuan'));
        $query = $this->db->delete('tb_ketentuan');

        # Check data berhasil masuk atau tidak
        if ($query == true) {
            return true;
        } else {
            return false;
        }
    }
}
                        
/* End of file Ketentuan_model.php */
