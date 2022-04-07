<?php
defined('BASEPATH') or exit('No direct script access allowed');

class log extends CI_Controller
{
    public function logout()
    {
        $this->load->helper('url');
        redirect('', 'refresh');
        $this->load->view('Dashboard');
    }
    public function sellogout()
    {
        $this->load->helper('url');
        redirect('', 'refresh');
        $this->load->view('Dashboard');
    }
}
