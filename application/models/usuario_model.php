<?php
class Usuario_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database('proyecto'); 
    }
    public function insertar_contacto($data) {
        return $this->db->insert('contactos', $data);
    }

    public function obtener_contactos() {
       
        $query = $this->db->get('contactos');
        return $query->result();
    }

    public function obtener_contacto_por_id($id) {
        $query = $this->db->get_where('contactos', array('id' => $id));
        return $query->row();
    }

    public function actualizar_contacto($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('contactos', $data);
    }

    public function eliminar_contacto($id) {
        $this->db->where('id', $id);
        return $this->db->delete('contactos');
    }
}
