<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Base_AdminController {

    public function __construct() {
        parent::__construct();
        $this->load->model('AdminModel');
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
         redirect(base_url('admin/admin/addLoanOpportunity'));
    }
}