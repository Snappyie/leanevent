<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BusinessHome extends CI_Controller {
    function index(){
        if($this->session->userdata('language')) {
			if($this->session->userdata('language') == 'english')
				$this->lang->load('en', 'english');
			else
				$this->lang->load('es', 'spanish');
		} else {
			$this->lang->load('en', 'english');
		}
		$this->load->model('BusinessHomeModel');
		$this->BusinessHomeModel->load_view();
    }
    function registerEvent(){
        $event_id = $this->uri->segment(3);
        $user_id = $this->session->userdata('user_id');
        $this->load->model('BusinessHomeModel');
        $this->BusinessHomeModel->register_event($event_id, $user_id);
    }
}