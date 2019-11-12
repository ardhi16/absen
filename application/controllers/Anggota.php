<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('user_id') == null) redirect('auth/login');
        $this->load->model('Anggota_model');
    }

    public function index()
    {
        $data['anggota'] = $this->db->order_by('anggota_nama', 'asc')->get('anggota')->result_array();
        $params = [];
        $params['DATE(kehadiran_tanggal)'] = date('Y-m-d');
        $params['kehadiran.anggota_id'] = $this->input->post('anggota_id');
        $anggota = $this->Anggota_model->get($params)->row_array();
        $data['title'] = 'Anggota';
        $data['main'] = 'anggota/index';
        $this->load->view('layout', $data);
    }
}

/* End of file Anggota.php */
