<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin_model');
    }

    public function index()
    {
        $this->load->view('admin/index');
    }
    
    public function authenticate()
    {
        $postdata = $this->input->post();
        $result = $this->admin_model->checkAdmin($postdata);

        if($result['count'] != 1){
             $this->session->set_flashdata('errorMsg', 'Invalid username or password.');
             redirect(base_url('admin'));
        }else{
            $sessionData = array('id' => $result['data']->id, 'username' => $result['data']->username);
            $this->session->set_userdata($sessionData);
            redirect(base_url('admin/admin/dashboard'));
        }
        
    }
    
    public function logout()
    {
        $this->session->sess_destroy();
        header('Location:'.base_url('admin/index'));
    }
}
