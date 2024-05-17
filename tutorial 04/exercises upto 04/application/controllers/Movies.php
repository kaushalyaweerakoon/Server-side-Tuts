<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movies extends CI_Controller{

    public function __construct() {
        parent::__construct();
        $this->load->helper('url'); // Load the URL helper
        $this->load->helper('form'); // Load the Form Helper
        $this->load->model('Moviemodel'); // Load the Moviemodel
    }

    public function index(){
        $this->load->view('search_movies');
    }

    public function search() {
        $genre = $this->input->post('genre'); // Get the genre from the form
        $data['movies'] = $this->Moviemodel->get_movies_by_genre($genre); // Call the Moviemodel method to search by genre
        $this->load->view('search_results', $data); // Load the view with search results
    }

    public function allmovies() {
        $data['movies'] = $this->Moviemodel->get_all_movies(); // Call the Moviemodel method to get all movies
        $this->load->view('all_movies', $data); // Load the view to display all movies
    }
}