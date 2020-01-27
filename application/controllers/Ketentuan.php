<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Ketentuan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Ketentuan_model', 'ketentuan');
    }

    public function create()
    {
        $result = $this->ketentuan->create();

        $json = ['msg' => $result];
        echo json_encode($json);
    }

    public function show()
    {
        $return = $this->ketentuan->show();
        echo json_encode($return);
    }

    public function update()
    {
        $return = $this->ketentuan->update();
        $json = array('msg' => $return);

        echo json_encode($json);
    }

    public function delete()
    {
        $return = $this->ketentuan->delete();
        $json = array('msg' => $return);

        echo json_encode($json);
    }
}
        
    /* End of file  Ketentuan.php */
