<?php
defined('BASEPATH') or exit('No direct script access allowed');

class OwLogin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if (!$this->form_validation->run()) {
            # code...
            $data = [
                'title' => "Login | Only Wall"
            ];
            $this->load->view('login/login_view', $data);
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            # code...
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    # code...
                    $email2 = $user['email'];
                    $role = $user['role_id'];
                    $data = [
                        'email' => $email2,
                        'role_id' => $role
                    ];
                    $this->session->set_userdata($data);

                    redirect('Admin');
                } else {
                    # code...
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah</div>');
                    redirect('OwLogin'); # co
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email Belom Aktif</div>');
                redirect('OwLogin');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email Gaada</div>');
            redirect('OwLogin'); # code...
        }
    }

    public function register()
    {
        $this->form_validation->set_rules('nama', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password1', 'Passowrd', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password ga sama',
            'min_length' => 'Password kependekan'
        ]);
        $this->form_validation->set_rules('password2', 'Passowrd', 'required|trim|matches[password1]');

        if (!$this->form_validation->run()) {
            # code...
            $data = [
                'title' => "Register | Only Wall"
            ];


            $this->load->view('login/register_view', $data);
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'nama' => $this->input->post('nama'),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => date('Y-M-D', $timestamp = 'time()'),
                'updated_at' => date('Y-M-D', $timestamp = 'time()')
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Daftar, Silahkan Login!</div>');
            redirect('OwLogin');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda Telah Logout!</div>');
        redirect('OwLogin');
    }
}
