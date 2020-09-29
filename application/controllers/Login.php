<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function index(){
        if($this->session->userdata('language')) {
			if($this->session->userdata('language') == 'english')
				$this->lang->load('en', 'english');
			else
				$this->lang->load('es', 'spanish');
		} else {
			$this->lang->load('en', 'english');
		}
		$this->load->model('LoginModel');
		$this->LoginModel->load_view();
	}
	public function loginRequest() {
		$this->form_validation->set_rules('usuario', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('contrasena', 'Password', 'required');
		if($this->form_validation->run() == FALSE){
			show_error($message = validation_errors(), $heading = 'Validation errors');
		} else {
			$this->load->model('LoginModel');
			$this->LoginModel->login();
		}
	}
}