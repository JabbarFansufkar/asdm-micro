<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

	
	function __construct(){
		parent::__construct();
		$this->load->model('UserModel');
	}

	public function index()
	{
		if($this->session->userdata('fullname')!='' && $this->session->userdata('user_role')=='admin'){
			$user_id = $this->session->userdata('user_id');
			$data['page_title'] = "Dashboard Page";
			$data['user_data'] = $this->AdminModel->user_data($user_id);
			$this->load->view('admin-view/dashboard',$data);
		}else{
			redirect('login','refresh');
		}
	}
	
}
