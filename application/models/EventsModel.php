<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EventsModel extends CI_Model{
    public $events;
    public function __construct(){
        parent::__construct();
    }
    public function load_view(){
        $this->check_user();
        //Common
        $this->session->set_userdata('active', 'events');
        $this->load->view('agentnav_view');
        $this->load->view('events_view');

        // Common
        $this->load->view('footer_view');
    }
    public function check_user(){
        if($this->session->userdata('landing')){
            if($this->session->userdata('landing') != 'Agent'){
                redirect(base_url().'index.php/login');
            }
        } else {
            redirect(base_url().'index.php/login');
        }
    }
    public function get_events(){
        $query = $this->db->get('events');
        $this->events = $query->result();
    }
    public function delete_event($event_id){
        $this->db->delete('events', array('id' => $event_id));
        redirect($this->agent->referrer());
    }
}