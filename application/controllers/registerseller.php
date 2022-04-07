<?php
defined('BASEPATH') or exit('No direct script access allowed');

class registerseller extends CI_Controller
{

    public function index()
    {
        $this->load->database();
        $fullname = $this->input->post('namalengkapSeller');
        $username = $this->input->post('namatoko');
        $telp = $this->input->post('teleponSeller');
        $email = $this->input->post('emailSeller');
        $password = $this->input->post('passwordSeller');
        $city = $this->input->post('city');
        $prov = $this->input->post('provinsi');
        $this->load->helper('url');
        $this->load->model('LoginModel');
        $this->LoginModel->registerseller($fullname, $username, $telp, $email, $password, $city, $prov);
    }
}
