<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

    public function index()
    {
        $data = array(
            'nama' => $this->db->get('telepon')
       );

        $this->load->view('kontak', $data);
        
    }

    public function suhu()
    {
        
        
        
        
    }

}

/* End of file Controllername.php */
