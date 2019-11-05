<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerAcara extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("acara");
        $this->load->library('form_validation');
    }

    public function index() {
        if ($this->session->userdata('id_akun') == null) {
            redirect('ControllerMain');
        } else {
            $id = $this->session->userdata('id_akun') == null;
            $data["acara"] = $this->acara->getByIdAdmin($id);
            $this->load->view("acara/v_lihatAcara", $data);
        }
    }

    public function add()
    {
        $acara = $this->acara;
        $validation = $this->form_validation;
        $validation->set_rules($acara->rules());

        if ($validation->run()) {
            $acara->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("acara/v_inputAcara");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('ControllerAcara');
       
        $acara = $this->acara;
        $validation = $this->form_validation;
        $validation->set_rules($acara->rules());

        if ($validation->run()) {
            $acara->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["acara"] = $product->getByIdAcara($id);
        if (!$data["acara"]) show_404();
        
        $this->load->view("acara/v_updateAcara", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->acara->delete($id)) {
            redirect(site_url('ControllerAcara'));
        }
    }
}