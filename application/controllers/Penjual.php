<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Penjual extends CI_Controller
{

    public function index()
    {
        $this->load->view('penjual/header');
        $this->load->view('penjual/penjual-dashboard');
        $this->load->view('penjual/footer');
    }
    public function add()
    {
        $this->load->view('penjual/header');
        $this->load->view('penjual/penjual-dashboard');
        $this->load->view('penjual/footer');
    }
    public function list()
    {
        $this->load->view('penjual/header');
        $this->load->view('penjual/penjual-dashboard');
        $this->load->view('penjual/footer');
    }
}
        
    /* End of file  Penjual.php */
