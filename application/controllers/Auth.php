<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->load->helper('url');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {

            echo "<script> alert('Data salah');</script>";
        } else {
            $this->_login();
        }
    }
    public function _login()
    {
        session_start();
        $this->load->helper('url');
        $this->load->database();
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        $seller = $this->db->get_where('seller')->row_array();
        $id_toko = $seller['id'];
        $barang = $this->db->get_where('barang', ['id_toko' => $id_toko])->row_array();
        $_SESSION['email'] = $user;
        //var_dump($user);
        if ($user) {
            if ($user['password'] == $password) {
                $_SESSION['email'] = $user;
                $data['data'] = array_merge($user, $barang, $seller);
                $this->load->view('Login', $data);
            } else {
                echo 'Email atau kata sandi salah';
            }
        } else {
            // var_dump($_SESSION);
            $this->load->view('Dashboard');
            echo "<script> alert('Email Atau Password Salah');</script>";
            redirect('', 'refresh');
        }
    }
    public function show()
    {
        $this->load->helper('url');
        $this->load->model('LoginModel');

        $posts = $this->LoginModel->get_posts();
        $data['posts'] = $posts;

        $this->load->view('read', $data);
    }
    public function register()
    {
        $this->load->database();
        $fullname = $this->input->post('fullname');
        $username = $this->input->post('username');
        $telp = $this->input->post('telepon');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $this->load->helper('url');
        $this->load->model('LoginModel');
        $this->LoginModel->register($fullname, $username, $telp, $email, $password);
    }
    public function edit()
    {
        $this->load->view('Edit');
    }
    public function editprocess()
    {
        $this->load->database();
        $username = $this->input->post('username');
        $user = $this->db->get_where('user', ['username' => $username])->row_array();
        $data['data'] = $user['username'];
        $this->load->view('Edit', $data);
    }
    public function update()
    {
        $this->load->database();
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $id = $this->input->post('id');
        $this->load->helper('url');
        $this->load->model('LoginModel');
        $this->LoginModel->edit($username, $email, $id);
    }
    public function adress()
    {
        $this->load->database();
        $this->load->helper('url');
        $id = $this->input->post('id');
        $provinsi = $this->input->post('provinsi');
        $city = $this->input->post('city');
        $kecamatan = $this->input->post('kecamatan');
        $vil = $this->input->post('vil');
        $alamat = $this->input->post('street');
        $code = $this->input->post('code');
        $this->load->model('LoginModel');
        $this->LoginModel->adress($provinsi, $city, $kecamatan, $vil, $alamat, $code, $id);
    }
    public function logout()
    {
        // session_unset();
        // session_destroy();
        $this->load->helper('url');
        redirect('', 'refresh');
        $this->load->view('Dashboard');
    }
    public function sellog()
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
        $user = $this->db->get_where('seller', ['email' => $email])->row_array();
        $_SESSION['email'] = $user;
        //var_dump($user);
        if ($user) {
            $data['data'] = $user;
            if ($user['password'] == $password) {
                // $_SESSION['email'] = $user;
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
