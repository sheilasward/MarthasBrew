<?php
    class Register_model extends CI_Model {
        function validate() {
            $arr['firstname'] = $this->input->post('firstname');
            $arr['lastname'] = $this->input->post('lastname');
            $arr['email'] = $this->input->post('email');
            $arr['password'] = $this->input->post('password');
            $arr['cpassword'] = $this->input->post('cpassword');
            return $this->db->get_where('users', $arr)->row();
        }
    }