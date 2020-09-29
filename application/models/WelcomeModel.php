<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WelcomeModel extends CI_Model {
    function __construct()
    {
        $this->load->library('email');
        parent::__construct();
    }

    function load_view() {
        $this->session->set_userdata('active', 'home');
        $this->load->model('NavModel');
        $this->NavModel->load_view();
		$this->load->view('carousel_view');
        $this->load->view('welcome_message');
        $this->load->view('footer_view');
    }
    function send_email() {
        $this->form_validation->set_rules('newsletter_email','Email', 'required|valid_email');
        if ($this->form_validation->run() == FALSE)
        {
            show_error($message = validation_errors(), $heading = 'Validation errors');
        }
        else
        {
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'aspmx.l.google.com'; //aspmx.l.google.com
            $config['smtp_port'] = '25'; //25
            $config['smtp_timeout'] = '7';
            $config['smtp_user'] = 'leaneventinfo@gmail.com';
            $config['smtp_pass'] = 'helloworld123';
            $config['charset'] = 'utf-8';
            $config['newline'] = "\r\n";
            $config['mailtype'] = 'text'; // or html
            $config['validation'] = TRUE; // bool whether to validate email or not      
            $this->email->initialize($config);
            $this->email->from('leaneventinfo@gmail.com', 'Lean');
            $this->email->to($this->input->post('newsletter_email'));
            $this->email->subject('Send Email Codeigniter');
            $this->email->message('The email send using codeigniter library');
            if($this->email->send()){
                echo "email sent";
                redirect($this->agent->referrer(), 'refresh'); 
            }
            else {
                echo "Error in email sending";
                show_error($this->email->print_debugger());
            }
        }
    }
}
?>