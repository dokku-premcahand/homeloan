<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index()
    {
     $this->load->view('index');
    }

    public function login()
    {
        $this->load->view('login');
    }
    
    public function testLogin(){
        $this->load->view('loginBKP');
    }

    public function authenticate()
    {
        $post = $this->input->post();
        $this->load->model('users');
        $result = $this->users->authenticate($post);

        if ($result['count'] == 1) {
            $sessionData = array('id' => $result['data']->id, 'emailId' => $result['data']->emailId);
            $this->session->set_userdata($sessionData);
            header('Location:' . base_url('user/index'));
        } else {
            $this->session->set_flashdata('errorMsg', 'Invalid username or password.');
            header('Location:' . base_url('home/login'));
        }
    }

    public function forgotPassword()
	{
        $this->load->view('forgotpassword');
    }

    public function forgotPasswordEmail()
	{
        $emailId = $this->input->post('emailId');
        $this->load->model('users');
        $responce = $this->users->forgotPassword($emailId);
        if ($responce == 1) {
            $this->session->set_flashdata('successMsg', 'Password reset link sent to the given emailid.');
            header('Location:' . base_url('home/forgotPassword'));
        } else {
            $this->session->set_flashdata('errorMsg', 'Email Id not registered with us.');
            header('Location:' . base_url('home/forgotPassword'));
        }
    }
    
    public function resetPassword($resetLink){
        if(!empty($resetLink)){
            $this->load->model('users');
            $responce = $this->users->validateResetPasswordLink($resetLink);
            if(count($responce) > 0){
                $this->load->view('resetpassword',$responce);
            }else{
                $this->session->set_flashdata('errorMsg', "Invali reset password link.");
                header('Location:'.base_url('home/login'));
            }
        }else{
            $this->session->set_flashdata('errorMsg', "You don't have access to this link.");
            header('Location:'.base_url('home/login'));
        }
    }
    
    public function setnewpassword(){
        $post = $this->input->post();
        $this->load->model('users');
        $responce = $this->users->setnewpassword($post);
        if($responce == 1){
            $this->session->set_flashdata('successMsg', "Password updated successfully. Please login.");
            header('Location:'.base_url('home/login'));
        }else{
            $this->session->set_flashdata('errorMsg', "Failed to update the password. Retry after sometime.");
            header('Location:'.base_url('home/login'));
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        header('Location:'.base_url());
    }
}
