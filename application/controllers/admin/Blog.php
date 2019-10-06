<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("admin/M_blog");
        $this->load->library('form_validation');
        $this->load->helper('tgl_indo');//memanggil helper tgl
    }

    public function index()
    {
        if($this->session->userdata('status') != "login"){
            redirect(site_url("Login"));
        }
        $data["blogs"] = $this->M_blog->getAll();
        $this->load->view("admin/blog/list", $data);
    }

    public function add()
    {
        $blog = $this->M_blog;
        $validation = $this->form_validation;
        $validation->set_rules($blog->rules());

        if ($validation->run()) {
            $blog->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/blog/new_form");
    }

    public function edit($id)
    {
        if (!isset($id)) redirect('admin/Blog');
       
        $blog = $this->M_blog;
        $validation = $this->form_validation;
        $validation->set_rules($blog->rules());

        if ($validation->run()) {
            $blog->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["blog"] = $blog->getById($id);
        if (!$data["blog"]) show_404();
        
        $this->load->view("admin/blog/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->M_blog->delete($id)) {
            redirect(site_url('admin/Blog'));
        }
    }
    

  }