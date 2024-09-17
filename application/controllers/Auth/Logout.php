<?php
class Logout extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if ($this->session->userdata('role_id') == 1) {
			session_destroy();
			redirect('administrator/login', 'refresh');
		}
		if ($this->session->userdata('role_id') == 2) {
			session_destroy();
			redirect('administrator/login', 'refresh');
		}
		if ($this->session->userdata('role_id') == 3) {
			session_destroy();
			redirect('user/login', 'refresh');
		}
	}
}
