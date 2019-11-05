<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Acara extends CI_Model
{
    private $_table = "acara";

    public $id_acara;
    public $id_admin;
    public $nama_acara;
    public $jenis_acara;
    public $tanggal_acara;
    public $tempat_acara;
    public $jumlah_tiket;
    public $harga_tiket;

    public function rules() {
        return [
            ['field' => 'nama_acara',
            'label' => 'Nama Acara',
            'rules' => 'required'],

            ['field' => 'jenis_acara',
            'label' => 'Jenis Acara',
            'rules' => 'required'],
            
            ['field' => 'tanggal_acara',
            'label' => 'Tanggal Acara',
            'rules' => 'required'],

            ['field' => 'tempat_acara',
            'label' => 'Tempat Acara',
            'rules' => 'required'],

            ['field' => 'jumlah_tiket',
            'label' => 'Jumlah Tiket',
            'rules' => 'required'],

            ['field' => 'harga_tiket',
            'label' => 'Harga Tiket',
            'rules' => 'required']
        ];
    }

    public function getAll() {
        return $this->db->get($this->_table)->result();
    }

    public function getByIdAcara($id) {
        return $this->db->get_where($this->_table, ["id_acara" => $id])->row();
    }

    public function getByIdAdmin($id) {
        return $this->db->get_where($this->_table, ["id_admin" => $id])->result();
    }

    public function save() {
        $post = $this->input->post();
        $this->id_acara = uniqid();
        $this->id_admin = $post["id_admin"];
        $this->nama_acara = $post["nama_acara"];
        $this->jenis_acara = $post["jenis_acara"];
        $this->tanggal_acara = $post["tanggal_acara"];
        $this->tempat_acara = $post["tempat_acara"];
        $this->jumlah_tiket = $post["jumlah_tiket"];
        $this->harga_tiket = $post["harga_tiket"];
        $this->db->insert($this->_table, $this);
    }

    public function update() {
        $post = $this->input->post();
        $this->id_acara = $post["id_acara"];
        $this->id_admin = $post["id_admin"];
        $this->nama_acara = $post["nama_acara"];
        $this->jenis_acara = $post["jenis_acara"];
        $this->tanggal_acara = $post["tanggal_acara"];
        $this->tempat_acara = $post["tempat_acara"];
        $this->jumlah_tiket = $post["jumlah_tiket"];
        $this->harga_tiket = $post["harga_tiket"];
        $this->db->update($this->_table, $this, array('id_acara' => $post['id_acara']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_acara" => $id));
    }
}