<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $sessionData = $this->session->all_userdata();
        if(empty($sessionData['id']) || empty($sessionData['emailId'])){
            header('Location:'.base_url('index/login'));
        }
    }

public function index() {
        $this->load->view('index');
    }

    public function login() {
        $this->load->view('login');
    }

    public function authenticate() {
        $post = $this->input->post();
        $this->load->model('Users');
        $result = $this->Users->authenticate($post);

        if ($result['count'] == 1) {
            $sessionData = array('id' => $result['data']->id, 'emailId' => $result['data']->emailId);
            $this->session->set_userdata($sessionData);
            header('Location:' . base_url('user/index'));
        } else {
            $this->session->set_flashdata('errorMsg', 'Invalid username or password.');
            header('Location:' . base_url('home/login'));
        }
    }

    public function forgotPassword() {
        $this->load->view('forgotpassword');
    }

    public function forgotPasswordEmail() {
        $emailId = $this->input->post('emailId');
        $this->load->model('Users');
        $responce = $this->Users->forgotPassword($emailId);
        if ($responce == 1) {
            $this->session->set_flashdata('successMsg', 'Password reset link sent to the given emailid.');
            header('Location:' . base_url('index/forgotPassword'));
        } else {
            $this->session->set_flashdata('errorMsg', 'Email Id not registered with us.');
            header('Location:' . base_url('index/forgotPassword'));
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        header('Location:' . base_url('home/login'));
    }
    
    

}
