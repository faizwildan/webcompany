<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }


    public function index()
    {
        $this->load->view('template/auth_header');
        $this->load->view('auth/login');
        $this->load->view('template/auth_footer');
    }

    public function register()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password1', 'Password1', 'required|trim|min_length[3]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password2', 'required|trim|min_length[3]|matches[password2]');


        if ($this->form_validation->run() == false) {

            $this->load->view('template/auth_header');
            $this->load->view('auth/register');
            $this->load->view('template/auth_footer');
        } else {

            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $user = $this->db->get_where('user', ['email => $email'])->row_array();

            var_dump($user);
            die;

            if ($user) {
                if (password_verify($password, $user['password'])) {

                    $data = [
                        'email' => $user['email'],
                        'as_id' => $user['as_id']
                    ];
                    $this->session->set_userdata($data);

                    if ($user['as_id'] == 1) {
                        redirect('admin');
                    } else {
                        redirect('user');
                    }
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-primary" 
                role="alert"> 
                Password anda salah!</div>');
                redirect('auth');
            }



            $data = [
                'nama'         => $this->input->post('nama'),
                'email'        => $this->input->post('email'),
                'nama'         => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'as_id'        => 2,
                'gambar'       => 'logo.jpeg',
                'date_created' => time()
            ];

            $this->db->insert('user, $data');
            redirect('auth');
        }
    }
}
