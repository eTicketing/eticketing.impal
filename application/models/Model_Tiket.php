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

        $this->load->library('ciqrcode'); //pemanggilan library QR CODE
 
        $config['cacheable']    = true; //boolean, the default is true
        $config['cachedir']     = './upload/tiket'; //string, the default is application/cache/
        $config['errorlog']     = './upload/tiket'; //string, the default is application/logs/
        $config['imagedir']     = './upload/tiket/qr_code/'; //direktori penyimpanan qr code
        $config['quality']      = true; //boolean, the default is true
        $config['size']         = '1024'; //interger, the default is 1024
        $config['black']        = array(224,255,255); // array, default is array(255,255,255)
        $config['white']        = array(70,130,180); // array, default is array(0,0,0)
        $this->ciqrcode->initialize($config);
 
        $image_name=$id_tiket.'.png'; //buat name dari qr code sesuai dengan nim
 
        $params['data'] = $id_tiket; //data yang akan di jadikan QR CODE
        $params['level'] = 'H'; //H=High
        $params['size'] = 10;
        $params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
        $this->ciqrcode->generate($params);

        $this->qr_code = $post["qr_code"];
        $this->jumlah = $post["jumlah"];
        $this->total_harga = $post["harga"]*$post["jumlah"];
        $this->status = $post["status"];
        $this->bukti_bayar = 'default.jpg';
        $this->db->insert($this->_table, $this);
    }

    public function generate()
    {

            $data = array ('success' => false, 'messages'=> array());       
            $valid = $this->form_validation;

            $valid->set_rules('code','Code','trim|required|xss_clean');                                  
            $valid->set_error_delimiters('<p class="text-danger">', '</p>');
            if($valid->run() == FALSE)
            {
                    foreach($_POST as $key => $value) 
                    {
                            $data['messages'][$key] = form_error($key);
                    }               
            
            }
            else
            {
                    $code=$this->input->post('code');              
                    $img = $code.'.png';
                    $qrcode = $this->_code($code);
                // $this->siswa_model->simpan_siswa($nim,$nama,$jurusan,$code); //simpan ke database
        $data['info'] = "<img src=".base_url('upload/tiket/qr_code/'.$img)." class='rounded mx-auto d-block'>";
                    $data['success'] = true;   
                    //$data['redirect'] = base_url();     
                    
            }
            echo json_encode($data);        

    }
}