<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Absen extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Absen_model');
    }


    public function index()
    {
        if ($_POST) {
            $data['anggota_id'] = $this->input->post('anggota_id');
            $data['piket_id'] = $this->input->post('piket_id');
            $data['kehadiran_tanggal'] = date('Y-m-d H:i:s');
            $params = [];
            $params['DATE(kehadiran_tanggal)'] = date('Y-m-d');
            $params['kehadiran.anggota_id'] = $this->input->post('anggota_id');
            $kehadiran = $this->Absen_model->get($params)->row_array();
            if (isset($kehadiran)) {
                $this->session->set_flashdata('gagal', 'Anda sudah absen hari ini!');
                redirect('absen');
            } else {
                $this->session->set_flashdata('berhasil', 'Anda Telah absen');
                $this->db->insert('kehadiran', $data);
                redirect('absen');
            }
        } else {
            $params = [];
            $params['DATE(kehadiran_tanggal)'] = date('Y-m-d');
            $data['anggota'] = $this->db->order_by('anggota_nama', 'asc')->get('anggota')->result_array();
            $data['piket'] = $this->db->order_by('piket_jenis', 'asc')->get('piket')->result_array();
            $data['kehadiran'] = $this->Absen_model->get($params)->result_array();
            $data['title'] = 'ABSEN';
            $this->load->view('absen', $data);
        }
    }
}

/* End of file Auth.php */
