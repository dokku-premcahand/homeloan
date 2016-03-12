<?php
  class user extends CI_Model {

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
  }
?>
