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

    public function saveUser()
    {
        $postdata = $this->input->post();
        $data = array(
            'emailId' => $postdata['email'],
            'password' =>  md5($postdata['password'])
        );
        
        $this->db->insert('user', $data);
        $insert_id = $this->db->insert_id();
        $data1 = array(
            'user_id' => $insert_id,
            'firstname' => $postdata['fname'],
            'lastname'  => $postdata['lname'],
            'email'  => $postdata['email'],
            'mobile_number' => $postdata['mobileno'],
            'username' => $postdata['username']       
        );
                
        $this->db->insert('user_details', $data1);   
    }
    
    public function getAllUsers()
    {
        $query = $this->db->select('*')
                ->from('user_details')
                ->order_by('id', 'desc')
                ->get();
        return  $result = $query->result();
//        echo "<pre>";print_r($result);exit;
    }

}
