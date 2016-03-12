<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Base_Controller extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->init();
    }
    
    public function init(){
        $sessionData = $this->session->all_userdata();
        if(empty($sessionData['id']) || empty($sessionData['emailId'])){
            $this->session->set_flashdata('errorMsg', 'Unauthorised Access. Please login.');
            header('Location:'.base_url('home/login'));
            exit;
        }
    }
}