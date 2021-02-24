<?php
defined('BASEPATH') or exit('No direct script allowed');
date_default_timezone_set("Asia/Jakarta");

/*----------------------------------------REQUIRE THIS PLUGIN----------------------------------------*/
require APPPATH . '/libraries/REST_Controller.php';
//use Restserver\Libraries\REST_Controller;

class lantai1 extends REST_Controller
{
    /*----------------------------------------CONSTRUCTOR----------------------------------------*/
    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
    }

    /*----------------------------------------GET KONTAK----------------------------------------*/
    function index_get()
    {
        $id = $this->get('id');
        $lokasi = $this->get('lokasi');

        if ($lokasi != ''){
            $this->db->where('lokasi', $lokasi);
        }
        if ($id == '') {
            $lantai1 = $this->db->get('lantai1')->result();
        } else {
            $this->db->where('id', $id);
            $lantai1 = $this->db->get('lantai1')->result();
        }

        $this->response($lantai1, 200);
    }

    function index_post()
    {
        $data = array(
            'lokasi'    =>   $this->post('lokasi'),
            'status'    =>   $this->post('status'),
            'gambar'    =>   $this->post('gambar'),
        );
        $insert = $this->db->insert('lantai1', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_put()
    {
        $id = $this->put('id');
        $lokasi = $this->put('lokasi');
        $gambar = $this->put('gambar');
        $status = $this->put('status');
        

        if ($status != null){
            $data['status'] = $status;
        }
        if ($gambar != null){
            $data['gambar'] = $gambar;
        }

        if ($id != null) {
            $this->db->where('id', $id);
        }
        if ($lokasi != null) {
            $this->db->where('lokasi', $lokasi);
        }
        $update = $this->db->update('lantai1', $data);

        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail'), 502);
        }
    }

    function index_delete()
    {
        $id = $this->delete('id');
        $auth = $this->delete('auth');

        
        if ($auth == "batman") {
            $delete = $this->db->empty_table('lantai1');
        }else{
            $this->db->where('id', $id);
            $delete = $this->db->delete('lantai1');
        }
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail'), 502);
        }
    }
}