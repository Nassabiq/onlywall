<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Account extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Account_m');
        $this->load->helper('text');
        $this->load->helper('file');
        $this->load->library('image_lib');
    }

    public function index()
    {
        $data = [
            'title' => "Account Page | Only Wall",
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'role' => $this->Account_m->getUser()
        ];

        if (!$this->session->userdata('email')) {
            redirect('OwLogin');
        } else {
            $this->load->view('admin/account/kelola_akun_view', $data);
        }
    }

    public function addAccount()
    {
        $this->form_validation->set_rules('nama', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password1', 'Passowrd', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password ga sama',
            'min_length' => 'Password kependekan'
        ]);
        $this->form_validation->set_rules('password2', 'Passowrd', 'required|trim|matches[password1]');

        $data = [
            'title' => "Account Page | Only Wall",
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'role' => $this->Account_m->getUser(),
            'akses' => $this->Account_m->getRole()
        ];

        if (!$this->session->userdata('email')) {
            redirect('OwLogin');
        } else {
            if (!$this->form_validation->run()) {
                $this->load->view('admin/account/add_account_view', $data);
            } else {
                $dataAkun = [
                    'nama' => htmlspecialchars($this->input->post('nama', true)),
                    'email' => htmlspecialchars($this->input->post('email', true)),
                    'image' => 'default.jpg',
                    'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                    'role_id' => $this->input->post('role_id'),
                    'is_active' => 1,
                    'date_created' => date('Y-m-d'),
                    'updated_at' => date('Y-m-d')
                ];

                $this->db->insert('user', $dataAkun);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun berhasil didaftarkan!</div>');
                redirect('Account');
            }
        }
    }

    public function edit_akun()
    {
        $id_user = $this->uri->segment(3);

        $data = [
            'title' => "Edit Account | Only Wall",
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'akun' => $this->Account_m->getUserbyId($id_user),
            'akses' => $this->Account_m->getRole()
        ];

        $this->form_validation->set_rules('nama', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password yang anda masukan tidak sama',
            'min_length' => 'Password terlalu pendek'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if (!$this->session->userdata('email')) {
            redirect('OwLogin');
        } else {
            if (!$this->form_validation->run()) {
                $this->load->view('admin/account/edit_account_view', $data);
            } else {

                $nama = htmlspecialchars($this->input->post('nama', true));

                $upload_image = $data['akun']['image'];
                // var_dump($upload_image);
                // die;

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

                    $old_image = $data['akun']['image'];

                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'upload/account/' . $old_image);
                    }

                    if (!$this->upload->do_upload('image')) {
                        $error = $this->upload->display_errors();
                        $this->session->set_flashdata('message', $error);
                        $this->load->view('admin/account/edit_account_view', $data);
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
                    }
                }

                $dataAkun = [
                    'id_user' => $this->input->post('id_user'),
                    'nama' => $nama,
                    'email' => htmlspecialchars($this->input->post('email', true)),
                    'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                    'role_id' => $this->input->post('role_id'),
                    'is_active' => 1,
                    'date_created' => $data['akun']['date_created'],
                    'updated_at' => date('Y-m-d')
                ];

                $this->db->where('id_user', $dataAkun['id_user']);
                $this->db->update('user', $dataAkun);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun berhasil diubah!</div>');
                redirect('Account');
            }
        }
    }

    public function delete_akun()
    {
        $id_user = $this->uri->segment(3);

        $data['user'] = $this->Account_m->getUserbyId($id_user);
        $old_image = $data['user']['image'];

        if ($old_image != 'default.jpg') {
            # code...
            unlink(FCPATH . 'upload/thumbnails/' . $old_image);
        }

        $this->db->where('id_user', $id_user);
        $this->db->delete('user');

        $this->session->set_flashdata('message', '<div style="font-size: 10pt;" class="text-sm-left text-success alert alert-success" role="alert" >Akun Berhasil dihapus!</div>');
        redirect('Account');
    }
}
