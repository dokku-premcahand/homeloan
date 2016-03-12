<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $sessionData = $this->session->all_userdata();
        if(empty($sessionData['id']) || empty($sessionData['emailId'])){
            header('Location:'.base_url('index/login'));
        }
    }

    public function index()
    {
        echo "hi";exit;
        // $this->load->view('index');
    }
}
