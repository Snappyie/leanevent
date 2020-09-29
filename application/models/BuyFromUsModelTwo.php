<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BuyFromUsModelTwo extends CI_Model{
    public $event;
    function __construct(){
        parent::__construct();
    }
    function load_view(){
        //Common
        $this->session->set_userdata('active', 'buyfromus');
        $this->load->model('NavModel');
        $this->NavModel->load_view();

        $this->load->view('buyfromustwo_view');

        // Common
        $this->load->view('footer_view');
    }
    function set_event($event_id){
        $query = $this->db->get_where('events', array( 'id' => $event_id));
        $row = $query->result();
        $this->event = $row[0];
    }
}