<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Edit extends CI_Controller
{
    public function index()
    {
        $this->load->database();
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $id = $this->input->post('id');
        $foto2 = $_FILES['foto']['name'];
        if (!$foto2) {
            $this->load->model('LoginModel');
            $this->LoginModel->edit($username, $email, $id);
        } else {
            $tmp = $_FILES['foto']['tmp_name'];
            move_uploaded_file($tmp, './uploads/' . $foto2);
            $this->load->model('LoginModel');
            $this->LoginModel->editfoto($username, $email, $id, $foto2);
        }

        // $config['upload_path']          = './uploads/';
        // $config['allowed_types']        = 'gif|jpg|png';

        // $this->load->library('upload', $config);

        // if (!$this->upload->do_upload('foto')) {
        //     $error = array('error' => $this->upload->display_errors());

        //     $this->load->view('Login', $error);
        // } else {
        //     $data1 = array('upload_data' => $this->upload->data());
        // }
    }
}
