<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed!');

class Aboutus extends CI_Controller {
    public function index(){
        if($this->session->userdata('language')) {
			if($this->session->userdata('language') == 'english')
				$this->lang->load('en', 'english');
			else
				$this->lang->load('es', 'spanish');
		} else {
			$this->lang->load('en', 'english');
        }
        $this->load->model('AboutUsModel');
        $this->AboutUsModel->load_view();
    }
}
