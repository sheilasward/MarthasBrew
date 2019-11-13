<?php
    class Users extends CI_Controller {

        // User Register
        public function register() {
            $data['title'] = 'Sign Up';

            $this->form_validation->set_rules('firstname', 'First Name', 'required');
            $this->form_validation->set_rules('lastname', 'Last Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('cpassword', 'Confirm Password', 'matches[password]');
            

            if ($this->form_validation->run() === FALSE) {
                $this->load->view('partials/header');
                $this->load->view('users/register', $data);
                $this->load->view('partials/footer');
            }
            else {
                // Encrypt password
                $enc_password = md5($this->input->post('password'));
                $this->user_model->register($enc_password);

                // Set message
                $this->session->set_flashdata('user_registered', 'You are now registered and can log in');
                redirect('index.php/home');
            }
        }

        // User Login
        public function login() {
            $data['title'] = 'Log In';

            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
 
            if ($this->form_validation->run() === FALSE) {
                $this->load->view('partials/header');
                $this->load->view('users/login', $data);
                $this->load->view('partials/footer');
            }
            else {
                // Get email
                $email = $this->input->post('email');
                // Get and Encrypt password
                $enc_password = md5($this->input->post('password'));

                // Login the user
                $user_id = $this->user_model->login($email, $enc_password);
                if ($user_id) {
                    // Create a session
                    $user_data = array(
                        'user_id' => $user_id,
                        'username' => $user_id,
                        'logged_in' => true
                    );

                    // Set success message
                    $this->session->set_flashdata('user_logged_in', 'You are now logged in!');
                    redirect('index.php');

                }
                else {
                    // Set fail message
                    $this->session->set_flashdata('login_failed', 'Login is invalid');
                    redirect('index.php/users/login');

                }

            }
        }

        // User Logout
        public function logout() {
            // Unset user data
            $this->session->unset_userdata('logged_in');
            $this->session->unset_userdata('user_id');
            $this->session->unset_userdata('username');

            // set logout message
            $this->session->set_flashdata('user_logged_out', 'You are now logged out');

            redirect('index.php/users/login');
        }
        

        function check_email_exists($email) {
            $this->form_validation->set_message('check_email_exists', 'That email is already registered.  Please choose a different email');
            if ($this->user_model->check_email_exists($email)) {
                return true;
            }
            else {
                return false;
            }
        }
    }