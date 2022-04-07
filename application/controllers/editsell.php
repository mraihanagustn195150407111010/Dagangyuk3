<?php
defined('BASEPATH') or exit('No direct script access allowed');

class editsell extends CI_Controller
{
    public function index()
    {
        $this->load->database();
        $namatoko = $this->input->post('namatoko');
        $email = $this->input->post('email');
        $id = $this->input->post('id');
        $city = $this->input->post('city');
        $prov = $this->input->post('provinsi');
        $foto = $_FILES['foto']['name'];
        if (!$foto) {
            $this->load->model('LoginModel');
            $this->LoginModel->editsell($namatoko, $email, $id, $city, $prov);
        } else {
            $tmp = $_FILES['foto']['tmp_name'];
            move_uploaded_file($tmp, './uploads/' . $foto);
            $this->load->model('LoginModel');
            $this->LoginModel->editfotoseller($namatoko, $email, $id, $city, $prov, $foto);
        }
    }
}
