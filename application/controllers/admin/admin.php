<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Base_AdminController {

    public function __construct() {
        parent::__construct();
        $this->load->model('AdminModel');
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
        $this->AdminModel->saveLoan();
        $this->session->set_flashdata('successMsg', 'Loan Opportunity successfully added.');
         redirect(base_url('admin/admin/addLoanOpportunity'));
    }
}