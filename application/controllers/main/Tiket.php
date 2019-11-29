<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tiket extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("model_tiket");
        $this->load->model("model_acara");
        $this->load->library('form_validation');
    }

    public function detail_tiket($id) {
		
    }
    
    public function pesanan($id) {
        $where = array(
            'id_customer' => $id
        );
        $data['tiket']=$this->model_tiket->getWhere($where);
        $this->load->view('main/pesanan', $data);
    }

    public function add($id)
    {
        if (!empty($this->session->userdata('id'))) {
            $tiket = $this->model_tiket;
            $validation = $this->form_validation;
            $validation->set_rules($tiket->rules());
            
            if ($validation->run()) {
                $tiket->save($id);
                $data['tiket']=$tiket->getAll();
                redirect(site_url('main/main/pesanan/', $data));
            }

            $data['acara'] = $this->model_acara->getById($id);
            if (!$data["acara"]) show_404();
            $this->load->view("main/beliTiket", $data);
        } else {
            redirect(site_url('main/main/login'));
        }
        
    }

    // public function edit($id = null)
    // {
    //     if (!isset($id)) redirect('admin/acara');
       
    //     $acara = $this->model_acara;
    //     $validation = $this->form_validation;
    //     $validation->set_rules($acara->rules());

    //     if ($validation->run()) {
    //         $acara->update();
    //         $this->session->set_flashdata('success', 'Berhasil disimpan');
    //     }

    //     $data["acara"] = $acara->getById($id);
    //     if (!$data["acara"]) show_404();
        
    //     $this->load->view("admin/acara/edit_form", $data);
    // }

    // public function delete($id=null)
    // {
    //     if (!isset($id)) show_404();
        
    //     if ($this->model_acara->delete($id)) {
    //         redirect(site_url('admin/acara'));
    //     }
    // }
}