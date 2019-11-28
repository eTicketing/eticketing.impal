<?php

class Main extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model('model_user');
		$this->load->model('model_acara');
	}

	public function index()
	{
		// load view admin/overview.php
		if (!empty($this->session->userdata('status'))) {
			if ($this->session->userdata('level')=='admin') {
				redirect(site_url('admin/acara'));
			} elseif ($this->session->userdata('level')=='customer') {
				$data['acara'] = $this->model_acara->getAll();
				$this->load->view("main/lihatAcara", $data);
			}
		} else {
			$data['acara'] = $this->model_acara->getAll();
			$this->load->view("main/lihatAcara", $data);
		}
	}

	public function login()
	{
        // load view admin/overview.php
        $this->load->view("main/login");
	}

	public function logout()
	{
        // load view admin/overview.php
		$this->session->sess_destroy();
		redirect(site_url('main'));
	}

	public function tesSession()
	{
        // load view admin/overview.php
        $this->load->view("main/tesSession");
	}

	public function loginCheck(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->model_user->getWhere($where);
		if(!empty($cek)){
 
			$data_session = array(
				'id' => $cek->id_user,
				'username' => $cek->username,
				'level' => $cek->level,
				'status' => "login"
			);
 
			$this->session->set_userdata($data_session);
 
			redirect(site_url('main'));
		} else {
			redirect(site_url('main/main/login'));
		}
	}
}