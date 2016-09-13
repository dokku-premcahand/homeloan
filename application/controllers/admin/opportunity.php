<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Opportunity extends Base_AdminController {

    public function __construct() {
        parent::__construct();
		$this->load->model('opportunity_model');
    }

    public function add()
    {
        $this->load->view('admin/opportunity/add');
    }

    public function view($opportunityId){
        $data['details'] = $this->opportunity_model->getOpportunityDetailsFromId($opportunityId);
        $data['documents'] = $this->opportunity_model->getOpportunityDocumentListFromId($opportunityId);
        $data['investment'] = $this->opportunity_model->getOpportunityInvestments($opportunityId);
        $this->load->view('admin/opportunity/view',$data);
    }

    public function save()
    {
        if($this->input->post()){
            $this->opportunity_model->save();
            $this->emailForNewOpportunity();
            $this->session->set_flashdata('successMsg', 'Opportunity successfully added.');
        }
        redirect(base_url('admin/opportunity/listing'));
    }

    public function listing(){
    	$this->load->view('admin/opportunity/listing');
    }

    public function edit($opportunityId){
    	$data['details'] = $this->opportunity_model->getOpportunityDetailsFromId($opportunityId);
    	$this->load->view('admin/opportunity/edit',$data);
    }

    public function getOpportunityListing(){
    	$data = $this->opportunity_model->getOpportunityListing();
    	echo json_encode($data);
    }

    public function emailForNewOpportunity(){
        $this->load->model('users');
        $userDetails = $this->users->getAllUsersList();

        // $this->load->library('email');
        // $this->email->from('admin@triadrealtyventures.com', 'Admin Triad Realty Ventures');
        // $this->email->to($userDetails['email']);

        // $this->email->subject('New opportunity available for funding');
        // $this->email->message('
        //         Dear User,<br/> 
        //         New opportunity is available for funding and can be checked at 
        //         <a href="'base_url("home/login")'">triadrealtyventures.com</a>
        //     ');
        // $this->email->send();
        return true;
    }

    public function update(){
        if($this->input->post()){
            $this->opportunity_model->update();
            $this->emailForNewOpportunity();
            $this->session->set_flashdata('successMsg', 'Opportunity successfully added.');
        }
        if($this->input->post('funded') == 1 || $this->input->post('completed') == 1){
            redirect(base_url('admin/loan/listing'));
        }else{
            redirect(base_url('admin/opportunity/listing'));
        }
    }
}
?>