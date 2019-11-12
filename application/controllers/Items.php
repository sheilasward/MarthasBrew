<?php
    class Items extends CI_Controller {
        public function index() {
            $data['title'] = "Menu Items";

            $data['items'] = $this->item_model->get_items();

            $this->load->view('partials/header');
            $this->load->view('items/index', $data);
            $this->load->view('partials/footer');

        }

        public function details() {
            $data['item'] = $this->item_model->get_items();

            $this->load->view('partials/header');
            $this->load->view('items/details', $data);
            $this->load->view('partials/footer');
        }

        public function add() {
            $this->load->view('partials/header');
            $this->load->view('items/add');
            $this->load->view('partials/footer');
        }

        public function verify() {

        }
    }