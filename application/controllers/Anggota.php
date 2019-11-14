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

    function tambah()
    {
        if ($_POST) {
            $data['anggota_nama'] = $this->input->post('anggota_nama');
            $data['anggota_divisi'] = $this->input->post('anggota_divisi');
            $this->db->insert('anggota', $data);
            redirect('anggota');
        } else {
            $data['title'] = 'Tambah anggota';
            $data['main'] = 'anggota/tambah';
            $this->load->view('layout', $data);
        }
    }

    function edit($anggota_id)
    {
        if($_POST){
            $data['anggota_nama'] = $this->input->post('anggota_nama');
            $data['anggota_divisi'] = $this->input->post('anggota_divisi');
            $this->db->update('anggota', $data, ['anggota_id' => $anggota_id]);
            redirect('anggota');
        } else{
            $data['anggota'] = $this->db->get_where('anggota', ['anggota_id' => $anggota_id])->row_array();
            $data['title'] = 'Edit';
            $data['main'] = 'anggota/edit';
            $this->load->view('layout', $data);
        }
    }

    function hapus($anggota_id)
    {
        $this->db->delete('anggota', ['anggota_id' => $anggota_id]);
        redirect('anggota');
    }
}

/* End of file Anggota.php */
