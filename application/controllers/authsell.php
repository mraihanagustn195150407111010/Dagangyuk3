<?php
defined('BASEPATH') or exit('No direct script access allowed');

class authsell extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->load->helper('url');
        $this->form_validation->set_rules('emailSeller', 'emailSeller', 'trim|required|valid_email');
        $this->form_validation->set_rules('passwordSeller', 'PasswordSeller', 'trim|required');

        if ($this->form_validation->run() == false) {

            echo 'Data Tidak Terdaftar';
        } else {
            $this->_sellog();
        }
    }
    public function _sellog()
    {
        session_start();
        $this->load->helper('url');
        $this->load->database();
        $email = $this->input->post('emailSeller');
        $password = $this->input->post('passwordSeller');
        $user = $this->db->get_where('seller', ['emailseller' => $email])->row_array();
        $id_toko = $user['id'];
        $barang = $this->db->get_where('barang', ['id_toko' => $id_toko])->row_array();
        // var_dump($barang);
        foreach ($barang as $row) {
        }
        $_SESSION['emailseller'] = $user;
        //var_dump($user)
        if ($user) {
            $data['data'] = array_merge($user, $barang);
            // var_dump($data);
            if ($user['password'] == $password) {
                // $_SESSION['emailseller'] = $user;
                $this->load->view('homepageseller', $data);
            } else {
                echo 'Email atau kata sandi salah';
            }
        } else {
            // var_dump($_SESSION);
            echo 'Data Tidak Terdaftar';
        }
    }
}
