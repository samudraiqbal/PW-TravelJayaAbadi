<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}

	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE)
		{
			redirect(base_url('dashboard'));
		} else {
			$this->load->view('login_view');
		}
	}

	public function masuk()
	{
		if($this->input->post("submit"))
		{
			if($this->login_model->cek_user() == TRUE){
				redirect(base_url('dashboard'));
			} else {
				$data['notif'] = 'Login Gagal';
				$this->load->view('login_view', $data);
			}
		}
	}

	public function keluar()
	{
		$data = array(
				'username' 	=> '',
				'logged_in'	=> FALSE
			);

		$this->session->sess_destroy();
		redirect('login');

	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */