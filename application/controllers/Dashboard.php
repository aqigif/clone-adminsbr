<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	function __construct(){
		parent::__construct();
        $this->load->helper('url');//memanggil helper url
        $this->load->model('M_lembaga');//memanggil helper tgl
        $this->load->helper('tgl_indo');//memanggil helper tgl
	}

	public function index(){
		if($this->session->userdata('status') != "login"){
			redirect(site_url("Login"));
		}
		$data['sbr'] = $this->M_lembaga->sbr()->row();//mendeklarasi dan memberi data sbr dari model

		$this->load->view('admin/v_dashboard',$data);
	}
}
