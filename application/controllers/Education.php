<?php
defined('BASEPATH') or exit('No direct script access allowed');

class  Education extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Lowongan Pekerjaan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('education/index', $data);
        $this->load->view('templates/footer');
    }
}
