<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('file');
        $this->load->library('image_lib');
    }
    public function index()
    {
        $data = [
            'title' => "Profile | Only Wall",
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array()
        ];

        if (!$this->session->userdata('email')) {
            redirect('OwLogin');
        } else {
            $this->load->view('admin/profile/profile_view', $data);
        }
    }

    public function edit_foto()
    {
        $data = [
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
        ];

        $nama = $data['user']['nama'];
        $upload_image = $data['user']['image'];

        if ($upload_image) {
            # code...
            $image_name = 'OwAkun' . '-' . $nama;
            $config['upload_path'] =  './upload/account/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = $image_name;

            $this->load->library(
                'upload',
                $config
            );

            $old_image = $data['user']['image'];
            if ($old_image != 'default.jpg') {
                unlink(FCPATH . 'upload/account/' . $old_image);
            }

            if (!$this->upload->do_upload('image')) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('message', $error);
                $this->load->view('admin/profile/profile_view', $data);
            } else {


                $image = $this->upload->data();


                $configer['image_library'] = 'gd2';
                $configer['source_image'] = $image['full_path'];
                $configer['quality'] = '70%';
                $configer['width'] = 600;
                $configer['height'] = 400;

                $this->image_lib->clear();
                $this->image_lib->initialize($configer);
                $this->image_lib->resize();
                $gambar = $image['file_name'];

                $this->db->set(
                    'image',
                    $gambar
                );
                $this->session->set_flashdata('message', '<div style="font-size: 10pt;" class="text-sm-left text-success alert alert-success" role="alert" >Foto Berhasil diubah!</div>');
                redirect('Profile');
            }
        }
    }
}
