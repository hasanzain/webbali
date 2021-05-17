<?php
defined('BASEPATH') or exit('No direct script allowed');
date_default_timezone_set("Asia/Jakarta");

/*----------------------------------------REQUIRE THIS PLUGIN----------------------------------------*/
require APPPATH . '/libraries/REST_Controller.php';
//use Restserver\Libraries\REST_Controller;

class icmp extends REST_Controller
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
        $limit = $this->get('limit');
        $order = $this->get('order');
        $lokasi = $this->get('lokasi');

        if ($limit != '') {
            $this->db->limit($limit);
        }
        if ($order != '') {
            $this->db->order_by('id', $order);
        }
        if ($lokasi != '') {
            $this->db->where('lokasi', $lokasi);
        }

        if ($id == '') {
            $icmp = $this->db->get('icmp')->result();
        } else {
            $this->db->where('id', $id);
            $icmp = $this->db->get('icmp')->result();
        }

        $this->response($icmp, 200);
    }

    function index_post()
    {
        $data = array(
            'lokasi'    =>   $this->post('lokasi'),
            'icmp_1' => $this->post('icmp_1'),
            'icmp_2' => $this->post('icmp_2'),
            'icmp_3' => $this->post('icmp_3'),
            'icmp_4' => $this->post('icmp_4'),
            'icmp_5' => $this->post('icmp_5'),
            'icmp_6' => $this->post('icmp_6'),
            'icmp_7' => $this->post('icmp_7'),
            'icmp_8' => $this->post('icmp_8'),
        );
        $insert = $this->db->insert('icmp', $data);
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
        $icmp_1 = $this->put('icmp_1');
        $icmp_2 = $this->put('icmp_2');
        $icmp_3 = $this->put('icmp_3');
        $icmp_4 = $this->put('icmp_4');
        $icmp_5 = $this->put('icmp_5');
        $icmp_6 = $this->put('icmp_6');
        $icmp_7 = $this->put('icmp_7');
        $icmp_8 = $this->put('icmp_8');

        if ($lokasi != null){
            $data['lokasi'] = $lokasi;
        }
        if ($icmp_1 != null){
            $data['icmp_1'] = $icmp_1;
        }
        if ($icmp_2 != null){
            $data['icmp_2'] = $icmp_2;
        }
        if ($icmp_3 != null){
            $data['icmp_3'] = $icmp_3;
        }
        if ($icmp_4 != null){
            $data['icmp_4'] = $icmp_4;
        }
        if ($icmp_5 != null){
            $data['icmp_5'] = $icmp_5;
        }
        if ($icmp_6 != null){
            $data['icmp_6'] = $icmp_6;
        }
        if ($icmp_7 != null){
            $data['icmp_7'] = $icmp_7;
        }
        if ($icmp_8 != null){
            $data['icmp_8'] = $icmp_8;
        }
        // $data = array(
        //     'suhu' => $this->post('suhu'),
        //     'arus' => $this->post('arus'),
        //     'tegangan' => $this->post('tegangan'),
        //     'daya' => $this->post('daya'),
        //     'frekuensi' => $this->post('frekuensi'),
        //     'tanggal' => date("Y-m-d"),
        //     'waktu' => date("h:i:sa"),
        // );

        $this->db->where('id', $id);
        $update = $this->db->update('icmp', $data);

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
            $delete = $this->db->empty_table('icmp');
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