<?php
    class User_model extends CI_Model {

        // User Register
        public function register($enc_password) {
            // User data array
            $data = array(
                'FirstName' => $this->input->post('firstname'),
                'LastName' => $this->input->post('lastname'),
                'zipcode' => $this->input->post('zipcode'),
                'email' => $this->input->post('email'),
                'username' => $this->input->post('email'),
                'password' => $enc_password,
            );

            // Insert user into database
            return $this->db->insert('users', $data);
        }

        // User Login
        public function login($email, $enc_password) {
            // Validate
            $this->db->where('email', $email);
            $this->db->where('password', $enc_password);

            $result = $this->db->get('users');

            if ($result->num_rows() == 1) {
                return $result->row(0)->id;
            }
            else {
                return false;
            }
        }

        // Check email exists
        public function check_email_exists($email) {
            $query = $this->db->get_where('users', array('email' => $email));
            if (empty($query->row_array())){
                return true;
            }
            else {
                return false;
            }
        }
    }
?>