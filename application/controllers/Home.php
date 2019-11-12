<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('user_id') == null) redirect('auth/login'); 
    }
    

    public function index()
    {
        $data['title'] = 'Home';
        $data['main'] = 'home/index';
        $this->load->view('layout', $data);
    }

}

/* End of file Home.php */
