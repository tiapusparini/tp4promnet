<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Part extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data
    function index_get() {
        $id = $this->get('id');
        if ($id == '') {
            $part = $this->db->get('partbrg')->result();
        } else {
            $this->db->where('id', $id);
            $part = $this->db->get('partbrg')->result();
        }
        $this->response($part, 200);
    }

    //insert
    function index_post() {
        $data = array(
                    'id'            => $this->post('id'),
                    'nama'          => $this->post('nama'),
                    'nomor_seri'    => $this->post('nomor_seri'),
                    'merk'          => $this->post('merk'),
                    'harga'         => $this->post('harga'));
        $insert = $this->db->insert('partbrg', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    //update
    function index_put() {
        $id = $this->put('id');
        $data = array(
                    'id'            => $this->put('id'),
                    'nama'          => $this->put('nama'),
                    'nomor_seri'    => $this->put('nomor_seri'),
                    'merk'          => $this->put('merk'),
                    'harga'         => $this->put('harga'));
        $this->db->where('id', $id);
        $update = $this->db->update('partbrg', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    //hapus
    function index_delete() {
        $id = $this->delete('id');
        $this->db->where('id', $id);
        $delete = $this->db->delete('partbrg');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
?>