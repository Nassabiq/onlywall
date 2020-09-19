<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Artikel_m');
        $this->load->helper('text');
    }

    public function product()
    {
        $data = [
            'title' => "Product Page | Only Wall",
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array()
        ];

        if (!$this->session->userdata('email')) {
            redirect('OwLogin');
        } else {
            $this->load->view('admin/product_view', $data);
        }
    }

    public function add_product()
    {
        $data = [
            'title' => "Add Product | Only Wall",
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array()
        ];

        if (!$this->session->userdata('email')) {
            # code...
            redirect('OwLogin');
        } else {
            # code...
            $this->load->view('admin/add_product_view', $data);
        }
    }
}
