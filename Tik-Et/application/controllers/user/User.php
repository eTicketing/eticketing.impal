<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("model_user");
        $this->load->library('form_validation');
    }

    public function registrasi()
    {
        $userData = $this->model_user;
        $validation = $this->form_validation;
        $validation->set_rules($userData->rules());

        if ($validation->run()) {
            $userData->save();
            redirect(site_url('main'));
        }

        $this->load->view("main/registrasi");
    }

    // public function edit($id = null)
    // {
    //     if (!isset($id)) redirect('admin/products');
       
    //     $product = $this->product_model;
    //     $validation = $this->form_validation;
    //     $validation->set_rules($product->rules());

    //     if ($validation->run()) {
    //         $product->update();
    //         $this->session->set_flashdata('success', 'Berhasil disimpan');
    //     }

    //     $data["product"] = $product->getById($id);
    //     if (!$data["product"]) show_404();
        
    //     $this->load->view("admin/product/edit_form", $data);
    // }

    // public function delete($id=null)
    // {
    //     if (!isset($id)) show_404();
        
    //     if ($this->product_model->delete($id)) {
    //         redirect(site_url('admin/products'));
    //     }
    // }
}