<?php
    class Items extends CI_Controller {
        public function index() {
            $data['title'] = "Menu Items";

            $data['items'] = $this->item_model->get_items();

            $this->load->view('partials/header');
            $this->load->view('items/index', $data);
            $this->load->view('partials/footer');

        }

        public function details($id = NULL) {
            $data['item'] = $this->item_model->get_items($id);

            if (empty($data['item'])) {
                show_404();
            }

            $data['title'] = $data['item']['title'];

            $this->load->view('partials/header');
            $this->load->view('items/details', $data);
            $this->load->view('partials/footer');
        }

        public function add() {
            $data['title'] = 'Add Item';

            $this->form_validation->set_rules('title', 'Name of Item', 'required');
            $this->form_validation->set_rules('description', 'Description', 'required');
            $this->form_validation->set_rules('ingredients', 'Ingredients', 'required');
            $this->form_validation->set_rules('price-small', 'Price (small)', 'required');
            $this->form_validation->set_rules('price-medium', 'Price (medium', 'required');
            $this->form_validation->set_rules('price-large', 'Price (large)', 'required');
            $this->form_validation->set_rules('type', 'Item Type', 'required');

            if ($this->form_validation->run() === FALSE){
                $this->load->view('partials/header');
                $this->load->view('items/add', $data);
                $this->load->view('partials/footer');
            }
            else {
                // Upload Image
                $config['upload_path'] = './assets/images';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['max_width'] = '500';
                $config['max_height'] = '500';

                $this->load->library('upload', $config);

                if(!$this->upload->do_upload()) {
                    $errors = array('error' => $this->upload->display_errors());
                    $image_url = 'coffeePic.jpg';
                }
                else {
                    $data = array('upload_data' => $this->upload->data());
                    $image_url = $_FILES['userfile']['name'];
                }

                $this->item_model->add_item($image_url);

                // Set message
                $this->session->set_flashdata('item_added', 'The item was added to the database');
                redirect('index.php/items');
            }
        }

        public function delete($id) {
            $this->item_model->delete_item($id);
            redirect('index.php/items');
        }

        public function edit($id) {
            $data['item'] = $this->item_model->get_items($id);

            if (empty($data['item'])) {
                show_404();
            }

            $data['title'] = 'Edit Item';

            $this->load->view('partials/header');
            $this->load->view('items/edit', $data);
            $this->load->view('partials/footer');
        }

        public function update() {
            $new_image_url = $_FILES['userfile']['name'];
            if (!$new_image_url == NULL) {
                // Upload Image
                $config['upload_path'] = './assets/images';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['max_width'] = '500';
                $config['max_height'] = '500';

                $this->load->library('upload', $config);

                if(!$this->upload->do_upload()) {
                    $errors = array('error' => $this->upload->display_errors());
                    $image_url = 'coffeePic.jpg';
                }
                else {
                    $data = array('upload_data' => $this->upload->data());
                    $image_url = $_FILES['userfile']['name'];
                }
            }
            else {
                // set the $image_url to the old $image_url - nothing to upload
                $image_url = $old_image_url;
            }
            $this->item_model->update_item($image_url);

            // Set message
            $this->session->set_flashdata('item_updated', 'The item was updated');
            redirect('index.php/items');
        }
    }