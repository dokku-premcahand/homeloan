<?php

class Opportunity_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function getOpportunityListing(){
    	$sql = "SELECT SQL_CALC_FOUND_ROWS * FROM loan_opportunity";
    	$result = $this->db->query($sql)->result_array();

    	$countSql = "SELECT FOUND_ROWS() AS totalCount";
		$countResult = $this->db->query($countSql)->result()[0];

		$data['total'] = $countResult->totalCount;
		$data['rows'] = $result;
    	
    	return $data;
    }

    public function getOpportunityDetailsFromId($opportunityId){
        $sql = "SELECT * FROM loan_opportunity WHERE id = ".$opportunityId;
        $result = $this->db->query($sql)->result()[0];

        return $result;
    }

    public function getOpportunityDocumentListFromId($opportunityId){
        $data = $this->db->select('*')->from('loan_opportunity_documents')->where('lo_id',$opportunityId)->get()->result();
        return $data;
    }

    public function getOpportunityInvestments($opportunityId){
        $sql = "SELECT lo.projectName AS project_name,concat(ud.firstname,' ',ud.lastname) AS name, uop.amount AS amount
                FROM users_opportunity_investment uop
                LEFT JOIN loan_opportunity lo ON lo.id = uop.opportunity_id
                LEFT JOIN user_details ud ON ud.id = uop.user_id
                WHERE lo.id = ".$opportunityId;        
        $result = $this->db->query($sql)->result();

        return $result;
    }

    public function save() {
        $postdata = $this->input->post();
        $this->load->library('upload');

        $possible_letters = '23456789bcdfghjkmnpqrstvwxyz';
        $code = '';
        $j = 0;
            while ($j < 4) {
                $code .= substr($possible_letters, mt_rand(0, strlen($possible_letters) - 1), 1);
                $j++;
            }

        $unique_code = $code;
        $file_exnt = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $filename = current(explode(".", $_FILES['image']['name']));
        $genertaed_file_name = $filename . $unique_code . "." . $file_exnt;
        
        $target = dirname(__FILE__).'/../../uploads/loanOppImg/'.$genertaed_file_name;

        if(!move_uploaded_file($_FILES['image']['tmp_name'], $target)){
            echo "Image not uploading";exit;
        } else {
            $data['upload_data']['full_path'] = 'tes';
            $data1 = array(
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
                'city' => $postdata['city'],
                'image' => $genertaed_file_name,
                'inactive' => (!empty($postdata['inactive'])) ? $postdata['inactive'] : 0 ,
                'funded' => (!empty($postdata['funded'])) ? $postdata['funded'] : 0 ,
                'completed' => (!empty($postdata['completed'])) ? $postdata['completed'] : 0 
            );
            $this->db->insert('loan_opportunity', $data1);
            $insert_id = $this->db->insert_id();
            if(count($_FILES['document']['name']) > 0 )
            {
                $this->saveLoanDocument($insert_id);
            }
        }
    }

    private function set_upload_image($genertaed_file_name) {

        $config = array();
        $config['upload_path'] = 'uploads/loanOppImg';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '0';
        $config['overwrite'] = FALSE;
        $config['file_name'] = $genertaed_file_name;

        return $config;
    }
    
    public function saveLoanDocument($insert_id) {
        $count = count($_FILES['document']['name']);

        $postdata = $this->input->post();

        for($i=0; $i<$count; $i++){

            $data = array(
                'lo_id' => $insert_id,
                'title' => $postdata['title'][$i],
                'type' => $postdata['type'][$i]
            );
            $this->db->insert('loan_opportunity_documents',$data);
            $id = $this->db->insert_id();

            $info = pathinfo($_FILES['document']['name'][$i]);
            $ext = $info['extension']; // get the extension of the file
            $newname = $postdata['title'][$i].".".$ext;

            if(!is_dir(dirname(__FILE__).'/../../uploads/loanOppDocument/'.$insert_id.'/'))
            {
                mkdir(dirname(__FILE__).'/../../uploads/loanOppDocument/'.$insert_id.'/');
                $target = dirname(__FILE__).'/../../uploads/loanOppDocument/'.$insert_id.'/'.$newname;
            }else{
                $target = dirname(__FILE__).'/../../uploads/loanOppDocument/'.$insert_id.'/'.$newname;
            }
            if (file_exists($target))
            {
                echo $newname . " already exists. ";exit;
            }elseif(move_uploaded_file( $_FILES['document']['tmp_name'][$i], $target)){
                $data = array(
                    'file' => $newname
                );
                $this->db->where('id', $id);
                $this->db->update('loan_opportunity_documents',$data);
            }else{
                echo "File Not uploading";exit;
            }
        }
    }

    public function update(){
        $postdata = $this->input->post();
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
                'city' => $postdata['city'],
                'image' => $postdata['image'],
                'inactive' => (!empty($postdata['inactive'])) ? $postdata['inactive'] : 0 ,
                'funded' => (!empty($postdata['funded'])) ? $postdata['funded'] : 0 ,
                'completed' => (!empty($postdata['completed'])) ? $postdata['completed'] : 0 
            );
        $responce = $this->db->update('loan_opportunity',$data,array('id'=>$postdata['loanOpportunityId']));
        return true;
    }

    public function addUserOpportunityLendAmount(){
        $postdata = $this->input->post();
        $data = array(
                'opportunity_id'    => $postdata['opportunityId'],
                'user_id'           => $this->session->userdata('id'),
                'amount'            => $postdata['lendAmount']
            );
        $this->db->insert('users_opportunity_investment', $data);
        return true;
    }

    public function getUserOpportunityInvestment($loanOpportunityId){
        $sql = "SELECT * FROM users_opportunity_investment WHERE opportunity_id = ".$loanOpportunityId."
                AND user_id = ".$this->session->userdata('id');
        $result = $this->db->query($sql)->row_array();
        return $result;
    }
}
?>