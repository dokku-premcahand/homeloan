<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Base_New_Controller extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->init();
    }
    
    public function init(){
        $sessionData = $this->session->all_userdata();
        if(empty($sessionData['id']) || empty($sessionData['username'])){
            $this->session->set_flashdata('errorMsg', 'Unauthorised Access. Please login.');
            header('Location:'.base_url('admin'));
            exit;
        }
    }
}