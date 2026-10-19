<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Raport extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Cetak Raport Siswa';
        $data['siswa'] = $this->db->get('siswa')->result_array();
        $data['tahun_akademik'] = $this->db->get_where('tahun_akademik', ['semester_aktif' => 1])->row_array();
        $data['content'] = 'raport/index';
        $this->load->view('index', $data);
    }
}
/* End of file Raport.php */