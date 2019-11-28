<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tiket extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("model_tiket");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $id = array(
            'id_admin' => $this->session->userdata('id')
        );
        $data["acara"] = $this->model_acara->getWhereMultiple($id);
        $this->load->view("admin/acara/list", $data);
    }

    public function add()
    {
        $acara = $this->model_acara;
        $validation = $this->form_validation;
        $validation->set_rules($acara->rules());
        
        if ($validation->run()) {
            $acara->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/acara/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/acara');
       
        $acara = $this->model_acara;
        $validation = $this->form_validation;
        $validation->set_rules($acara->rules());

        if ($validation->run()) {
            $acara->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["acara"] = $acara->getById($id);
        if (!$data["acara"]) show_404();
        
        $this->load->view("admin/acara/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->model_acara->delete($id)) {
            redirect(site_url('admin/acara'));
        }
    }
}