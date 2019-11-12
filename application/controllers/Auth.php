<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function index()
    {
      redirect('auth/login');
    }

    function login()
    {
        if($this->session->userdata('user_id') != null) redirect('home');
        if($_POST){
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $cek = $this->db->get_where('user', ['username' => $username])->row_array();
            if(isset($cek) && password_verify($password, $cek['password'])){
                $session['user_id'] = $cek['user_id'];
                $session['username'] = $cek['username'];
                $this->session->set_userdata($session);
                redirect('home');
            }else{
                redirect('auth/login');
            }
                
        } else{
            $data['title'] = 'Login';
            $this->load->view('login', $data);
        }
           
        
    }

    function logout()
    {
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('username');
        redirect('auth/login');
    }


}

/* End of file Auth.php */
