<?php
class Login extends CI_Controller {
    
    function __construct(){
        parent::__construct();
        $this->load->helper('url');//memanggil helper url
        $this->load->model('admin/M_user');//memanggil model beranda
        $this->load->helper('tgl_indo');//memanggil helper tgl
    }

    public function index() { 
        $data['sbr'] = $this->M_lembaga->sbr()->row();//mendeklarasi dan memberi data sbr dari model
        $this->load->view('admin/v_login'); 
    } 

    public function proses_login() { 
        $username = $this->input->post('username'); 
        $password = $this->input->post('password'); 

        $login = $this->M_user->cek_user($username, $password); 

        if (!empty($login)) { 
            // login berhasil 
            $data_session = array(
                'username' => $username,
                'status' => "login"
            );
            $this->session->set_userdata($data_session);
            redirect(base_url()); 
        } else { 
            // login gagal 
            $this->session->set_flashdata('gagal', 'Username atau Password Salah!'); 
            
            redirect(base_url('index.php/Login')); 
        } 
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(site_url('Login'));
    }
}