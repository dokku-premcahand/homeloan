<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//class Admin extends CI_Controller {Base_Controller
class Admin extends Adminbase_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('AdminModel');
    }

    public function index()
    {
     $this->load->view('admin/index');
    }
    
    public function authenticate()
    {
        $postdata = $this->input->post();
        $result = $this->AdminModel->checkAdmin($postdata);

        if($result['count'] != 1){
             $this->session->set_flashdata('errorMsg', 'Invalid username or password.');
             redirect(base_url('admin'));
        }else{
            $sessionData = array('id' => $result['data']->id, 'username' => $result['data']->username);
            $this->session->set_userdata($sessionData);
            redirect(base_url('admin/dashboard'));
        }
        
    }
    
    public function dashboard()
    {
        $this->load->view('admin/dashboard');
        
    }
    
    public function addLoanOpportunity()
    {
        $this->load->view('admin/addLoan');
    }
    
    public function saveLoan()
    {
        $this->AdminModel->saveLoan();
        $this->session->set_flashdata('successMsg', 'Loan Opportunity successfully added.');
         redirect(base_url('admin/addLoanOpportunity'));
    }
    
}
