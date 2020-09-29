<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AboutUsModel extends CI_Model {
    function __construct(){
        parent::__construct();
    }
    function load_view(){
        //Common
        $this->session->set_userdata('active', 'aboutus');
        $this->load->model('NavModel');
        $this->NavModel->load_view();

        $this->load->view('aboutus_view');

        // Common
        $this->load->view('footer_view');
    }
}