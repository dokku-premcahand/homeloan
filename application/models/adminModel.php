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
        if ($query->num_rows()) {
          $result['count'] = $query->num_rows();
          $temp = $query->result();
          $result['data'] = $temp[0];
          return $result;
        } else {
            return FALSE;
        }
    }

    public function saveLoan() {
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
                'image' => $target
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
                    'file' => $target
                );
                $this->db->where('id', $id);
                $this->db->update('loan_opportunity_documents',$data);
            }else{
                echo "File Not uploading";exit;
            }
        }
    }

}
