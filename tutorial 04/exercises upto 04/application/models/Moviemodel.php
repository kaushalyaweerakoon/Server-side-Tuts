<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Moviemodel extends CI_Model{
    public function get_movies_by_genre($genre) {
        // $sql = "SELECT * FROM movies WHERE genre LIKE ?";
        // $genreWithWildcards = '%' . $genre . '%';
        // $query = $this->db->query($sql, array($genreWithWildcards));

        $this->db->select('title, director, genre, imdb_rating, release_year');
        $this->db->like('genre', $genre);
        $result = $this->db->get('movies')->result_array();

        if (count($result) > 0) {
            return $result; // Return movies as an array
        } else {
            return false; // No movies found
        }
    }

    public function get_all_movies() {
        // Query to select all movies
        $query = $this->db->get('movies')->result_array();

        // Check if any rows are returned
        if (count($query) > 0) {
            return $query; // Return movies as an array
        } else {
            return false; // No movies found
        }
    }
}