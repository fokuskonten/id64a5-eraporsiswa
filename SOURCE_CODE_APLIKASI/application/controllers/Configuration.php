<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Configuration extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    
    public function academic_year()
    {
        $data['configuration'] = $data['academic_year'] = true;
        $data['tahun'] = $this->db->get('tahun_akademik')->result_array();
        $data['content'] = 'config/academic_year';
        $this->load->view('index', $data);
    }

    public function date_print()
    {
        $data['configuration'] = $data['date_print'] = true;
        $data['content'] = 'config/date_print';
        $this->load->view('index', $data);
    }

}

/* End of file Configuration.php */