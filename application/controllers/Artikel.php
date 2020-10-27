<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller
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
        $this->load->helper('file');
        $this->load->library('image_lib');
    }

    public function index()
    {
        $data = [
            'title' => "Article Page | Only Wall",
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            // 'artikel_post' => $this->Artikel_m->getArtikel()
        ];

        if (!$this->session->userdata('email')) {
            # code...
            redirect('OwLogin');
        } else {
            $this->load->library('pagination');
            $jumlah_artikel = $this->db->get('artikel_post')->num_rows();

            $config['base_url'] = base_url() . 'Artikel/index';
            $config['total_rows'] = $jumlah_artikel;
            $config['per_page'] = 5;
            $config["num_links"] = 1;

            $config['first_link']       = 'First';
            $config['last_link']        = 'Last';
            $config['next_link']        = 'Next';
            $config['prev_link']        = 'Prev';
            $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
            $config['full_tag_close']   = '</ul></nav></div>';
            $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
            $config['num_tag_close']    = '</span></li>';
            $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
            $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
            $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
            $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['prev_tagl_close']  = '</span>Next</li>';
            $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
            $config['first_tagl_close'] = '</span></li>';
            $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['last_tagl_close']  = '</span></li>';

            $this->pagination->initialize($config);
            $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
            $data['artikel_post'] = $this->Artikel_m->getArtikel2($config['per_page'], $page);

            $this->load->view('admin/artikel/artikel_view', $data);
        }
    }

    public function show_kategori()
    {
        $data = [
            'title' => "Kategori Page | Only Wall",
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'kategori' => $this->Artikel_m->getkategori()
        ];

        if (!$this->session->userdata('email')) {
            redirect('OwLogin');
        } else {
            $this->load->view('admin/artikel/kelola_artikel_view', $data);
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
        redirect('Artikel');
    }

    public function delete_kategori()
    {
        $id_kategori = $this->uri->segment(3);
        $data['kategori'] = $this->db->get_where('artikel_kategori', ['id_kategori' => $id_kategori]);

        $this->db->where('id_kategori', $id_kategori);
        $this->db->delete('artikel_kategori');

        $this->session->set_flashdata('message', '<div style="font-size: 10pt;" class="text-sm-left text-success alert alert-success" role="alert" >Produk Berhasil dihapus!</div>');
        redirect('Artikel/show_kategori');
    }

    public function showArtikelDetail()
    {
        $id_artikel = $this->uri->segment(3);
        $data = [
            'title' => "Produk | Only Wall",
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'artikel' => $this->Artikel_m->getArtikelbyId($id_artikel)
        ];
        if (!$this->session->userdata('email')) {
            redirect('OwLogin');
        } else {
            $this->load->view('admin/artikel/artikel_view_detail', $data);
        }
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
            $this->form_validation->set_rules('judul_artikel', 'Judul', 'required|trim');
            $this->form_validation->set_rules('konten', 'Konten', 'required|trim');

            $judul_artikel = htmlspecialchars($this->input->post('judul_artikel', true));
            $konten = htmlspecialchars($this->input->post('konten'));
            $id_kategori = $this->input->post('id_kategori');
            $tgl_upload = date('Y-m-d');

            if ($this->form_validation->run() == false) {
                $this->load->view('admin/artikel/add_artikel_view', $data);
            } else {
                $image_name = 'OwArtikel' . '-' . $judul_artikel;
                $config['upload_path'] =  './upload/thumbnails/';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['file_name'] = $image_name;
                $config['overwrite'] = true;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('thumbnail')) {
                    $data = [
                        'title' => "Tambah Artikel | Only Wall",
                        'kategori' => $this->Artikel_m->getKategori(),
                        'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array()
                    ];

                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('message', $error);
                    $this->load->view('admin/artikel/add_artikel_view', $data);
                } else {

                    $thumbnail = $this->upload->data();

                    $configer['image_library'] = 'gd2';
                    $configer['source_image'] = $thumbnail['full_path'];
                    $configer['quality'] = '50%';
                    $configer['width'] = 600;
                    $configer['height'] = 400;

                    // $this->image_lib->clear();
                    $this->image_lib->initialize($configer);
                    $this->image_lib->resize();
                    $gambar = $thumbnail['file_name'];


                    $this->db->insert('artikel_post', array(
                        'judul_artikel' => $judul_artikel,
                        'konten' => $konten,
                        'id_kategori' => $id_kategori,
                        'tgl_upload' => $tgl_upload,
                        'thumbnail' => $gambar
                    ));
                    $this->session->set_flashdata('message', '<div style="font-size: 10pt;" class="text-sm-left text-success alert alert-success" role="alert" >Artikel Berhasil ditambahkan!</div>');
                    redirect('Artikel/add_artikel');
                }
            }
        }
    }

    public function edit_artikel()
    {
        $id_artikel = $this->uri->segment(3);
        $data = [
            'title' => "Edit Artikel | Only Wall",
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'kategori' => $this->Artikel_m->getKategori(),
            'artikel' => $this->Artikel_m->getArtikelbyId($id_artikel)
        ];

        if (!$this->session->userdata('email')) {
            redirect('OwLogin');
        } else {
            # code...   
            $this->form_validation->set_rules('judul_artikel', 'Judul', 'required|trim');
            $this->form_validation->set_rules('konten', 'Konten', 'required|trim');

            $id_artikel = $this->input->post('id_artikel');
            $judul_artikel = htmlspecialchars($this->input->post('judul_artikel', true));
            $konten = htmlspecialchars($this->input->post('konten'));
            $id_kategori = $this->input->post('id_kategori');
            $tgl_upload = date('Y-m-d');


            if ($this->form_validation->run() == false) {
                $this->load->view('admin/artikel/edit_artikel_view', $data);
            } else {

                $upload_image = $_FILES['thumbnail']['name'];
                // print_r($upload_image);
                // die;
                if ($upload_image) {
                    $image_name = 'OwArtikel' . '-' . $judul_artikel;
                    $config['upload_path'] =  './upload/thumbnails/';
                    $config['allowed_types'] = 'gif|jpg|jpeg|png';
                    $config['file_name'] = $image_name;

                    $this->load->library('upload', $config);


                    if (!$this->upload->do_upload('thumbnail')) {
                        $data = [
                            'title' => "Edit Artikel | Only Wall",
                            'kategori' => $this->Artikel_m->getKategori(),
                            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array()
                        ];
                        $error = $this->upload->display_errors();
                        $this->session->set_flashdata('message', $error);
                        $this->load->view('admin/artikel/add_artikel_view', $data);
                    } else {
                        $data['artikel'] = $this->Artikel_m->getArtikelbyId($id_artikel);
                        $old_image = $data['artikel']['thumbnail'];
                        unlink(FCPATH . 'upload/thumbnails/' . $old_image);

                        $thumbnail = $this->upload->data();

                        $configer['image_library'] = 'gd2';
                        $configer['source_image'] = $thumbnail['full_path'];
                        $configer['quality'] = '50%';
                        $configer['width'] = 600;
                        $configer['height'] = 400;

                        $this->image_lib->clear();
                        $this->image_lib->initialize($configer);
                        $this->image_lib->resize();
                        $gambar = $thumbnail['file_name'];

                        $this->db->set('thumbnail', $gambar);
                    }
                }

                $data = [
                    'id_artikel' => $id_artikel,
                    'judul_artikel' => $judul_artikel,
                    'konten' => $konten,
                    'id_kategori' => $id_kategori,
                    'tgl_upload' => $tgl_upload,
                ];

                $this->db->where('id_artikel', $data['id_artikel']);
                $this->db->update('artikel_post', $data);

                $this->session->set_flashdata('message', '<div style="font-size: 10pt;" class="text-sm-left text-success alert alert-success" role="alert" >Artikel Berhasil diubah!</div>');
                redirect('Artikel');
            }
        }
    }

    public function delete_artikel()
    {
        $id_artikel = $this->uri->segment(3);

        $data['artikel'] = $this->Artikel_m->getArtikelbyId($id_artikel);
        $old_image = $data['artikel']['thumbnail'];
        unlink(FCPATH . 'upload/thumbnails/' . $old_image);

        $this->db->where('id_artikel', $id_artikel);
        $this->db->delete('artikel_post');

        $this->session->set_flashdata('message', '<div style="font-size: 10pt;" class="text-sm-left text-success alert alert-success" role="alert" >Artikel Berhasil dihapus!</div>');
        redirect('Artikel');
    }
}
