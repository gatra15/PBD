<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class C_Index extends CI_Controller {
 
    function __construct(){
        parent::__construct();
        $this->load->model('M_index');
    }
     
    public function index()
    {
        if($this->session->logged_in == FALSE){
            $this->load->view('layout/header');
            $this->load->view('login/V_Login');
            $this->load->view('layout/footer');
        }else{
            $this->load->view('layout/header');
            $this->load->view('template/dashboard');
            $this->load->view('layout/header');
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
            redirect('/');
        }else{
            $session = array('gagal' => 1);
            $this->session->set_userdata($session);
            redirect('/');
        }
    }
 
    public function Logout()
    {
        $this->session->sess_destroy();
        redirect('/');
    }
}