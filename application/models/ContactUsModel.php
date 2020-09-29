<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactUsModel extends CI_Model {
    function __construct(){
        parent::__construct();
    }
    function load_view(){
        //Common
        $this->session->set_userdata('active', 'contactus');
        $this->load->model('NavModel');
        $this->NavModel->load_view();

        $this->load->view('contactus_view');

        // Common
        $this->load->view('footer_view');
    }

    function sendMessage() {
        $this->form_validation->set_rules('nombre','Name','required|regex_match[/^[a-zA-Z ]+$/]');
        $this->form_validation->set_rules('apellido','Lastname','required|regex_match[/^[a-zA-Z ]+$/]');
        $this->form_validation->set_rules('correo','Email','required|valid_email');
        $this->form_validation->set_rules('tema','Topic','required');
        $this->form_validation->set_rules('mensaje','Message','required');
        if($this->form_validation->run() == FALSE){
            show_error($message = validation_errors(), $heading = "Validation Errors");
        } else {
            $data = array(
                'nombre' => $this->input->post('nombre'),
                'apellido' => $this->input->post('apellido'),
                'correo' => $this->input->post('correo'),
                'tema' => $this->input->post('tema'),
                'mensaje' => $this->input->post('mensaje')
            );
            $this->db->insert('contact_us', $data);
            redirect($this->agent->referrer(), 'refresh');
        }
    }
}