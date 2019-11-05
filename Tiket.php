<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tiket extends CI_Model
{
    private $_table = "tiket";

    public $id_tiket;
    public $id_acara;
    public $id_customer;
    public $jumlah;
    public $total_harga;
    public $status_pembayaran;

    public function rules() {
        return [
            ['field' => 'jumlah',
            'label' => 'Jumlah',
            'rules' => 'numeric']
        ];
    }

    public function getAll() {
        return $this->db->get($this->_table)->result();
    }
    
    public function getByIdTiket($id) {
        return $this->db->get_where($this->_table, ["id_tiket" => $id])->row();
    }

    public function getByIdAcara($id) {
        return $this->db->get_where($this->_table, ["id_acara" => $id])->result();
    }

    public function getByIdCustomer($id) {
        return $this->db->get_where($this->_table, ["id_customer" => $id])->result();
    }

    public function save() {
        $post = $this->input->post();
        $this->id_tiket = uniqid();
        $this->id_acara = $post["id_acara"];
        $this->id_customer = $post["id_customer"];
        $this->jumlah = $post["jumlah"];
        $this->total_harga = $post["total_harga"];
        $this->status_pembayaran = $post["status_pembayaran"];
        $this->db->insert($this->_table, $this);
    }

    public function update() {
        $post = $this->input->post();
        $this->id_tiket = $post["id_tiket"];
        $this->id_acara = $post["id_acara"];
        $this->id_customer = $post["id_customer"];
        $this->jumlah = $post["jumlah"];
        $this->total_harga = $post["total_harga"];
        $this->status_pembayaran = $post["status_pembayaran"];
        $this->db->update($this->_table, $this, array('id_tiket' => $post['id_tiket']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_tiket" => $id));
    }
}