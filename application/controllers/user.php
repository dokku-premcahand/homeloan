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
        $this->load->model('users');
        $data['userdata'] = $this->users->getUser();
        $this->load->view('user/myProfile', $data);
    }
    
    public function updateUser()
    {
        $this->load->model('users');
        $data['userdata'] = $this->users->updateUser();
        $this->session->set_flashdata('flashSuccess', 'User Sucessfully added.');
        header('Location:' . base_url('user/myProfile'));
    }
    
    public function saveLoan()
    {
        echo "yes";exit;
    }
    
    public function loanOpportunity($offset=0) {
        $this->load->model('users');
        $data = $this->users->getloanOpportunit($offset);
        $this->load->library('pagination');
        $config['base_url'] = base_url('user/loanOpportunity');
        $config['total_rows'] = $data['totalRows'];
        $config['per_page'] = limit; 
        $this->pagination->initialize($config);
        $result['details'] = $data['data']; 
        $result['pagination'] = $this->pagination->create_links();
        $this->load->view('user/loanOpportunity',$result);
    }
    
    public function loanOpportunityDetails($loanOpportunityId=0){
        if($loanOpportunityId != 0 && is_numeric($loanOpportunityId)){
            $this->load->model('users');
            $data['details'] = $this->users->loanOpportunityDetails($loanOpportunityId);
            $this->load->view('user/loanOpportunityDetails',$data);
        }else{
            $this->session->set_flashdata('errorMsg','Invalid loan opportunity id.');
            header('Location:'.base_url('user/loanOpportunity'));
        }
    }
    
    public function myLoanList($userId=0){
        if($userId != 0 && is_numeric($userId)){
            $this->load->model('users');
            $data['details'] = $this->users->myLoanList($userId);
            $this->load->view('user/myLoanList',$data);
        }else{
            $this->session->set_flashdata('errorMsg','Invalid link.');
            header('Location:'.base_url('user/loanOpportunity'));
        }
    }
}
