<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Base_AdminController {

    public function __construct() {
        parent::__construct();
        $this->load->model('adminmodel');
    }
    
    public function dashboard()
    {
        $data['menu'] = 'dashboard';
        $this->load->view('admin/dashboard',$data);

    }

    public function addLoanOpportunity()
    {
        $data['menu'] = 'addloan';
        $this->load->view('admin/addLoan',$data);
    }

    public function saveLoan()
    {
        $this->adminmodel->saveLoan();
        $this->session->set_flashdata('successMsg', 'Loan Opportunity successfully added.');
         redirect(base_url('admin/admin/addLoanOpportunity'));
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
        redirect(base_url('admin/admin/addUsers'));
    }
    
    public function listUsers()
    {
        $data['menu'] = 'addloan';
        $result = $this->adminmodel->getAllUsers();
//        $array = array();
//        foreach ($result as $r)
//        {
//            echo "<pre>";print_r($r);exit;
//            $array[] = $r;
//        }
        
//        echo "<pre>";print_r(json_encode($result, 1));exit;
        $filename = __DIR__.('\..\..\..\public\tables\data1.json');
        $json = json_decode(file_get_contents($filename));
        file_put_contents($filename, json_encode($result, 1));
        $this->load->view('admin/listUsers', $data);
    }
}