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
        $result = $query->result();
        $result = $result[0];
        $mdString = base64_encode($result->emailId.  time());
        $data = array('resetpasswordlink' => $mdString);
        $this->db->update('user', $data, 'id = '.$result->id);
        
        if($count == 1){
//            $this->email->to($emailId);
//            $this->email->from('');
//            $this->email->subject('Forgot password reset link');
//            $this->email->message(base_url('index/resetPassword'.$mdString));
//            $mailResponce  = $this->email->send();
        }
        return $count;
      }
    
    public function validateResetPasswordLink($resetPasswordLink){
        $this->db->select('resetpasswordlink');
        $this->db->from('user');
        $this->db->where('resetpasswordlink', $resetPasswordLink);
        $query = $this->db->get();
        $count = $query->num_rows();
        $result = $query->result();
        $result = $result[0];
        if($count == 1){
            return $result;
        }else{
            return $result;
        }
    }
    
    public function setnewpassword($post){
        $data['password'] = md5($post['password']);
        $responce = $this->db->update('user',$data,'resetpasswordlink LIKE "'.$post['resetpasswordlink'].'"');
        if($responce == 1){
            $data = array();
            $data['resetpasswordlink'] = '';
            $this->db->update('user', $data, 'resetpasswordlink = "'.$post['resetpasswordlink'].'"');
        }
        return $responce;
    }
      
    public function getUser()
    {
        $data = $this->db->select('*')->from('user_details')->where('user_id', 1) ->get()->row();
        return $data;
    }
      
    public function updateUser()
    {
        $post = $this->input->post();
//          echo "<pre>";print_r($post);exit;
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
    
    public function getloanOpportunit($offset = 0){
        $data['data'] = $this->db->select('*')->from('loan_opportunity')->limit(limit,$offset)->get()->result();
        $data['totalRows'] = $this->db->select('*')->from('loan_opportunity')->get()->num_rows();
        return $data;
    }
    
    public function loanOpportunityDetails($loanOpportunityDetails){
        $data = $this->db->select('*')->from('loan_opportunity')
                        ->where('id',$loanOpportunityDetails)->get()->row();
        return $data;
    }
    
    public function myLoanList(){
//        $data = ;
//        return $data;
    }
  }