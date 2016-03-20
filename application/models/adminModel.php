<?php

class AdminModel extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function checkAdmin($postdata) {
        $query = $this->db->select('*')
                ->from('admin')
                ->where('username', $postdata['email'])
                ->where('password', md5($postdata['password']))
                ->get();
        if($query->num_rows()){
            return TRUE ;
        }else{
            return FALSE;
        }
    }
    
    public function saveLoan()
    {
        $postdata = $this->input->post();
        echo "<pre>";
        print_r($postdata);
        $data = array(
            'projectName' => $postdata['projectName'],
            'ltv' => $postdata['ltv'],
            'apr' => $postdata['apr'],
            'maturityDate' => $postdata['maturityDate'],
            'penalty' => $postdata['penalty'],
            'agent' => $postdata['agent'],
            'exitTerm' => $postdata['exitTerm'],
            'purpose' => $postdata['purpose'],
            'location' => $postdata['location'],
            'address' => $postdata['address'],
            'loanAmount' => $postdata['loanAmount'],
            'term' => $postdata['term'],
            'grossApr' => $postdata['grossApr'],
            'date' => $postdata['date'],
            'closingDate' => $postdata['closingDate'],
            'agentUrl' => $postdata['agentUrl'],
            'security' => $postdata['security'],
            'state' => $postdata['state'],
            'city' => $postdata['city']
        ); 
        
        $this->db->insert('loan_opportunity',$data);
    }

}
