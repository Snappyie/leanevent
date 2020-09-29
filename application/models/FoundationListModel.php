<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FoundationListModel extends CI_Model{
    public $foundations;
    public function __construct(){
        parent::__construct();
    }
    public function load_view(){
        $this->check_user();
        //Common
        $this->session->set_userdata('active', 'foundationlist');
        $this->load->view('agentnav_view');
        $this->load->view('foundationlist_view');

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
    public function get_foundations(){
        $sql = "SELECT users.id, users.image, users.nombre, users.comision, events.nombre_del_evento, events.encargados
        FROM event_registration
            INNER JOIN users
                ON event_registration.user_id = users.id
            INNER JOIN events 
                ON event_registration.event_id = events.id WHERE users.tipo_de_registro = 'Business'";
        $query = $this->db->query($sql);
        $this->foundations = $query->result();
    }
    public function update_foundation($user_id){
        $commission = $this->input->post("commission");
        if($this->db->query("UPDATE users SET `comision`='$commission' WHERE `id`='$user_id'")) {
            redirect($this->agent->referrer());
        } else {
            show_error($message = $this->db->error_message(), $heading = $this->db->error_number());
        }
    }
}