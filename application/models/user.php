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
        $result = $query->result();
        $result = $result[0];
        $mdString = base64_encode($result->emailId.  time());
        $data = array('resetpasswordlink' => $mdString);
        $this->db->update('user', $data, 'id = '.$result->id);
        
        if($count == 1){
//            $this->email->to($emailId);
//            $this->email->from('dokku.premchand@gmail.com');
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
}
?>
