<?php
class Login extends CI_Controller {
    function index() {
        $this->load->view('admin/login');
    }

    function verify() {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
    }
}