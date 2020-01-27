<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Komoditas_model', 'komoditas');
        $this->load->model('Auth_model', 'auth');
    }

    public function index()
    {
        if (!$this->auth->is_login()) {
            redirect(base_url('admin/login'));
        }
        $this->load->view('admin/header');
        $this->load->view('admin/admin-dashboard');
        $this->load->view(
            'admin/footer'
        );
    }

    public function komoditas()
    {
        if (!$this->auth->is_login()) {
            redirect(base_url('admin/login'));
        }
        $data = [
            'uri_ajax' => 'komoditas',
        ];

        $this->load->view('admin/header');
        $this->load->view('admin/admin-komoditas', $data);
        $this->load->view('admin/footer', $data);
    }

    public function ketentuan()
    {
        if (!$this->auth->is_login()) {
            redirect(base_url('admin/login'));
        }
        $data = [
            'uri_ajax' => 'ketentuan',
        ];

        // Route Ketentuan
        $this->load->view('admin/header');
        $this->load->view('admin/admin-ketentuan', $data);
        $this->load->view('admin/footer', $data);
    }

    public function inflasi()
    {
        if (!$this->auth->is_login()) {
            redirect(base_url('admin/login'));
        }
        $data = [
            'uri_ajax' => 'inflasi',
        ];

        // Route inflasi
        $this->load->view('admin/header');
        $this->load->view('admin/admin-inflasi', $data);
        $this->load->view('admin/footer', $data);
    }

    public function login()
    {
        if ($this->auth->is_login()) {
            redirect(base_url('admin'));
        }
        // Route login admin
        $this->load->view('admin-login');
    }

    public function auth()
    {
        $result = $this->auth->login();

        if ($result == false) {
            echo json_encode(['is_auth' => false]);
        } else {
            $this->session->set_userdata($result);
            echo json_encode([
                'data' => $result,
                'is_auth' => true
            ]);
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('admin/login'));
    }
}
        
    /* End of file  Admin.php */
