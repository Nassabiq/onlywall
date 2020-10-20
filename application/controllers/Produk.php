<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Produk_m');
        $this->load->helper('text');
        $this->load->helper('file');
        $this->load->library('image_lib');
    }

    public function index()
    {
        $data = [
            'title' => "Product Page | Only Wall",
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'produk' => $this->Produk_m->getProduk()
        ];

        if (!$this->session->userdata('email')) {
            redirect('OwLogin');
        } else {
            $this->load->view('admin/produk/product_view', $data);
        }
    }

    public function add_kategori()
    {
        $kategori = $this->input->post('kategori');
        $data = array(
            'kategori' => $kategori
        );

        $this->db->insert('produk_kategori', $data);
        $this->session->set_flashdata('message', '<div style="font-size: 10pt;" class="text-sm-left text-success alert alert-success" role="alert" >Kategori Baru Berhasil ditambahkan!</div>');
        redirect('Produk');
    }

    public function showProdukDetail()
    {
        $id_produk = $this->uri->segment(3);
        $data = [
            'title' => "Produk | Only Wall",
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'produk' => $this->Produk_m->getProdukbyId($id_produk),
        ];
        if (!$this->session->userdata('email')) {
            redirect('OwLogin');
        } else {
            $this->load->view('admin/produk/produk_view_detail', $data);
        }
    }


    public function add_product()
    {
        $data = [
            'title' => "Add Product | Only Wall",
            'kategori' => $this->Produk_m->getKategori(),
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array()
        ];

        if (!$this->session->userdata('email')) {
            # code...
            redirect('OwLogin');
        } else {
            $this->form_validation->set_rules('nama_produk', 'Produk', 'required|trim');
            // $this->form_validation->set_rules('harga_produk ', 'Harga', 'required|trim');
            $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
            $nama_produk = htmlspecialchars($this->input->post('nama_produk', true));
            $harga = $this->input->post('harga', true);
            $id_kategori = $this->input->post('id_kategori', true);
            $published_at = date('Y-m-d');
            $deskripsi = htmlspecialchars($this->input->post('deskripsi', true));

            if ($this->form_validation->run() == false) {
                $this->load->view('admin/produk/add_product_view', $data);
            } else {

                $this->load->library('upload');

                $files = $_FILES;
                $dataInfo = array();
                $imageCount = count($_FILES['foto_produk']['name']);

                $a =  1;

                for ($i = 0; $i < $imageCount; $i++) {
                    $_FILES['foto_produk']['name'] = $files['foto_produk']['name'][$i];
                    $_FILES['foto_produk']['type'] = $files['foto_produk']['type'][$i];
                    $_FILES['foto_produk']['tmp_name'] = $files['foto_produk']['tmp_name'][$i];
                    $_FILES['foto_produk']['error'] = $files['foto_produk']['error'][$i];
                    $_FILES['foto_produk']['size']  = $files['foto_produk']['size'][$i];


                    // $image_name = 'OwProduk' . '-' . $judul_artikel;
                    $image_name = 'OwProduk' . '-' . $nama_produk . '-' . $a++;
                    $config['file_name'] = $image_name;
                    $config['upload_path'] = './upload/produk/';
                    $config['allowed_types'] = 'gif|jpg|png|jpeg';
                    $config['overwrite']     = TRUE;

                    // $this->load->library('upload', $config);
                    $this->upload->initialize($config);

                    if (!$this->upload->do_upload('foto_produk')) {
                        $error = $this->upload->display_errors();
                        $this->session->set_flashdata('message', $error);
                        $this->load->view('admin/produk/add_artikel_view', $data);
                    } else {
                        $dataInfo = $this->upload->data();
                        $configer['image_library'] = 'gd2';
                        $configer['source_image'] = './upload/produk/' . $dataInfo['file_name'];
                        $configer['quality'] = '50%';
                        $configer['width'] = 1000;
                        // $configer['height'] = ;

                        // $this->image_lib->clear();
                        $this->image_lib->initialize($configer);
                        $this->image_lib->resize();

                        $uploadImgData[$i]['image'] = $dataInfo['file_name'];
                    };
                }
                $foto_produk = json_encode($uploadImgData);

                $this->db->insert('produk', array(
                    'nama_produk' => $nama_produk,
                    'harga' => $harga,
                    'id_kategori' => $id_kategori,
                    'published_at' => $published_at,
                    'deskripsi' => $deskripsi,
                    'foto_produk' => $foto_produk
                ));

                $this->session->set_flashdata('message', '<div style="font-size: 10pt;" class="text-sm-left text-success alert alert-success" role="alert" >Produk Berhasil ditambahkan!</div>');
                redirect('Produk/add_product');
            }
        }
    }

    public function edit_produk()
    {
        $id_produk = $this->uri->segment(3);
        $data = [
            'title' => "Add Product | Only Wall",
            'kategori' => $this->Produk_m->getKategori(),
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'produk' => $this->Produk_m->getProdukbyId($id_produk)
        ];

        if (!$this->session->userdata('email')) {
            # code...
            redirect('OwLogin');
        } else {
            $this->form_validation->set_rules('nama_produk', 'Produk', 'required|trim');
            // $this->form_validation->set_rules('harga_produk ', 'Harga', 'required|trim');
            $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
            $nama_produk = htmlspecialchars($this->input->post('nama_produk', true));
            $harga = $this->input->post('harga', true);
            $id_kategori = $this->input->post('id_kategori', true);
            $published_at = date('Y-m-d');
            $deskripsi = htmlspecialchars($this->input->post('deskripsi', true));

            if ($this->form_validation->run() == false) {
                $this->load->view('admin/produk/edit_produk_view', $data);
            } else {

                $this->load->library('upload');

                $files = $_FILES;
                $dataInfo = array();
                $imageCount = count($_FILES['foto_produk']['name']);

                $a =  1;
                $old_image = $data['produk']['foto_produk'];
                $old = json_decode($old_image);
                foreach ($old as $key) {
                    unlink(FCPATH . 'upload/produk/' . $key->image);
                }

                for ($i = 0; $i < $imageCount; $i++) {
                    $_FILES['foto_produk']['name'] = $files['foto_produk']['name'][$i];
                    $_FILES['foto_produk']['type'] = $files['foto_produk']['type'][$i];
                    $_FILES['foto_produk']['tmp_name'] = $files['foto_produk']['tmp_name'][$i];
                    $_FILES['foto_produk']['error'] = $files['foto_produk']['error'][$i];
                    $_FILES['foto_produk']['size']  = $files['foto_produk']['size'][$i];


                    // $image_name = 'OwProduk' . '-' . $judul_artikel;
                    $image_name = 'OwProduk' . '-' . $nama_produk . '-' . $a++;
                    $config['file_name'] = $image_name;
                    $config['upload_path'] = './upload/produk/';
                    $config['allowed_types'] = 'gif|jpg|png|jpeg';

                    // $this->load->library('upload', $config);
                    $this->upload->initialize($config);

                    if (!$this->upload->do_upload('foto_produk')) {
                        $error = $this->upload->display_errors();
                        $this->session->set_flashdata('message', $error);
                        $this->load->view('admin/produk/add_product_view', $data);
                    } else {
                        // $data['produk'] = $this->Produk_m->getProdukbyId($id_produk);
                        // var_dump($old_image);

                        $dataInfo = $this->upload->data();
                        $configer['image_library'] = 'gd2';
                        $configer['source_image'] = './upload/produk/' . $dataInfo['file_name'];
                        $configer['quality'] = '50%';
                        $configer['width'] = 1000;
                        // $configer['height'] = ;

                        // $this->image_lib->clear();
                        $this->image_lib->initialize($configer);
                        $this->image_lib->resize();

                        $uploadImgData[$i]['image'] = $dataInfo['file_name'];
                    };
                }
                $foto_produk = json_encode($uploadImgData);
                $dataProduk = [
                    'id_produk' => $id_produk,
                    'nama_produk' => $nama_produk,
                    'harga' => $harga,
                    'id_kategori' => $id_kategori,
                    'published_at' => $published_at,
                    'deskripsi' => $deskripsi,
                    'foto_produk' => $foto_produk
                ];

                $this->db->where('id_produk', $dataProduk['id_produk']);
                $this->db->update('produk', $dataProduk);

                $this->session->set_flashdata('message', '<div style="font-size: 10pt;" class="text-sm-left text-success alert alert-success" role="alert" >Produk Berhasil diubah!</div>');
                redirect('Produk');
            }
        }
    }
    public function delete_produk()
    {
        $id_produk = $this->uri->segment(3);
        $data['produk'] = $this->Produk_m->getProdukbyId($id_produk);

        $old_image = $data['produk']['foto_produk'];
        $old = json_decode($old_image);
        foreach ($old as $key) {
            unlink(FCPATH . 'upload/produk/' . $key->image);
        }

        $this->db->where('id_produk', $id_produk);
        $this->db->delete('produk');

        $this->session->set_flashdata('message', '<div style="font-size: 10pt;" class="text-sm-left text-success alert alert-success" role="alert" >Produk Berhasil dihapus!</div>');
        redirect('Produk');
    }
}
