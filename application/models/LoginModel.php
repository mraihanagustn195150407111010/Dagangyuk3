<?php

class  LoginModel extends CI_Model
{
    public function get_posts()
    {
        $this->load->database();

        $query = $this->db->get('user');

        return $query->result();
    }
    public function Cek_Login($email, $password)
    {
        $builder = $this->db->table('user');
        $query   = $builder->get();
        var_dump($query);
    }
    public function register($fullname, $username, $telp, $email, $password)
    {
        $data = array('fullname' => $fullname, 'username' => $username, 'no_telp' => $telp, 'email' => $email, 'password' => $password);
        $this->load->database();
        $this->db->insert('user', $data);
        $user = $this->db->get_where('user', ['username' => $username])->row_array();
        $barang = $this->db->get_where('barang')->row_array();
        $data['data'] = array_merge($user, $barang);
        $this->load->view('Login', $data);
    }
    public function get_postsbyid($id)
    {
        $this->load->database();
        $query = $this->db->get_where('post', ['id' => $id]);
        return $query->row_array();
    }
    public function edit($username, $email, $id)
    {
        $data = array('username' => $username, 'email' => $email, 'id' => $id);
        $this->load->database();
        $this->db->where('id', $id);
        $this->db->update('user', $data);
        $user = $this->db->get_where('user', ['username' => $username])->row_array();
        $id_toko = $user['id'];
        $barang = $this->db->get_where('barang', ['id_toko' => $id_toko])->row_array();
        $data['data'] = array_merge($user, $barang);
        $this->load->view('Login', $data);
    }
    public function editfoto($username, $email, $id, $foto2)
    {
        $data = array('username' => $username, 'email' => $email, 'id' => $id, 'foto' => $foto2);
        $this->load->database();
        $this->db->where('id', $id);
        $this->db->update('user', $data);
        $user = $this->db->get_where('user', ['username' => $username])->row_array();
        $id_toko = $user['id'];
        $barang = $this->db->get_where('barang', ['id_toko' => $id_toko])->row_array();
        $data['data'] = array_merge($user, $barang);
        $this->load->view('Login', $data);
    }
    public function adress($provinsi, $city, $kecamatan, $vil, $alamat, $code, $id)
    {
        $data = array('Provinsi' => $provinsi, 'Kabupaten' => $city, 'id' => $id, 'Kecamatan' => $kecamatan, 'Desa' => $vil, 'street' => $alamat, 'postcode' => $code);
        $this->load->database();
        $this->db->where('id', $id);
        $this->db->update('user', $data);
        $user = $this->db->get_where('user', ['id' => $id])->row_array();
        $barang = $this->db->get_where('barang')->row_array();
        $data['data'] = array_merge($user, $barang);
        $this->load->helper('url');
        $this->load->view('Login', $data);
    }
    public function editsell($namatoko, $email, $id, $city, $prov)
    {
        $data = array('namatoko' => $namatoko, 'emailseller' => $email, 'id' => $id, 'city' => $city, 'provinsi' => $prov);
        $this->load->database();
        $this->db->where('id', $id);
        $this->db->update('seller', $data);
        $user = $this->db->get_where('seller', ['id' => $id])->row_array();
        $barang = $this->db->get_where('barang')->row_array();
        $data['data'] = array_merge($user, $barang);
        $this->load->view('homepageseller', $data);
    }
    public function editfotoseller($namatoko, $email, $id, $city, $prov, $foto)
    {
        $data = array('namatoko' => $namatoko, 'emailseller' => $email, 'id' => $id, 'city' => $city, 'provinsi' => $prov, 'logo' => $foto);
        $this->load->database();
        $this->db->where('id', $id);
        $this->db->update('seller', $data);
        $user = $this->db->get_where('seller', ['id' => $id])->row_array();
        $barang = $this->db->get_where('barang')->row_array();
        $data['data'] = array_merge($user, $barang);
        $this->load->view('homepageseller', $data);
    }
    public function registerseller($fullname, $username, $telp, $email, $password, $city, $prov)
    {
        $data = array('nama_lengkap' => $fullname, 'namatoko' => $username, 'no_telp' => $telp, 'emailseller' => $email, 'password' => $password, 'city' => $city, 'provinsi' => $prov);
        $this->load->database();
        $this->db->insert('seller', $data);
        $user = $this->db->get_where('seller', ['namatoko' => $username])->row_array();
        $data['data'] = $user;
        $this->load->view('homepagenewseller', $data);
    }
    public function editgoods($detail, $namatoko, $id_barang, $namabarang, $tag)
    {
        $data = array('detail' => $detail, 'id_barang' => $id_barang, 'nama_barang' => $namabarang, 'harga' => $tag);
        $this->load->database();
        $this->db->where('id_barang', $id_barang);
        $this->db->update('barang', $data);
        $user = $this->db->get_where('seller', ['namatoko' => $namatoko])->row_array();
        $id_toko = $user['id'];
        $barang = $this->db->get_where('barang', ['id_toko' => $id_toko])->row_array();
        $data['data'] = array_merge($user, $barang);
        $this->load->view('homepageseller', $data);
    }
    public function editfotobarang($detail, $namatoko, $id_barang, $foto, $namabarang, $tag)
    {
        $data = array('detail' => $detail, 'id_barang' => $id_barang, 'foto_barang' => $foto, 'nama_barang' => $namabarang, 'harga' => $tag);
        $this->load->database();
        $this->db->where('id_barang', $id_barang);
        $this->db->update('barang', $data);
        $user = $this->db->get_where('seller', ['namatoko' => $namatoko])->row_array();
        $id_toko = $user['id'];
        $barang = $this->db->get_where('barang', ['id_toko' => $id_toko])->row_array();
        $data['data'] = array_merge($user, $barang);
        $this->load->view('homepageseller', $data);
    }
}
