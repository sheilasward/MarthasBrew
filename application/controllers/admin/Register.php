<?php
class Register extends CI_Controller {
    function index() {
        $this->load->view('admin/register');
    }
    function verify() {
        $msg = "";
        if (isset($_POST['submit'])) {
            $firstname = $this->input->post('firstname');
            $lastname = $this->input->post('lastname');
            $username = $this->input->post('email');
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $cpassword = $this->input->post('cpassword');
            if ($password != $cpassword) {
                $msg = "Password is not equal to Confirm Password";
            } 
           
        }
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
    }
}