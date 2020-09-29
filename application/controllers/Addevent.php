<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class AddEvent extends CI_Controller {
    function index(){
        if($this->session->userdata('language')) {
			if($this->session->userdata('language') == 'english')
				$this->lang->load('en', 'english');
			else
				$this->lang->load('es', 'spanish');
		} else {
			$this->lang->load('en', 'english');
		}
        $this->load->model('AddEventModel');
		$this->AddEventModel->load_view();
    }
    function edit(){
        if($this->session->userdata('language')) {
			if($this->session->userdata('language') == 'english')
				$this->lang->load('en', 'english');
			else
				$this->lang->load('es', 'spanish');
		} else {
			$this->lang->load('en', 'english');
		}
        $event_id = $this->uri->segment(3);
        $this->load->model('AddEventModel');
        $this->AddEventModel->get_details($event_id);
        $this->AddEventModel->load_view();
    }
    function update(){
        $this->form_validation->set_rules('profile-nombre', 'Name', 'required');
        $this->form_validation->set_rules('responsable', 'Responsible', 'required');
        $this->form_validation->set_rules('lugar', 'Place', 'required');
        $this->form_validation->set_rules('fecha', 'Date', 'required');
        $this->form_validation->set_rules('hora', 'Time', 'required');
        $this->form_validation->set_rules('valor_de_boleto', 'Price', 'required');
        if($this->form_validation->run() == FALSE){
            show_error($message = validation_errors(), $heading = "Validation errors");
        } else {
            $event_id = $this->uri->segment(3);
            $this->load->model('AddEventModel');
            $this->AddEventModel->get_details($event_id);
            $file_path = "";
            if($this->AddEventModel->events[0]->imagen == NULL){
                $file_path = $this->do_upload();
            }
            else if(strlen($_FILES['fileToUpload']['name']) > 0){
                $file_path = $this->do_upload();
            } else {
                $file_path = $this->AddEventModel->get_details($event_id)[0]->imagen;
            }
		    $this->AddEventModel->update_details($event_id, $file_path);
        }
    }
    function add(){
        $this->form_validation->set_rules('profile-nombre', 'Name', 'required');
        $this->form_validation->set_rules('responsable', 'Responsible', 'required');
        $this->form_validation->set_rules('lugar', 'Place', 'required');
        $this->form_validation->set_rules('fecha', 'Date', 'required');
        $this->form_validation->set_rules('hora', 'Time', 'required');
        $this->form_validation->set_rules('valor_de_boleto', 'Price', 'required');
        if($this->form_validation->run() == FALSE){
            show_error($message = validation_errors(), $heading = "Validation errors");
        } else {
            $this->load->model('AddEventModel');
            $file_path = $this->do_upload();
		    $this->AddEventModel->add_event($file_path);
        }
    }
    public function do_upload()
    {
            $ext = explode(".", $_FILES['fileToUpload']['name']);
            $config['upload_path']          = 'application/assets/images/events/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['file_name']             = uniqid().".".end($ext);

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('fileToUpload'))
            {
                    $error = array('error' => $this->upload->display_errors());

                    show_error($error);
            }
            else
            {
                    $data = array('upload_data' => $this->upload->data());

                    return $this->upload->data('file_name');
            }
    }
}