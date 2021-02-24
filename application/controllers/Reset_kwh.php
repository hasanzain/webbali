<?php
defined('BASEPATH') or exit('No direct script allowed');
date_default_timezone_set("Asia/Jakarta");

/*----------------------------------------REQUIRE THIS PLUGIN----------------------------------------*/
require APPPATH . '/libraries/REST_Controller.php';
//use Restserver\Libraries\REST_Controller;

class reset_kwh extends REST_Controller
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

        if ($id == '') {
            $reset_kwh = $this->db->get('reset_kwh')->result();
        } else {
            $this->db->where('id', $id);
            $reset_kwh = $this->db->get('reset_kwh')->result();
        }

        $this->response($reset_kwh, 200);
    }

    function index_post()
    {
        $data = array(
            'value'    =>   $this->post('value'),
            'customer'    =>   $this->post('customer')
        );
        $insert = $this->db->insert('reset_kwh', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_put()
    {
        $id = $this->put('id');
        $data = array(
            'value' => $this->put('value'),
            'customer'    =>   $this->put('customer')
        );

        $this->db->where('id', $id);
        $update = $this->db->update('reset_kwh', $data);

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
            $delete = $this->db->empty_table('reset_kwh');
        }else{
            $this->db->where('id', $id);
            $delete = $this->db->delete('arus_pompa_1');
        }
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail'), 502);
        }
    }
}