<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('User_m','m');
	}

	public function index()
	{
		$data['dashboard'] = true;
		$data['jml_guru'] = $this->db->count_all('guru');
		$data['jml_siswa'] = $this->db->count_all('siswa');
		$data['jml_kelas'] = $this->db->count_all('kelas');
		$data['jml_user'] = $this->db->count_all('users');
		$data['tahun_aktif'] = $this->db->get_where('tahun_akademik', ['semester_aktif' => 1])->row_array();
		$data['content'] = 'dashboard';
		$this->load->view('index', $data);
	}

	public function user_profile()
	{
		$id = _toInteger(dec_url($this->uri->segment(3)));
		$data['title'] = 'User Profile';
		$data['profil'] = $this->m->getUserById($id);
		$data['content'] = 'backend/user_profile';
		$this->load->view('index', $data);
	}

}

/* End of file Dashboard.php */