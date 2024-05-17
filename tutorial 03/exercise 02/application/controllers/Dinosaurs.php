<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dinosaurs extends CI_Controller {

    public function periods() {
        // Load the URL Helper
        $this->load->helper('url');

        // Load the main view with links to geological periods
        $this->load->view('dinosaurs_periods');
    }

    public function getinfo($period) {
        // Load the URL Helper
        $this->load->helper('url');

        // Load the model to retrieve information about the specified period
        $this->load->model('dinosaurs_model');

        // Get information about the specified period from the model
        $data['period_info'] = $this->dinosaurs_model->get_period_info($period);

        // Load the view to display information about the specified period
        $this->load->view('dinosaurs_getinfo', $data);
    }
}
