<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Absen_model extends CI_Model {

    function get($params=null)
    {
        $this->db->join('anggota', 'anggota.anggota_id = kehadiran.anggota_id', 'left');
        $this->db->join('piket', 'piket.piket_id = kehadiran.piket_id', 'left');
        return $this->db->get_where('kehadiran', $params) ;
    }

}

/* End of file Absen_model.php */
