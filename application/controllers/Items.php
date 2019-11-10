<?php
    class Items extends CI_Controller {
        public function index() {
            $data['title'] = "Menu Items";

            $data['items'] = $this->item_model->get_items();

            $this->load->view('partials/header');
            $this->load->view('items/index', $data);
            $this->load->view('partials/footer');

        }
    }