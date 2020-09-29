<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VolunteerListModel extends CI_Model{
    public $volunteers;
    public function __construct(){
        parent::__construct();
    }
    public function load_view(){
        $this->check_user();
        //Common
        $this->session->set_userdata('active', 'volunteerlist');
        $this->load->view('agentnav_view');
        $this->load->view('volunteerlist_view');

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
    public function get_volunteers(){
        $sql = "SELECT users.image, users.nombre, users.correo, users.telefono, events.nombre_del_evento, events.encargados
        FROM event_registration
            INNER JOIN users
                ON event_registration.user_id = users.id
            INNER JOIN events 
                ON event_registration.event_id = events.id WHERE users.tipo_de_registro = 'Individual'";
        $query = $this->db->query($sql);
        $this->volunteers = $query->result();
    }
}