<?php

class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_login');
	}

	public function index()
	{
		$this->load->view('v_login');
	}

	public function aksi_login()
	{
		$username = $this->input->post('username', true);
		$password = $this->input->post('password', true);

		//validasi
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() != FALSE) {
			$where = array(
				'username' => $username,
				'password' => $password
			);

			$cekLogin = $this->M_login->cek_login($where)->num_rows();
			if ($cekLogin > 0) {

				$data_session = array(
					'user' => $username,
					'status' => 'login'
				);

				$this->session->set_userdata($data_session);
				redirect(base_url("kelola"));
			} else {
				$this->session->set_flashdata('message_login_error', 'Login Gagal, pastikan username dan passwrod benar!');
				redirect(base_url("login"));
			}
		} else {
			redirect(base_url("login"));
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
