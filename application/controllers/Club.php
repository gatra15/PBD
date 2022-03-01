<?php

class Club extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('M_index');
    }

    public function index(){
        if($this->session->logged_in == FALSE){
            $this->load->view('layout/header');
            $this->load->view('login/V_Login');
            $this->load->view('layout/footer');
        } else {
            $this->load->view('layout/header');
            $this->load->view('template/sidebar');
            $this->load->view('template/dashboard');
            $this->load->view('layout/footer');
        }
        
    }

    public function Login()
    {
        $username       = $this->input->post('username');
        $password       = $this->input->post('password');
 
        $status         = $this->M_index->getDetail($username,md5($password));
        if($status){
            $session = array(
                'nama'          => $username,
                'logged_in'     => TRUE
                );
            $this->session->set_userdata($session);
            $this->session->unset_userdata('gagal');
            redirect('Club');
        }else{
            $session = array('gagal' => 1);
            $this->session->set_userdata($session);
            redirect('Club');
        }
    }
 
    public function Logout()
    {
        $this->session->sess_destroy();
        redirect('Club');
    }
}