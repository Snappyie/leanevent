<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IndividualProfile extends CI_Controller {
    function index(){
        if($this->session->userdata('language')) {
			if($this->session->userdata('language') == 'english')
				$this->lang->load('en', 'english');
			else
				$this->lang->load('es', 'spanish');
		} else {
			$this->lang->load('en', 'english');
		}
        $this->load->model('IndividualProfileModel');
        $this->IndividualProfileModel->get_details();
		$this->IndividualProfileModel->load_view();
    }
    function update(){
        $this->form_validation->set_rules('profile-telefono', 'Telephone', 'required');
        $this->form_validation->set_rules('profile-usuario', 'Username', 'required');
        $this->form_validation->set_rules('profile-contrasena', 'Password', 'required');
        if($this->form_validation->run() == FALSE) {
            show_error($message = validation_errors(), $heading = "Validation Errors");
        } else {
            $this->load->model('IndividualProfileModel');
            $file_path = "";
            if($this->IndividualProfileModel->get_details()[0]->image == NULL)
                $file_path = $this->do_upload();
            else if(strlen($_FILES['fileToUpload']['name']) > 0){
                $file_path = $this->do_upload();
            }
            else
                $file_path = $this->IndividualProfileModel->get_details()[0]->image;
            $this->IndividualProfileModel->update_details($file_path);
        }
    }
    public function regex_check_telephone($str)
    {
        if (preg_match("/^\d{3}[-.\s]?\d{3}[-.\s]?\d{4}$/", $str))
        {
            $this->form_validation->set_message('regex_check_telephone', 'The %s field is not valid!');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }
    public function do_upload()
    {
            $ext = explode(".", $_FILES['fileToUpload']['name']);
            $config['upload_path']          = 'application/assets/images/users/';
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