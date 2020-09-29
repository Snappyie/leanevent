<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NavController extends CI_Controller {
    public function index()
	{
		if($this->session->userdata('language')) {
			if($this->session->userdata('language') == 'english')
				$this->lang->load('en', 'english');
			else
				$this->lang->load('es', 'spanish');
		} else {
			$this->lang->load('en', 'english');
		}
		$this->load->model('NavModel');
		$this->NavModel->load_view();
	}
	public function changeToEnglish() {
		$this->session->set_userdata('language', 'english');
		redirect($this->agent->referrer(), 'refresh'); 
	}
	public function changeToSpanish() {
		$this->session->set_userdata('language', 'spanish');
		redirect($this->agent->referrer(), 'refresh'); 
	}
}