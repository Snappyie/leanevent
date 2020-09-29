<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BuyFromUsModel extends CI_Model {
    function __construct(){
        parent::__construct();
    }
    function load_view(){
        //Common
        $this->session->set_userdata('active', 'buyfromus');
        $this->load->model('NavModel');
        $this->NavModel->load_view();

        $this->load->view('buyfromus_view');

        // Common
        $this->load->view('footer_view');
    }
    function get_event_count(){
        $query = $this->db->get('events');
        return $query->num_rows();
    }
    function get_events(){
        $query = $this->db->get('events');
        return $query->result();
    }
}