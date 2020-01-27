<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Komoditas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Komoditas_model', 'komoditas');
    }


    public function create()
    {
        $data = [
            'komoditas' => $this->input->post('komoditas'),
        ];

        $return =  $this->komoditas->create($data);

        $json = array('msg' => $return);

        echo json_encode($json);
    }

    public function show()
    {
        $return = $this->komoditas->show();
        echo json_encode($return);
    }

    public function update()
    {
        $return = $this->komoditas->update();
        $json = array('msg' => $return);

        echo json_encode($json);
    }

    public function delete()
    {
        $return = $this->komoditas->delete();
        $json = array('msg' => $return);

        echo json_encode($json);
    }
}
        
    /* End of file  Komoditas.php */
