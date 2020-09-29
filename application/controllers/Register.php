<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    public function index(){
        if($this->session->userdata('language')) {
			if($this->session->userdata('language') == 'english')
				$this->lang->load('en', 'english');
			else
				$this->lang->load('es', 'spanish');
		} else {
			$this->lang->load('en', 'english');
		}
		$this->load->model('RegisterModel');
		$this->RegisterModel->load_view();
	}
	public function registerUser() {
		$type = $this->uri->segment(3);
		$this->load->model('RegisterModel');
		if($type == 'individual')
			$this->RegisterModel->registerIndividual();
		else if($type == 'business')
			$this->RegisterModel->registerBusiness();
		else
			$this->RegisterModel->registerAgent();
	}
}