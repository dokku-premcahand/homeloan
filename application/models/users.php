<?php
  class Users extends CI_Model {

      function __construct()
      {
          parent::__construct();
      }

      public function authenticate($postData)
      {
          $password  = md5($postData['password']);
          $this->db->select('*');
          $this->db->from('user');
          $this->db->where('emailId', $postData['emailId']);
          $this->db->where('password', $password);
          $query = $this->db->get();
          $result['count'] = $query->num_rows();
          $temp = $query->result();
          $result['data'] = $temp[0];
          return $result;
      }

      public function forgotPassword($emailId='')
      {
          $this->db->select('*');
          $this->db->from('user');
          $this->db->where('emailId', $emailId);
          $query = $this->db->get();
          $count = $query->num_rows();

          if($count == 1){
            $this->email->to($emailId);
            $this->email->from('dokku.premchand@gmail.com');
            $this->email->subject('Test email');
            $this->email->message('Hi this is a test email.');
            $mailResponce  = $this->email->send();
          }
          return $count;
      }
      
      public function getUser()
      {
        $data = $this->db->select('*')
                ->from('user_details')
                ->where('user_id', 1)
                ->get()
                ->row();
        return $data;
          
      }
      
      public function updateUser()
      {
          $post = $this->input->post();
//          echo "<pre>";
//          print_r($post);exit;
          $data = array(
              'username' => $post['username'],
              'firstname' => $post['firstname'],
              'lastname'  => $post['lastname'],
              'email'     => $post['email'],
              'mobile_number' => $post['mobile_number'],
              'state' => $post['state'],
              'city' => $post['city'],
              'address' => $post['address'],
              'zipcode' => $post['zipcode'],
              'account_type' => $post['account']
          );
          
          $this->db->update('user_details',$data);
          if(!empty($post['password']))
          {
              $data = array(
                  'password' => md5($post['password']),
                  'emailId'    => $post['email']
              );
              $this->db->update('user',$data);
          }else{
               $data = array(
                  'emailId'    => $post['email']
              );
              $this->db->update('user',$data);
          }

      }
  }