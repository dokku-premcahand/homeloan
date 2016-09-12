<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Loan extends Base_AdminController {

    public function __construct() {
        parent::__construct();
		$this->load->model('loan_model');
        $this->load->model('opportunity_model');
    }

    public function view($opportunityId){
        $data['details'] = $this->opportunity_model->getOpportunityDetailsFromId($opportunityId);
        $data['documents'] = $this->opportunity_model->getOpportunityDocumentListFromId($opportunityId);
        $data['investment'] = $this->opportunity_model->getOpportunityInvestments($opportunityId);
        $this->load->view('admin/opportunity/view',$data);
    }

    public function save()
    {
        $this->opportunity_model->save();
        $this->session->set_flashdata('successMsg', 'Loan Opportunity successfully added.');
        redirect(base_url('admin/loan/listing'));
    }

    public function listing(){
    	$this->load->view('admin/loan/listing');
    }

    public function edit($opportunityId){
    	$data['details'] = $this->loan_model->getOpportunityDetailsFromId($opportunityId);
    	$this->load->view('admin/opportunity/edit',$data);
    }

    public function getLoanListing(){
    	$data = $this->loan_model->getLoanListing();
    	echo json_encode($data);
    }
}
?>