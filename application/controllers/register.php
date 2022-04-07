<?php
defined('BASEPATH') or exit('No direct script access allowed');

class register extends CI_Controller
{
    public function index()
    {
        $this->load->database();
        $fullname = $this->input->post('fullname');
        $username = $this->input->post('username');
        $telp = $this->input->post('telepon');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $birthdate = $this->input->post('date');
        $this->load->helper('url');
        $this->load->model('LoginModel');
        $this->LoginModel->register($fullname, $username, $telp, $email, $password, $birthdate);
    }
}
