<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddEventModel extends CI_Model{
    public $events;
    public function __construct(){
        parent::__construct();
    }
    public function load_view(){
        $this->check_user();
        //Common
        $this->session->set_userdata('active', 'events');
        $this->load->view('agentnav_view');
        $this->load->view('addevent_view');

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
    public function get_details($event_id){
        $query = $this->db->get_where('events', array('id' => $event_id));
        $this->events = $query->result();
    }
    public function add_event($file_path){
        $data = array(
            'nombre_del_evento' => $this->input->post('profile-nombre'),
            'encargados' => $this->input->post('responsable'),
            'place' => $this->input->post('lugar'),
            'fecha' => $this->input->post('fecha'),
            'hora' => $this->input->post('hora'),
            'valor_de_boleto' => $this->input->post('valor_de_boleto'),
            'imagen' => $file_path,
            'tema' => 'tema',
            'event_count' => 10
        );
        $this->db->insert('events',$data);
        redirect(base_url().'index.php/events');
    }
    public function update_details($event_id, $file_path){
        $data = array(
            'nombre_del_evento' => $this->input->post('profile-nombre'),
            'encargados' => $this->input->post('responsable'),
            'place' => $this->input->post('lugar'),
            'fecha' => $this->input->post('fecha'),
            'hora' => $this->input->post('hora'),
            'valor_de_boleto' => $this->input->post('valor_de_boleto'),
            'imagen' => $file_path,
            'tema' => 'tema'
        );
        $this->db->update('events',$data, array('id' => $event_id));
        redirect(base_url().'index.php/events');
    }
}