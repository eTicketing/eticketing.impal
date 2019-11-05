<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerTiket extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("tiket");
        $this->load->library('form_validation');
    }

    public function index() {
        $id = $this->session->userdata('id_akun')
        $data["tiket"] = $this->tiket->getByIdCustomer($id);
        $this->load->view("tiket/v_lihatPesanan", $data);
    }

    public function tiketAdmin() {
        $id = $this->session->userdata('id_akun')
        $data["tiket"] = $this->tiket->getByIdAdmin($id);
        $this->load->view("tiket/v_lihatTiketAdmin", $data);
    }

    public function tiketAcara($id) {
        $data["tiket"] = $this->tiket->getByIdAcara($id);
        $this->load->view("tiket/v_lihatTiketAdmin", $data);
    }

    public function add()
    {
        $tiket = $this->tiket;
        $validation = $this->form_validation;
        $validation->set_rules($tiket->rules());

        if ($validation->run()) {
            $tiket->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("tiket/v_pemesanan");
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->tiket->delete($id)) {
            redirect(site_url('ControllerTiket'));
        }
    }
}