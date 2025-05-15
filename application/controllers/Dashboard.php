<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function index()
    {
        $this->load->view('dashboard');
    }

    public function v2()
    {
        $this->load->view('dashboard_v2');
    }

    public function v3()
    {
        $this->load->view('dashboard_v3');
    }
} 