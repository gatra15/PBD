<?php

class Club extends CI_Controller {
    public function index(){
        $this->load->view('layout/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/dashboard');
        $this->load->view('layout/footer');
    }
}