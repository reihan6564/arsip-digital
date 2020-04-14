<?php


defined('BASEPATH') or exit('No direct script access allowed');
class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Model_auth');
        $this->load->helper('download');
    }

    public function index()
    {
        $this->load->view('auth/login');
    }

    public function download_dokumen($id)
    {
        force_download('assets/file-document-masuk/' . $id, NULL);
    }

    public function chek_login()
    {
        $username = htmlspecialchars($this->input->post('username'));
        $password = $this->input->post('password');
        $user = $this->db->get_where('tb_admin', ['username' => $username])->row_array();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'username' => $user['username']
                ];
                $this->session->set_userdata($data);
                // $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Login Berhasil</div>');
                redirect('admin');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password anda salah</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun anda tidak ada</div>');
            redirect('auth');
        }
    }


    public function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun anda telah logout</div>');
        redirect('auth');
    }
}
