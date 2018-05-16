<?php
Class Part extends CI_Controller{
    
    var $API ="";
    
    function __construct() {
        parent::__construct();
        $this->API="http://cs-upi-16.com/tiaAPI/index.php";
        $this->load->library('session');
        $this->load->library('curl');
    }
    
    // menampilkan data part
    function index(){
        $data['datapart'] = json_decode($this->curl->simple_get($this->API.'/part'));
        $this->load->view('global/header');
        $this->load->view('part/list',$data);
        $this->load->view('global/footer');
    }
    
    // insert data part
    function create(){
        if(isset($_POST['submit'])){
            $data = array(
                'id'            => $this->input->post('id'),
                'nama'          => $this->input->post('nama'),
                'nomor_seri'    => $this->input->post('nomor_seri'),
                'merk'          => $this->input->post('merk'),
                'harga'         => $this->input->post('harga'));
            $insert =  $this->curl->simple_post($this->API.'/part', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('part');
        }else{
            $this->load->view('global/header');
            $this->load->view('part/create');
            $this->load->view('global/footer');
            
        }
    }
    
    // edit data part
    function edit(){
        if(isset($_POST['submit'])){
            $data = array(
                'id'            => $this->input->post('id'),
                'nama'          => $this->input->post('nama'),
                'nomor_seri'    => $this->input->post('nomor_seri'),
                'merk'          => $this->input->post('merk'),
                'harga'         => $this->input->post('harga'));
            $update =  $this->curl->simple_put($this->API.'/part', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('part');
        }else{
            $params = array('id'=>  $this->uri->segment(3));
            $data['datapart'] = json_decode($this->curl->simple_get($this->API.'/part',$params));
            $this->load->view('global/header');
            $this->load->view('part/edit',$data);
            $this->load->view('global/footer');    
        }
    }
    
    // delete data part
    function delete($id){
        if(empty($id)){
            redirect('part');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/part', array('id'=>$id), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('part');
        }
    }
}