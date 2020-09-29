<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BuyFromUsTwo extends CI_Controller {
	public $event_id;
    function index(){
        if($this->session->userdata('language')) {
			if($this->session->userdata('language') == 'english')
				$this->lang->load('en', 'english');
			else
				$this->lang->load('es', 'spanish');
		} else {
			$this->lang->load('en', 'english');
		}
	}
	function getEvent(){
		$this->index();
		$event_id = $this->uri->segment(3);
		$this->event_id = $event_id;
		$this->load->model('BuyFromUsModelTwo');
		$this->BuyFromUsModelTwo->set_event($event_id);
		$this->BuyFromUsModelTwo->load_view();
	}
	function cart(){
		$event_id = $this->uri->segment(3);
		if($this->session->userdata('user_id')){
			if($this->session->userdata('landing') == 'Individual' || $this->session->userdata('landing') == 'Business'){
				$user_id = $this->session->userdata('user_id');
				$user_sql = "INSERT INTO `event_registration` (`user_id`,`event_id`) VALUES ('$user_id', '$event_id')";
				$event_count_res = $this->db->get_where('events', array('id' => $event_id));
				echo $event_count_res->result()[0]->event_count;
				echo $this->input->post('quantity');
				$updated_event_count = $event_count_res->result()[0]->event_count - $this->input->post('quantity');
				if($this->db->query($user_sql)){
					$data = array(
						'event_count' => $updated_event_count
					);
					$this->db->update('events',$data, array('id' => $event_id));
					redirect($this->agent->referrer());
				} else {
					show_error($message = $this->db->error_message(), $header = $this->db->error_number());
				}
			}
		} else {
			redirect(base_url().'index.php/login');
		}
	}
}