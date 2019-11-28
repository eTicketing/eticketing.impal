<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Model_User extends CI_Model
{
    private $_table = "user";

    public $id_user;
    public $nama;
    public $username;
    public $jenis_kelamin;
    public $email;
    public $no_hp;
    public $password;
    public $level;

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'Username',
            'rules' => 'required'],

            ['field' => 'username',
            'label' => 'Username',
            'rules' => 'required'],

            ['field' => 'nomor_kartu',
            'label' => 'Nomor_Kartu',
            'rules' => 'required'],

            ['field' => 'jenis_kelamin',
            'label' => 'Jenis Kelamin',
            'rules' => 'required'],

            ['field' => 'email',
            'label' => 'Email',
            'rules' => 'required'],
            
            ['field' => 'no_hp',
            'label' => 'No_hp',
            'rules' => 'numeric'],

            ['field' => 'password',
            'label' => 'Password',
            'rules' => 'required'],

            ['field' => 'level',
            'label' => 'Level',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getWhere($where)
    {
        return $this->db->get_where($this->_table, $where)->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_user = uniqid();
        $this->nama = $post["nama"];
        $this->username = $post["username"];
        $this->nomor_kartu = $post["nomor_kartu"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->email = $post["email"];
        $this->no_hp = $post["no_hp"];
        $this->password = md5($post["password"]);
        if ($post["level"]=="Pembeli") {
            $this->level = "customer";
        } else if ($post["level"]=="Penjual") {
            $this->level = "admin";
        }
        $this->db->insert($this->_table, $this);
    }
}