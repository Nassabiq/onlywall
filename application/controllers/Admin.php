<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Artikel_m');
        $this->load->helper('text');
    }

    public function index()
    {
        $data = [
            'title' => "Admin Page | Only Wall",
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array()
        ];

        if (!$this->session->userdata('email')) {
            # code...
            redirect('OwLogin');
        } else {
            # code...
            $this->load->view('admin/dashboard_view', $data);
        }
    }

    public function artikel()
    {
        $data = [
            'title' => "Article Page | Only Wall",
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'artikel_post' => $this->Artikel_m->getArtikel()
        ];

        if (!$this->session->userdata('email')) {
            # code...
            redirect('OwLogin');
        } else {
            # code...
            $this->load->view('admin/artikel_view', $data);
        }
    }

    public function add_kategori()
    {
        $kategori = $this->input->post('kategori');
        $data = array(
            'kategori' => $kategori
        );

        $this->db->insert('artikel_kategori', $data);
        $this->session->set_flashdata('message', '<div style="font-size: 10pt;" class="text-sm-left text-success alert alert-success" role="alert" >Kategori Baru Berhasil ditambahkan!</div>');
        redirect('Admin/artikel');
    }

    public function add_artikel()
    {
        $data = [
            'title' => "Tambah Artikel | Only Wall",
            'kategori' => $this->Artikel_m->getKategori(),
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
        ];
        if (!$this->session->userdata('email')) {
            redirect('OwLogin');
        } else {
            $this->load->view('admin/add_artikel_view', $data);
        }
    }
    public function add_artikel_proses()
    {
        $image_name = date('Ymd') . $_FILES["thumbnail"]['name'];

        $config['upload_path'] =  './upload/thumbnails/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = 512;
        $config['file_name'] = $image_name;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('thumbnail')) {
            // $error = array('error' => $this->upload->display_errors());
            // $this->load->view('admin/add_artikel_view', $error);
            echo "gagal";
        } else {
            $judul_artikel = htmlspecialchars($this->input->post('judul_artikel', true));
            $konten = htmlspecialchars($this->input->post('konten'));
            $id_kategori = $this->input->post('id_kategori');
            $tgl_upload = date('dmY');
            $thumbnail = $this->upload->data('file_name');

            $this->db->insert('artikel_post', array(
                'judul_artikel' => $judul_artikel,
                'konten' => $konten,
                'id_kategori' => $id_kategori,
                'tgl_upload' => $tgl_upload,
                'thumbnail' => $thumbnail
            ));
            $this->session->set_flashdata('message', '<div style="font-size: 10pt;" class="text-sm-left text-success alert alert-success" role="alert" >Artikel Berhasil ditambahkan!</div>');
            redirect('Admin/add_artikel');
        }
    }

    public function edit_artikel()
    {
        $data = [
            'title' => "Edit Artikel | Only Wall",
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array()
        ];

        if (!$this->session->userdata('email')) {
            # code...
            redirect('OwLogin');
        } else {
            # code...
            $this->load->view('admin/edit_artikel_view', $data);
        }
    }

    public function product()
    {
        $data = [
            'title' => "Product Page | Only Wall",
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array()
        ];

        if (!$this->session->userdata('email')) {
            # code...
            redirect('OwLogin');
        } else {
            # code...
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
