<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BuyFromUs extends CI_Controller {
    function index(){
        if($this->session->userdata('language')) {
			if($this->session->userdata('language') == 'english')
				$this->lang->load('en', 'english');
			else
				$this->lang->load('es', 'spanish');
		} else {
			$this->lang->load('en', 'english');
		}
		$this->load->model('BuyFromUsModel');
		$this->BuyFromUsModel->load_view();
    }
}