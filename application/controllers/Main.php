<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Model_main');
    }

    public function login()
    {
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $data['title'] = 'Login Page';
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/auth/header', $data);
            $this->load->view('auth/index');
            $this->load->view('templates/auth/footer');
            if ($id = $this->input->get('lg') != null) {
                $this->load->view('templates/user/alert');
            }
            if ($id = $this->input->get('reg') != null) {
                $this->load->view('templates/user/regAlertS');
            }
            if ($id = $this->input->get('lgV') != null) {
                $this->load->view('templates/user/regAlertV');
            }
        } else {
            $username = htmlspecialchars($this->input->post('username'));
            $pass = htmlspecialchars($this->input->post('password'));
            $cekLogin = $this->Model_main->login($username, $pass);
            if ($cekLogin) {
                foreach ($cekLogin as $row) {
                    if($row->aktif == "tidak"){
                        redirect('main/login?lgV=failed');
                    }
                    $this->session->set_userdata('username', $row->username);
                    $this->session->set_userdata('id', $row->id);
                    $this->session->set_userdata('role', $row->role);
                    if ($row->role === 'user') {
                        redirect('admin/index', 'refresh');
                    } else if ($row->role === 'admin') {
                        redirect('admin/index', 'refresh');
                    }
                }
            } else {
                redirect('main/login?lg=failed');
            }
        }
    }

    public function register()
    {
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('password2', 'Password2', 'required');
        $data['title'] = 'Register Page';
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/auth/header', $data);
            $this->load->view('auth/register');
            $this->load->view('templates/auth/footer');
            if ($id = $this->input->get('lg') != null) {
                $this->load->view('templates/user/regAlert');
            }
            if ($id = $this->input->get('wp') != null) {
                $this->load->view('templates/user/regAlertWp');
            }
        } else {
            $username = htmlspecialchars($this->input->post('username'));
            $pass = htmlspecialchars($this->input->post('password'));
            $pass2 = htmlspecialchars($this->input->post('password2'));
            
            $cekLogin = $this->Model_main->login($username, $pass);
            if ($cekLogin) {
                foreach ($cekLogin as $row) {
                    $this->session->set_userdata('username', $row->username);
                    $this->session->set_userdata('id', $row->id);
                    $this->session->set_userdata('role', $row->role);
                    if ($row->role === 'user') {
                        redirect('admin/index', 'refresh');
                    } else if ($row->role === 'admin') {
                        redirect('admin/index', 'refresh');
                    }
                }
            } else {
                redirect('main/register?lg=failed');
            }
        }
    }

    public function aksi_register()
    {
        // $this->form_validation->set_rules('nik', 'NIK', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('password2', 'Password2', 'required');
        // $this->form_validation->set_rules('role', 'role', 'required');
        $data['title'] = "Register User ";
        if($pass != $pass2){
                redirect('main/register?wp=wPass');
            }

        if ($this->form_validation->run() == false) {
            redirect('main/register?lg=failed');
        } else {
            // $nik = htmlspecialchars($this->input->post('nik'));
            $username = htmlspecialchars($this->input->post('username'));
            $password = htmlspecialchars($this->input->post('password'));
            $password2 = htmlspecialchars($this->input->post('password2'));

            if($password != $password2){
                redirect('main/register?wp=wPass');
            }
            if ($this->Model_main->cek_user($username)) {
                redirect('main/register?lg=failed', 'refresh');
            } else {
                $this->Model_main->tambah_user($username, $password);
                redirect('main/login?reg=SC');
                $this->load->view('templates/user/regAlertS');
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('main/login', 'refresh');
    }

    public function index()
    {

        $data['title'] = 'Login | Badan Kesatuan Bangsa dan Politik';
        $this->load->view('auth/index', $data);
    }
}
