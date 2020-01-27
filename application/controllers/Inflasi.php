<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Inflasi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Inflasi_model', 'inflasi');
    }


    public function create()
    {
        $result = $this->inflasi->create();

        $json = ['msg' => $result];
        echo json_encode($json);
    }

    public function show()
    {
        $return = $this->inflasi->show();
        echo json_encode($return);
    }

    public function update()
    {
        $return = $this->inflasi->update();
        $json = array('msg' => $return);

        echo json_encode($json);
    }

    public function delete()
    {
        $return = $this->inflasi->delete();
        $json = array('msg' => $return);

        echo json_encode($json);
    }
}
        
    /* End of file  Inflasi.php */
