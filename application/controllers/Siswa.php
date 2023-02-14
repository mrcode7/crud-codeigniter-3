<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Siswa_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Siswa';
        $data['siswa'] = $this->Siswa_model->get_data('tbl_siswa')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('siswa', $data);
        $this->load->view('templates/footer');
    }

}
?>