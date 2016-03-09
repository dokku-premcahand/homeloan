<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

		public function __construct() {
				parent::__construct();
		}

		public function index()
		{
				$this->load->view('index');
		}

		public function login()
		{
				$this->load->view('login');
		}

		public function authenticate()
		{
				$post = $this->input->post();
				$this->load->model('user');
				$result = $this->user->authenticate($post);

				if($result['count'] == 1){
						$sessionData = array('id'=>$result['data']->id,'emailId'=>$result['data']->emailId);
						$this->session->set_userdata($sessionData);
						header('Location:'.base_url('home/index'));
				}else{
						header('Location:'.base_url('index/login'));
				}
		}

		public function logout()
		{
				$this->session->sess_destroy();
				header('Location:'.base_url('index/login'));
		}
}
