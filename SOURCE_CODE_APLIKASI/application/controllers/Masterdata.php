<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masterdata extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function guru()
    {
        $data['title'] = 'Data Master Guru';
        $data['guru'] = $this->db->get('guru')->result_array();
        $data['content'] = 'masterdata/guru';
        $this->load->view('index', $data);
    }

    public function siswa()
    {
        $data['title'] = 'Data Master Siswa';
        $data['siswa'] = $this->db->get('siswa')->result_array();
        $data['content'] = 'masterdata/siswa';
        $this->load->view('index', $data);
    }

    public function kelas()
    {
        $data['title'] = 'Data Master Kelas';
        $data['kelas'] = $this->db->get('kelas')->result_array();
        $data['content'] = 'masterdata/kelas';
        $this->load->view('index', $data);
    }

    public function mapel()
    {
        $data['title'] = 'Data Master Mata Pelajaran';
        $data['mapel'] = $this->db->get('mapel')->result_array();
        $data['content'] = 'masterdata/mapel';
        $this->load->view('index', $data);
    }

    public function user()
    {
        $data['title'] = 'Data Master Pengguna';
        $data['users'] = $this->db->get('users')->result_array();
        $data['content'] = 'masterdata/user';
        $this->load->view('index', $data);
    }
}
/* End of file Masterdata.php */