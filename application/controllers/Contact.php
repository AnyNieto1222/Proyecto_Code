<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('usuario_model'); 
        $data['contactos'] = $this->usuario_model->get_all_contacts();
        var_dump($data['contactos']);
        $this->load->view('contact_views', $data);
    }

    public function Contact_views() {
        $this->load->view('header');

        
        $this->form_validation->set_rules('nombre', 'Nombre', 'required|min_length[3]|max_length[50]|alpha');
        $this->form_validation->set_rules('habilidades', 'Habilidades', 'required|min_length[3]|max_length[100]');
        $this->form_validation->set_rules('experiencia', 'Experiencia', 'required|numeric|greater_than_equal_to[0]');
        $this->form_validation->set_rules('Num', 'Número de identificación', 'required|numeric|min_length[8]|max_length[12]');
        $this->form_validation->set_rules('Correo', 'Correo', 'required|valid_email');

        $this->form_validation->set_message('required', 'El campo %s es requerido.' );
		$this->form_validation->set_message('min_length', 'El campo %s bebe ser un número natural.');
		$this->form_validation->set_message('alpha', 'El campo %s debe tener letras y número.');
        $data = [];

      
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            if ($this->form_validation->run() == FALSE) {
              
                $data['nombre'] = set_value('nombre');
                $data['habilidades'] = set_value('habilidades');
                $data['experiencia'] = set_value('experiencia');
                $data['Num'] = set_value('Num');
                $data['Correo'] = set_value('Correo');
            } else {
               
                $data_to_insert = array(
                    'nombre' => $this->input->post('nombre'),
                    'habilidades' => $this->input->post('habilidades'),
                    'experiencia' => $this->input->post('experiencia'),
                    'numero_identificacion' => $this->input->post('Num'),
                    'correo' => $this->input->post('Correo')
                );

                if ($this->db->insert('contactos', $data_to_insert)) {
                 
                    $data['success'] = "Datos insertados con éxito.";
                } else {
                  
                    $data['error'] = "Hubo un problema al insertar los datos.";
                }
            }
        }

        
        $this->load->view('Contact_views', $data);
    }
}
