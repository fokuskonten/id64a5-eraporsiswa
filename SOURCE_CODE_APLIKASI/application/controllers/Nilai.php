<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Input & Rekapitulasi Nilai Siswa';
        $this->db->select('nilai.*, siswa.siswa_nama, siswa.siswa_nisn, mapel.mapel_nama');
        $this->db->from('nilai');
        $this->db->join('siswa', 'siswa.idsiswa = nilai.siswa_idsiswa');
        $this->db->join('mapel', 'mapel.idmapel = nilai.mapel_idmapel');
        $data['nilai'] = $this->db->get()->result_array();
        $data['content'] = 'nilai/index';
        $this->load->view('index', $data);
    }
}
/* End of file Nilai.php */