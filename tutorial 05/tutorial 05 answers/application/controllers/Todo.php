<?php
// Todo.php controller

class Todo extends CI_Controller {
    
    public function index() {
        // Load necessary libraries and models
        $this->load->helper('url'); // Load URL helper
        $this->load->library('session');
        $this->load->model('Todo_model');

        // Check if user ID exists in session
        $user_id = $this->session->userdata('user_id');
        if (!$user_id) {
            // Generate unique user ID
            $user_id = uniqid();
            // Store user ID in session
            $this->session->set_userdata('user_id', $user_id);
            // Log user ID
            log_message('info', 'User ID generated: ' . $user_id);
        }
        
        // Get existing todo actions for user
        $todo_actions = $this->Todo_model->get_todo_actions($user_id);

        // Load the view containing the form and existing actions
        $this->load->view('todo_form', array('todo_actions' => $todo_actions));
    }

    public function add_todo_action() {
        // Load necessary libraries and models
        $this->load->helper('url'); // Load URL helper
        $this->load->library('session');
        $this->load->model('Todo_model');

        // Get user ID from session
        $user_id = $this->session->userdata('user_id');

        if (!$user_id) {
            // Generate unique user ID
            $user_id = uniqid();
            // Store user ID in session
            $this->session->set_userdata('user_id', $user_id);
            // Log user ID
            log_message('info', 'User ID generated: ' . $user_id);
        }

        // Get action title from form
        $action_title = $this->input->post('action_title');

        // Add new todo action
        $this->Todo_model->add_todo_action($user_id, $action_title);

        // Redirect back to the todo form
        // Get existing todo actions for user
        $todo_actions = $this->Todo_model->get_todo_actions($user_id);

        // Load the view containing the form and existing actions
        $this->load->view('todo_form', array('todo_actions' => $todo_actions));
    }

}
