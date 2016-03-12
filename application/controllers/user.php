<?php if (!defined('BASEPATH'))exit('No direct script access allowed');

class User extends Base_Controller {

    public function __construct() {
        parent::__construct();
        
    }

    public function index() 
    {
        if($this->session->userdata('id'))
        {
            $this->load->view('user/index');
        }else{
            header('Location:' . base_url('home/logout'));
        }
    }
    
    public function myProfile()
    {
        $this->load->model('Users');
        $data['userdata'] = $this->Users->getUser();
        $this->load->view('user/myProfile', $data);
    }
    
    public function updateUser()
    {
        $this->load->model('Users');
        $data['userdata'] = $this->Users->updateUser();
                    $this->session->set_flashdata('flashSuccess', 'User Sucessfully added.');
            redirect('user/myProfile');
    }

}
