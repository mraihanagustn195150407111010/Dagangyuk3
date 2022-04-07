<?php
defined('BASEPATH') or exit('No direct script access allowed');

class editgoods extends CI_Controller
{
    public function index()
    {
        $this->load->database();
        $namatoko = $this->input->post('namatoko');
        $namabarang = $this->input->post('namabarang');
        $detail = $this->input->post('detail');
        $id_barang = $this->input->post('id_barang');
        $tag = $this->input->post('harga');
        $foto = $_FILES['foto_barang']['name'];
        if (!$foto) {
            $this->load->model('LoginModel');
            $this->LoginModel->editgoods($detail, $namatoko, $id_barang, $namabarang, $tag);
        } else {
            $tmp = $_FILES['foto_barang']['tmp_name'];
            move_uploaded_file($tmp, './barang/' . $foto);
            $this->load->model('LoginModel');
            $this->LoginModel->editfotobarang($detail, $namatoko, $id_barang, $foto, $namabarang, $tag);
        }
    }
}
