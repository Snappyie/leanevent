<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactUs extends CI_Controller {
    public function index(){
        if($this->session->userdata('language')) {
			if($this->session->userdata('language') == 'english')
				$this->lang->load('en', 'english');
			else
				$this->lang->load('es', 'spanish');
		} else {
			$this->lang->load('en', 'english');
		}
		$this->load->model('ContactUsModel');
		$this->ContactUsModel->load_view();
    }
    public function sendMessage() {
        $this->load->model('ContactUsModel');
		$this->ContactUsModel->sendMessage();
    }
}