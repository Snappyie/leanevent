<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterModel extends CI_Model {
    function __construct(){
        parent::__construct();
    }
    function load_view(){
        //Common
        $this->session->set_userdata('active', 'register');
        $this->load->model('NavModel');
        $this->NavModel->load_view();

        $this->load->view('register_view');

        // Common
        $this->load->view('footer_view');
    }
    function registerIndividual(){
        $this->form_validation->set_rules('correo-individual', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('contrasena-register-individual', 'Password', 'required');
        $this->form_validation->set_rules('nombre-register-individual', 'Firstname', 'required|regex_match[/^[a-zA-Z ]+$/]');
        $this->form_validation->set_rules('apellido-register-individual', 'Lastname', 'required|regex_match[/^[a-zA-Z ]+$/]');
        $this->form_validation->set_rules('direction-register-individual', 'Address', 'required');
        $this->form_validation->set_rules('ciudad-register-individual', 'City', 'required');
        $this->form_validation->set_rules('postal-register-individual', 'Postal Code', 'required|regex_match[/^[0-9]{5}$/]');
        if ($this->form_validation->run() == FALSE)
        {
            show_error($message = validation_errors(), $heading = 'Validation errors');
        }
        else{
            $data = array(
                'correo' => $this->input->post('correo-individual'),
                'contrasena' => $this->input->post('contrasena-register-individual') ,
                'nombre' => $this->input->post('nombre-register-individual'),
                'apellido' => $this->input->post('apellido-register-individual') ,
                'direccion' => $this->input->post('direction-register-individual') ,
                'ciudad' => $this->input->post('ciudad-register-individual'),
                'estado' => $this->input->post('select-city-individual') ,
                'codigo_postal' => $this->input->post('postal-register-individual') ,
                'tipo_de_registro' => 'Individual',
                'tipo_de_negocio' => NULL,
                'usuario' => NULL,
                'image' => NULL,
                'telefono' => NULL,
                'comision' => 0
             );
            $this->db->insert('users',$data);
            //change to login
            redirect($this->agent->referrer(), 'refresh'); 
        }
    }
    function registerBusiness(){
        $this->form_validation->set_rules('correo-business', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('contrasena-register-business', 'Password', 'required');
        $this->form_validation->set_rules('nombre-register-business', 'Firstname', 'required|regex_match[/^[a-zA-Z ]+$/]');
        $this->form_validation->set_rules('apellido-register-business', 'Lastname', 'required|regex_match[/^[a-zA-Z ]+$/]');
        $this->form_validation->set_rules('direction-register-business', 'Address', 'required');
        $this->form_validation->set_rules('ciudad-register-business', 'City', 'required');
        $this->form_validation->set_rules('postal-register-business', 'Postal Code', 'required|regex_match[/^[0-9]{5}$/]');
        if ($this->form_validation->run() == FALSE)
        {
            show_error($message = validation_errors(), $heading = 'Validation errors');
        }
        else{
            $data = array(
                'correo' => $this->input->post('correo-business'),
                'contrasena' => $this->input->post('contrasena-register-business') ,
                'nombre' => $this->input->post('nombre-register-business'),
                'apellido' => $this->input->post('apellido-register-business') ,
                'direccion' => $this->input->post('direction-register-business') ,
                'ciudad' => $this->input->post('ciudad-register-business'),
                'estado' => $this->input->post('select-city-business') ,
                'codigo_postal' => $this->input->post('postal-register-business') ,
                'tipo_de_registro' => 'Business',
                'tipo_de_negocio' => $this->input->post('negocio'),
                'usuario' => NULL,
                'image' => NULL,
                'telefono' => NULL,
                'comision' => 0
             );
            $this->db->insert('users',$data);
            //change to login
            redirect($this->agent->referrer(), 'refresh');
        }
    }
    function registerAgent(){
        $this->form_validation->set_rules('correo-agent', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('contrasena-register-agent', 'Password', 'required');
        $this->form_validation->set_rules('nombre-register-agent', 'Firstname', 'required|regex_match[/^[a-zA-Z ]+$/]');
        $this->form_validation->set_rules('apellido-register-agent', 'Lastname', 'required|regex_match[/^[a-zA-Z ]+$/]');
        $this->form_validation->set_rules('direction-register-agent', 'Address', 'required');
        $this->form_validation->set_rules('ciudad-register-agent', 'City', 'required');
        $this->form_validation->set_rules('postal-register-agent', 'Postal Code', 'required|regex_match[/^[0-9]{5}$/]');
        if ($this->form_validation->run() == FALSE)
        {
            show_error($message = validation_errors(), $heading = 'Validation errors');
        }
        else{
            $data = array(
                'correo' => $this->input->post('correo-agent'),
                'contrasena' => $this->input->post('contrasena-register-agent') ,
                'nombre' => $this->input->post('nombre-register-agent'),
                'apellido' => $this->input->post('apellido-register-agent') ,
                'direccion' => $this->input->post('direction-register-agent') ,
                'ciudad' => $this->input->post('ciudad-register-agent'),
                'estado' => $this->input->post('select-city-agent') ,
                'codigo_postal' => $this->input->post('postal-register-agent') ,
                'tipo_de_registro' => 'Agent',
                'tipo_de_negocio' => NULL,
                'usuario' => NULL,
                'image' => NULL,
                'telefono' => NULL,
                'comision' => 0
             );
            $this->db->insert('users',$data);
            //change to login
            redirect($this->agent->referrer(), 'refresh');
        }
    }
}