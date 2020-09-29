<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NavModel extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function load_view(){
        $this->load->view('nav_view');
    }
}