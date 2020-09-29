<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AgentHomeModel extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    public function load_view(){
        $this->check_user();
        //Common
        $this->session->set_userdata('active', 'home');
        $this->load->view('agentnav_view');
        $this->load->view('carousel_view');
        $this->load->view('agenthome_view');

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
}