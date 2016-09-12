<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends Base_AdminController {

    public function __construct() {
        parent::__construct();
        $this->load->model('adminmodel');
    }
    
    public function index()
    {
        $data['menu'] = 'listUser';
        $result = $this->adminmodel->getAllUsers();
        $filename = __DIR__.('\..\..\..\public\tables\data1.json');
        $json = json_decode(file_get_contents($filename));
        file_put_contents($filename, json_encode($result, 1));
        $this->load->view('admin/listUsers', $data);
    }
    
    public function addUsers()
    {
        $data['menu'] = 'addloan';
        $this->load->view('admin/addUsers', $data);
    }
    
    public function saveUser()
    {
        $this->adminmodel->saveUser();
        $this->session->set_flashdata('successMsg', 'User successfully registered.');
        redirect(base_url('admin/user/addUsers'));
    }
       
    public function viewUser($id)
    {
        $data['menu'] = 'addloan';
        $data['id'] = $id;
        $result = $this->adminmodel->getUserById($id);
//        echo "<pre>";print_r($result);exit;
        $data['result'] = $result;
        $this->load->view('admin/viewUser', $data);
    }
    
    public function updateUser()
    {
        $this->adminmodel->updateUser();
        $this->session->set_flashdata('successMsg', 'User successfully updated.');
        redirect(base_url('admin/user'));
    }
    
    public function changePassword($id)
    {
        $data['menu'] = 'addloan';
        $data['id'] = $id;
        $this->load->view('admin/changePassword', $data);
    }
    
    public function updateUserPassword()
    {
        $this->adminmodel->updateUserPassword();
        $this->session->set_flashdata('successMsg', 'User Password successfully updated.');
        redirect(base_url('admin/user'));
    }
    
    public function deleteUser($id) {
        $result = $this->adminmodel->deleteUser($id);
        echo $result;exit;
    }
}
