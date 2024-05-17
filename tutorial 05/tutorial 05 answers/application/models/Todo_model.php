<?php

class Todo_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function add_todo_action($user_id, $action_title) {
        $data = array(
            'user_id' => $user_id,
            'action_title' => $action_title
        );
        $this->db->insert('todos', $data);
    }

    public function get_todo_actions($user_id) {
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('todos');
        return $query->result_array();
    }

}