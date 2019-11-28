<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Acara extends CI_Model
{
    private $_table = "acara";

    public $id_acara;
    public $id_admin;
    public $nama_acara;
    public $tempat;
    public $tanggal;
    public $gambar = "default.jpg";
    public $deskripsi;
    public $harga;
    public $jumlah;

    public function rules()
    {
        return [
            ['field' => 'nama_acara',
            'label' => 'Nama Acara',
            'rules' => 'required'],

            ['field' => 'tempat',
            'label' => 'Tempat',
            'rules' => 'required'],

            ['field' => 'tanggal',
            'label' => 'Tanggal',
            'rules' => 'required'],

            ['field' => 'deskripsi',
            'label' => 'Deskripsi',
            'rules' => 'required'],

            ['field' => 'harga',
            'label' => 'Harga',
            'rules' => 'numeric'],

            ['field' => 'jumlah',
            'label' => 'Jumlah',
            'rules' => 'numeric']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_acara" => $id])->row();
    }

    public function getWhere($where)
    {
        return $this->db->get_where($this->_table, $where)->row();
    }
    
    public function getWhereMultiple($where)
    {
        return $this->db->get_where($this->_table, $where)->result();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_acara = uniqid();
        $this->id_admin = $this->session->userdata('id');
        $this->nama_acara = $post["nama_acara"];
        $this->tempat = $post["tempat"];
        $this->tanggal = $post["tanggal"];
        $this->gambar = $this->_uploadImage();
        $this->deskripsi = $post["deskripsi"];
        $this->harga = $post["harga"];
        $this->jumlah = $post["jumlah"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_acara = $post["id_acara"];
        $this->id_admin = $post["id_admin"];
        $this->nama_acara = $post["nama_acara"];
        $this->tempat = $post["tempat"];
        $this->tanggal = $post["tanggal"];
        if (!empty($_FILES["gambar"]["name"])) {
            $this->gambar = $this->_uploadImage();
        } else {
            $this->gambar = $post["old_image"];
        }
        $this->deskripsi = $post["deskripsi"];
        $this->harga = $post["harga"];
        $this->jumlah = $post["jumlah"];
        $this->db->update($this->_table, $this, array('id_acara' => $post['id_acara']));
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id_acara" => $id));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './upload/acara/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->id_acara;
        $config['overwrite']			= true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            return $this->upload->data("file_name");
        }
        
        return "default.jpg";
    }

    private function _deleteImage($id)
    {
        $acara = $this->getById($id);
        if ($acara->gambar != "default.jpg") {
            $filename = explode(".", $acara->gambar)[0];
            return array_map('unlink', glob(FCPATH."upload/acara/$filename.*"));
        }
    }
}