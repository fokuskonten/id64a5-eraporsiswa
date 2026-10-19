<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function ngajar()
    {
        $data['title'] = 'Penugasan Mengajar Guru';
        $this->db->select('mengajar.*, guru.guru_nama, guru.guru_nip, mapel.mapel_nama, tahun_akademik.tahun_akademik, tahun_akademik.semester');
        $this->db->from('mengajar');
        $this->db->join('guru', 'guru.idguru = mengajar.guru_idguru');
        $this->db->join('mapel', 'mapel.idmapel = mengajar.mapel_idmapel');
        $this->db->join('tahun_akademik', 'tahun_akademik.idtahun_akademik = mengajar.tahun_akademik_idtahun_akademik');
        $data['mengajar'] = $this->db->get()->result_array();
        $data['content'] = 'setting/ngajar';
        $this->load->view('index', $data);
    }

    public function kelas()
    {
        $data['title'] = 'Pengaturan Kelas';
        $data['kelas'] = $this->db->get('kelas')->result_array();
        $data['content'] = 'masterdata/kelas';
        $this->load->view('index', $data);
    }

    public function wali_kelas()
    {
        $data['title'] = 'Pengaturan Wali Kelas & Rombel';
        $this->db->select('rombel.*, guru.guru_nama, kelas.kelas_nama, siswa.siswa_nama, tahun_akademik.tahun_akademik');
        $this->db->from('rombel');
        $this->db->join('guru', 'guru.idguru = rombel.guru_idguru');
        $this->db->join('kelas', 'kelas.idkelas = rombel.kelas_idkelas');
        $this->db->join('siswa', 'siswa.idsiswa = rombel.siswa_idsiswa');
        $this->db->join('tahun_akademik', 'tahun_akademik.idtahun_akademik = rombel.tahun_akademik_idtahun_akademik');
        $data['rombel'] = $this->db->get()->result_array();
        $data['content'] = 'setting/wali_kelas';
        $this->load->view('index', $data);
    }
}
/* End of file Setting.php */