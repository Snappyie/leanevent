<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {
    function __construct(){
        parent::__construct();
    }
    function load_view(){
        //Common
        $this->session->set_userdata('active', 'login');
        $this->load->model('NavModel');
        $this->NavModel->load_view();

        $this->load->view('login_view');

        // Common
        $this->load->view('footer_view');
    }
    function get_user_type($query){
        $row = $query->result();
        return $row[0]->tipo_de_registro;
    }
    function get_user_id($query){
        $row = $query->result();
        return $row[0]->id;
    }
    function login() {
        $data = array(
            'correo' => $this->input->post('usuario'),
            'contrasena' => $this->input->post('contrasena')
        );
        $query = $this->db->get_where('users', $data);
        if($query->num_rows() == 0)
            show_error($message = "Please enter valid credentials.", $header = "Invalid credentials");
        $type = $this->get_user_type($query);
        $this->session->set_userdata('user_id', $this->get_user_id($query));
        if($type == 'Individual'){
            $this->session->set_userdata('landing', 'Individual');
            redirect('index.php/individualhome');
        }
        else if($type == 'Business'){
            $this->session->set_userdata('landing', 'Business');
            redirect('index.php/businesshome');
        }
        else{
            $this->session->set_userdata('landing', 'Agent');
            redirect('index.php/agenthome');
        }
    }
}