<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
    public function theme() { $this->load->view('pages_theme'); }
    public function layout() { $this->load->view('pages_layout'); }
    public function ui() { $this->load->view('pages_ui'); }
    public function forms() { $this->load->view('pages_forms'); }
    public function tables() { $this->load->view('pages_tables'); }
    public function auth() { $this->load->view('pages_auth'); }
    public function docs() { $this->load->view('pages_docs'); }
} 