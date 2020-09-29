<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BusinessHomeModel extends CI_Model{
    public $events;
    public function __construct(){
        parent::__construct();
    }
    public function load_view(){
        $this->check_user();
        $this->get_events();
        //Common
        $this->session->set_userdata('active', 'home');
        $this->load->view('businessnav_view');

        $this->load->view('businesshome_view');

        // Common
        $this->load->view('footer_view');
    }
    public function get_events(){
        $user_id = $this->session->userdata('user_id');
        $query = $this->db->query("SELECT * 
        FROM `events` 
        WHERE `id` NOT IN (SELECT `event_id` 
              FROM `event_registration` 
              WHERE `user_id` = '$user_id')", FALSE);
        $this->events = $query->result();
    }
    public function check_user(){
        if($this->session->userdata('landing')){
            if($this->session->userdata('landing') != 'Business'){
                redirect(base_url().'index.php/login');
            }
        } else {
            redirect(base_url().'index.php/login');
        }
    }
    public function register_event($event_id, $user_id){
        $sql = "INSERT INTO `event_registration` (`user_id`,`event_id`) VALUES ('$user_id', '$event_id')";
        if($this->db->query($sql)){
            redirect($this->agent->referrer());
        } else {
            show_error($message = $this->db->error_message(), $header = $this->db->error_number());
        }
    }
}