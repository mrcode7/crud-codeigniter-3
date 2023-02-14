<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

    public function index()
    {
        $data['title'] = 'Siswa';
        $this->load->view('templates/header' , $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('siswa');
        $this->load->view('templates/footer');
    }

}
?>