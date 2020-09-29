<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AgentProfileModel extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    public function load_view(){
        $this->check_user();
        //Common
        $this->session->set_userdata('active', 'agentprofile');
        $this->load->view('agentnav_view');
        $this->load->view('agentprofile_view');

        // Common
        $this->load->view('footer_view');
    }
    public function check_user(){
        if($this->session->userdata('landing')){
            if($this->session->userdata('landing') != 'Agent'){
                redirect(base_url().'index.php/login');
            }
        } else {
            redirect(base_url().'index.php/login');
        }
    }
    public function get_details(){
        $user_id = $this->session->userdata('user_id');
        $query = $this->db->get_where('users', array('id' => $user_id));
        return $query->result();
    }
    public function update_details($file_path){
        $user_id = $this->session->userdata('user_id');
        $data = array(
            'contrasena' => $this->input->post('profile-contrasena'),
            'telefono' => $this->input->post('profile-telefono'),
            'usuario' => $this->input->post('profile-usuario'),
            'image' => $file_path
        );
        if($this->db->update('users', $data, array('id' => $user_id ))){
            redirect($this->agent->referrer());
        } else {
            show_error($message = $this->db->error_message());
        }
    }
}