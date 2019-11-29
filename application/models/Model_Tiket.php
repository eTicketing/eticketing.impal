<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Tiket extends CI_Model
{
    private $_table = "tiket";

    public $id_tiket;
    public $id_acara;
    public $id_customer;
    public $qr_code;
    public $jumlah;
    public $total_harga;
    public $status;

    public function rules()
    {
        return [
            ['field' => 'qr_code',
            'label' => 'QR_Code',
            'rules' => 'required'],

            ['field' => 'jumlah',
            'label' => 'Username',
            'rules' => 'numeric'],

            ['field' => 'total_harg',
            'label' => 'Total_Harga',
            'rules' => 'numeric'],

            ['field' => 'status',
            'label' => 'Jenis Kelamin',
            'rules' => 'required']
        ];
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_tiket" => $id])->row();
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getWhere($where)
    {
        return $this->db->get_where($this->_table, $where)->result();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_tiket = uniqid();
        $this->id_acara = $post["id_acara"];
        $this->id_customer = $post["id_customer"];
        $this->qr_code = $post["qr_code"];
        $this->jumlah = $post["jumlah"];
        $this->total_harga = $post["harga"]*$post["jumlah"];
        $this->status = $post["status"];
        $this->bukti_bayar = 'default.jpg';
        $this->db->insert($this->_table, $this);
    }
}