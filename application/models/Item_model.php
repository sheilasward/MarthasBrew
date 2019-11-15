<?php
    class Item_model extends CI_Model {
        public function __construct() {
            $this->load->database();
        }

        public function get_items($id = FALSE) {
            if ($id === FALSE) {
                $this->db->order_by('title');
                $query = $this->db->get('items');
                return $query->result_array();   
            }
            $query = $this->db->get_where('items', array('id' => $id));
            return $query ->row_array();
            
        }

        public function add_item($image_url) {
            $data = array(
                'type' => $this->input->post('type'),
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'), 
                'ingredients' => $this->input->post('ingredients'),
                'price-small' => $this->input->post('price-small'),
                'price-medium' => $this->input->post('price-medium'),
                'price-large' => $this->input->post('price-large'),
                'image-url' => $image_url
            );
            return $this->db->insert("items", $data);
        }

        public function delete_item($id) {
            $this->db->where('id', $id);
            $this->db->delete('items');
            return true;
        }

        public function update_item($image_url) {
            $data = array(
                'type' => $this->input->post('type'),
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'), 
                'ingredients' => $this->input->post('ingredients'),
                'price-small' => $this->input->post('price-small'),
                'price-medium' => $this->input->post('price-medium'),
                'price-large' => $this->input->post('price-large'),
                'image-url' => $image_url
            );
            $this->db->where('id', $this->input->post('id'));
            return $this->db->update('items', $data);
        }

    }