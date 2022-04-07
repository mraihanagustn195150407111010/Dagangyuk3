<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Adress extends CI_Controller
{
    public function index()
    {
        $this->load->database();
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
}
