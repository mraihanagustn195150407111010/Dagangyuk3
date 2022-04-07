<?php
defined('BASEPATH') or exit('No direct script access allowed');

class barangcheckout extends CI_Controller
{
    public function index()
    {
        $this->load->helper('url');
        $this->load->database();
        $user = $this->db->get_where('user')->row_array();
        $barang = $this->db->get_where('barang')->row_array();
        $seller = $this->db->get_where('seller')->row_array();
        $data['data'] = array_merge($user, $barang, $seller);
        $this->load->view('checkout', $data);
    }
}
