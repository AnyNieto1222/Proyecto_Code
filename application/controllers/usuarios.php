<?php
class Usuarios extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('usuario_model');
        $this->load->library('form_validation');
    }

    public function agregar_contacto() {
        
        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        $this->form_validation->set_rules('habilidades', 'Habilidades', 'required');
        $this->form_validation->set_rules('numero_identificacion', 'Número de identificación', 'required');
        $this->form_validation->set_rules('Correo', 'Correo', 'required|valid_email');

        if ($this->form_validation->run() == FALSE) {
           
            $this->cargar_vista();
        } else {
    
            $data = array(
                'nombre' => $this->input->post('nombre'),
                'habilidades' => $this->input->post('habilidades'),
                'numero_identificacion' => $this->input->post('numero_identificacion'),
                'correo' => $this->input->post('Correo')
            );

            
            if ($this->usuario_model->insertar_contacto($data)) {
                $this->cargar_vista(array('success' => 'Datos guardados con éxito.'));
            } else {
                $this->cargar_vista(array('error' => 'No se pudo guardar los datos.'));
            }
        }
    }

    public function cargar_vista($data = array()) {
        
        $data['contacts'] = $this->usuario_model->obtener_contactos();
        $this->load->view('header');
        $this->load->view('Contact_views', $data);
    }

    public function editar_contacto($id) {
        
        $data['contact'] = $this->usuario_model->obtener_contacto_por_id($id);

        if (empty($data['contact'])) {
            show_404();
        }

        $this->load->view('header');
        $this->load->view('editar_contacto', $data);
    }

    public function actualizar_contacto() {
        $id = $this->input->post('id');
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'correo' => $this->input->post('correo'),
            'habilidades' => $this->input->post('habilidades')
        );

        
        if ($this->usuario_model->actualizar_contacto($id, $data)) {
            $this->cargar_vista(array('success' => 'Contacto actualizado con éxito.'));
        } else {
            $this->cargar_vista(array('error' => 'No se pudo actualizar el contacto.'));
        }
    }

    public function eliminar_contacto($id) {
        
        if ($this->usuario_model->eliminar_contacto($id)) {
            $this->cargar_vista(array('success' => 'Contacto eliminado con éxito.'));
        } else {
            $this->cargar_vista(array('error' => 'No se pudo eliminar el contacto.'));
        }
    }
}
