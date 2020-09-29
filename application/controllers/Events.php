<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {
    function index(){
        if($this->session->userdata('language')) {
			if($this->session->userdata('language') == 'english')
				$this->lang->load('en', 'english');
			else
				$this->lang->load('es', 'spanish');
		} else {
			$this->lang->load('en', 'english');
		}
        $this->load->model('EventsModel');
        $this->EventsModel->get_events();
		$this->EventsModel->load_view();
    }
    function delete(){
        $event_id = $this->uri->segment(3);
        $this->load->model('EventsModel');
        $this->EventsModel->delete_event($event_id);
    }
}