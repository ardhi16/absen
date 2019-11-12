<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Piket extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('user_id') == null) redirect('auth/login');
    }

    public function index()
    {
        $data['piket'] = $this->db->order_by('piket_jenis', 'asc')->get('piket')->result_array();
        $data['title'] = 'Piket';
        $data['main'] = 'piket/index';
        $this->load->view('layout', $data);
    }

    function tambah()
    {
        if ($_POST) {
            $data['piket_jenis'] = $this->input->post('piket_jenis');
            $this->db->insert('piket', $data);
            redirect('piket');
        } else {
            $data['title'] = 'Tambah Jenis Piket';
            $data['main'] = 'piket/tambah';
            $this->load->view('layout', $data);
        }
    }

    function hapus($piket_id)
    {
        $this->db->delete('piket', ['piket_id' => $piket_id]);
        redirect('piket');
    }

    function edit($piket_id)
    {
        if($_POST){
            $data['piket_jenis'] = $this->input->post('piket_jenis');
            $this->db->update('piket', $data, ['piket_id' => $piket_id]);
            redirect('piket');
        } else{
            $data['piket'] = $this->db->get_where('piket', ['piket_id' => $piket_id])->row_array();
            $data['title'] = 'Edit';
            $data['main'] = 'piket/edit';
            $this->load->view('layout', $data);
        }
       
    }
}

/* End of file Piket.php */
