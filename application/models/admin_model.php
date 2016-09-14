<?php

class Admin_model extends CI_Model {

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
    
    public function getUserById($id)
    {
        $query = $this->db->select('*')
                ->from('user_details')
                ->order_by('id', 'desc')
                ->get();
        return  $result = $query->row();
    }
    
    public function updateUser() {
        $postdata = $this->input->post();
        $data = array(
            'emailId' => $postdata['email']
        );
        
        $this->db->where('id', $postdata['id'])
                ->update('user', $data);
        
        $data1 = array(
            'firstname' => $postdata['fname'],
            'lastname'  => $postdata['lname'],
            'email'  => $postdata['email'],
            'mobile_number' => $postdata['mobileno'],
            'username' => $postdata['username']       
        );
                
        $this->db->where('user_id', $postdata['id'])
                ->update('user_details', $data1);
        
    }
    
    public function updateUserPassword() {
        $postdata = $this->input->post();
        $data = array(
            'password' => md5($postdata['password'])
        );
        
        $this->db->where('id', $postdata['id'])
                ->update('user', $data);
        
    }
    
    public function deleteUser($id) {
        $this->db->where('user_id', $id)
                    ->delete('user_details');
        $result = $this->db->where('id', $id)
                ->delete('user');
        if($result)
        {
            return TRUE;
        }
        else{
            return FALSE;
        }
    }

}
