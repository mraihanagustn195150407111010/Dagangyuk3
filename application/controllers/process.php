<?php
defined('BASEPATH') or exit('No direct script access allowed');

class process extends CI_Controller
{
    public function edit($id)
    {
        $this->load->helper('url');
        $this->load->model('EditModel');
        $data['update'] = $this->loginModel->get_postsbyid($id);
        $this->load->view('Edit', $data);
    }
    public function _edit()
    {
        $this->load->database();
        $fullname = $this->input->post('namalengkap');
        $username = $this->input->post('username');
        $telp = $this->input->post('telepon');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $this->load->helper('url');
        $this->load->model('LoginModel');
        $this->LoginModel->edit($fullname, $username, $telp, $email, $password);
    }
}
