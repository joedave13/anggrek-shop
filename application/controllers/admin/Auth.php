<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Auth extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            //Do your magic here
            $this->load->model('M_Auth');
        }
    
        public function index()
        {
            $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = 'Admin Login Page';
                $this->load->view('templates/auth_header', $data);
                $this->load->view('auth/login');
                $this->load->view('templates/auth_footer');
            } else {
                $email = $this->input->post('email');
                $password = $this->input->post('password');

                $user = $this->M_Auth->checkUser($email);
                if ($user) {
                    if ($user['is_active'] == 1) {
                        if (password_verify($password, $user['password'])) {
                            $data = [
                                'email' => $user['email'],
                            ];
                            $this->session->set_userdata($data);
                            
                            redirect('admin/dashboard');
                        }
                        else {
                            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Password anda salah!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button></div>');
                            redirect('admin/auth');
                        }
                    }
                    else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Email anda belum aktif!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button></div>');
                        redirect('admin/auth');
                    }
                }
                else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Email anda belum terdaftar!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button></div>');
                    redirect('admin/auth');
                }
            }
        }

        public function register()
        {
            $this->form_validation->set_rules('name', 'Full Name', 'trim|required');
            $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
            $this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[5]');
            $this->form_validation->set_rules('password2', 'Confirm Password', 'trim|required|matches[password1]');
            
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = 'Admin Register Page';
                $this->load->view('templates/auth_header', $data);
                $this->load->view('auth/register');
                $this->load->view('templates/auth_footer');
            } else {
                $data = [
                    'name' => $this->input->post('name'),
                    'email' => $this->input->post('email'),
                    'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                    'is_active' => 1,
                    'date_created' => time()
                ];
                $this->M_Auth->insertData($data);
                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Akun anda berhasil terdaftar!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button></div>');
                redirect('admin/auth');
            }
        }

        public function logout()
        {
            $this->session->unset_userdata('email');
            redirect('admin/auth/index');
        }
    }
    
    /* End of file Auth.php */
    
?>
