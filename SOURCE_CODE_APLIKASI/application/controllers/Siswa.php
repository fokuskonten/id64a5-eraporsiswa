<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Data Siswa Aktif';
        $data['siswa'] = $this->db->get('siswa')->result_array();
        $data['content'] = 'masterdata/siswa';
        $this->load->view('index', $data);
    }
}
/* End of file Siswa.php */