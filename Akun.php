<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Model
{
    private $_table = "akun";

    public $id_akun;
    public $nik;
    public $nama;
    public $email;
    public $no_hp;
    public $password;
    public $level;

    public function rules() {
        return [
            ['field' => 'nik',
            'label' => 'NIK',
            'rules' => 'required'],

            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],
            
            ['field' => 'email',
            'label' => 'Email',
            'rules' => 'required'],

            ['field' => 'no_hp',
            'label' => 'No HP',
            'rules' => 'numeric'],

            ['field' => 'password',
            'label' => 'Password',
            'rules' => 'required'],

            ['field' => 'level',
            'label' => 'Level',
            'rules' => 'required']
        ];
    }

    public function getAll() {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id) {
        return $this->db->get_where($this->_table, ["id_akun" => $id])->row();
    }

    public function save() {
        $post = $this->input->post();
        $this->id_akun = uniqid();
        $this->nik = $post["nik"];
        $this->nama = $post["nama"];
        $this->email = $post["email"];
        $this->no_hp = $post["no_hp"];
        $this->password = $post["password"];
        $this->level = $post["level"];
        $this->db->insert($this->_table, $this);
    }

    public function update() {
        $post = $this->input->post();
        $this->id_akun = $post["id_akun"];
        $this->nik = $post["nik"];
        $this->nama = $post["nama"];
        $this->email = $post["email"];
        $this->no_hp = $post["no_hp"];
        $this->password = $post["password"];
        $this->level = $post["level"];
        $this->db->update($this->_table, $this, array('id_akun' => $post['id_akun']));
    }

    public function delete($id) {
        return $this->db->delete($this->_table, array("id_akun" => $id));
    }
}