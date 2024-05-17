<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dinosaurs_model extends CI_Model {

    public function get_period_info($period) {
        // Array to store period information (replace this with your actual data)
        $periods_data = array(
            'Triassic' => array(
                'title' => 'Triassic period',
                'info' => array(
                    'Period' => '237-201 mya',
                    'Land Animals' => 'Archosaurs ("ruling lizards")',
                    'Marine Animals' => 'Therapsids ("mammal-like reptiles")',
                    'Avian Animals' => 'Plesiosaurs, ichthyosaurs, fish',
                    'Plant Life' => 'Cycads, ferns, Gingko-like trees, and seed plants'
                )
            ),
            'Jurassic' => array(
                'title' => 'Jurassic period',
                'info' => array(
                    'Period' => '201-145 mya',
                    'Land Animals' => 'Dinosaurs (sauropods, therapods), Early mammals and Feathered dinosaurs',
                    'Marine Animals' => 'Plesiosaurs, fish, squid, marine reptiles',
                    'Avian Animals' => 'Pterosaurs and Flying insects',
                    'Plant Life' => 'Ferns, conifers, cycads, club mosses, horsetail, flowering plants'
                )
            ),
            'Cretaceous' => array(
                'title' => 'Cretaceous period',
                'info' => array(
                    'Period' => '145-66 mya',
                    'Land Animals' => 'Dinosaurs (sauropods, therapods, raptors, hadrosaurs, herbivorous ceratopsians) and Small tree-dwelling mammals',
                    'Marine Animals' => 'Plesiosaurs, pliosaurs, mosasaurs, sharks, fish, squid, marine reptiles',
                    'Avian Animals' => 'Pterosaurs, Flying insects, Feathered birds',
                    'Plant Life' => 'Huge expansion of flowering plants'
                )
            )
        );
        // Check if the specified period exists in the array
        if (array_key_exists($period, $periods_data)) {
            return $periods_data[$period];
        } else {
            // Return an error message or handle appropriately
            return 'Period information not found.';
        }
    }
}
