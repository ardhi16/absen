<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kehadiran extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('user_id') == null) redirect('auth/login');
        $this->load->model('Absen_model');
    }

    public function index()
    {
        $q = $this->input->get(NULL, TRUE);
        $data['q'] = $q;
        $params = [];
        if(isset($q['ds']) && $q['ds'] != ''){
            $params['DATE(kehadiran_tanggal) >='] = $q['ds'];
        }
        if(isset($q['de']) && $q['de'] != ''){
            $params['DATE(kehadiran_tanggal) <='] = $q['de'];
        }
        $data['kehadiran'] = $this->Absen_model->get($params)->result_array();
        $data['title'] = 'ABSEN';
        $data['main'] = 'kehadiran/index';
        $this->load->view('layout', $data);
    }
}

/* End of file Kehadiran.php */
