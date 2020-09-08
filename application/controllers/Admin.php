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
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array()
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

    public function add_artikel_view()
    {
        $data = [
            'title' => "Tambah Artikel | Only Wall",
            'kategori' => $this->Artikel_m->getKategori(),
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array()
        ];

        if (!$this->session->userdata('email')) {
            # code...
            redirect('OwLogin');
        } else {
            # code...
            $this->load->view('admin/add_artikel_view', $data);
        }
    }
    function _uploadImage()
    {

        $image_name = time() . $_FILES["userfiles"]['name'];

        $config['upload_path'] =  './upload/thumbnails/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = 512;
        $config['file_name'] = $image_name;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('thumbnails')) {
            # code...
            return $this->upload->data("file_name");
        }
        return "default.jpg";
    }
    public function add_artikel()
    {
        $data = [
            'judul_artikel' => htmlspecialchars($this->input->post('judul_artikel', true)),
            'konten' => htmlspecialchars($this->input->post('konten', true)),
            'id_kategori' => htmlspecialchars($this->input->post('id_kategori'), true),
            'tgl_upload' => time(),
            'thumbnail' => $this->_uploadImage()
        ];

        
    }
}
