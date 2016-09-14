<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Base_AdminController {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin_model');
    }
    
    public function dashboard()
    {
        $data['menu'] = 'dashboard';
        $this->load->view('admin/dashboard',$data);

    }
    
    public function forceDownload($documentId){
        $this->load->model('users');
        $this->users->forceDownload($documentId);
    }
}