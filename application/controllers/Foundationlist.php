<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FoundationList extends CI_Controller {
    function index(){
        if($this->session->userdata('language')) {
			if($this->session->userdata('language') == 'english')
				$this->lang->load('en', 'english');
			else
				$this->lang->load('es', 'spanish');
		} else {
			$this->lang->load('en', 'english');
		}
        $this->load->model('FoundationListModel');
        $this->FoundationListModel->get_foundations();
		$this->FoundationListModel->load_view();
    }
    function updateFoundation(){
        $this->form_validation->set_rules('commission', 'Commission', 'required');
        if($this->form_validation->run() == FALSE)
            show_error($message = validation_errors(), $header = "Validation error");
        else{
            $user_id = $this->uri->segment(3);
            $this->load->model('FoundationListModel');
            $this->FoundationListModel->update_foundation($user_id);
        }
    }
}