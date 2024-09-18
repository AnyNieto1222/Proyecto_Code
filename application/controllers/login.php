<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function milogin() {
        
        $this->form_validation->set_rules('nombre', 'Nombre de Usuario', 'required|min_length[3]|max_length[50]|alpha_numeric');
        $this->form_validation->set_rules('numero', 'Contraseña', 'required|min_length[5]');

        if ($this->form_validation->run() == FALSE) {
         
            $this->load->view('login_view');
        } else {
        
            $nombre = $this->input->post('nombre');
            $numero = $this->input->post('numero');

            // Lista de usuarios y contraseñas
            $usuarios = [
                '123456y' => 'admin123',     // Usuario 1
                'ManuelVargas' => '210624',  // Usuario 2
                'AnyAndrea' => 'Any123',     // Usuario 3
                'YairdelosSantos' => 'negro123', // Usuario 4
                'CsCalderon' => 'Alejandro', // Usuario 5
            ];

     
            if (isset($usuarios[$nombre]) && $usuarios[$nombre] === $numero) {
              
                $nombresAsignados = [
                    '123456y' => 'Viviana Ramirez',
                    'ManuelVargas' => 'Manuel Vargas',
                    'AnyAndrea' => 'Jhojany Nieto',
                    'YairdelosSantos' => 'Yair De Los Santos',
                    'CsCalderon' => 'Hebert Calderon',
                ];
                
                $this->session->set_userdata('nombre', $nombresAsignados[$nombre]);
              
                redirect('home/home_message');
            } else {
                
                $this->session->set_flashdata('error', 'Número de usuario o contraseña incorrectos');
                redirect('login/milogin');
            }
        }
    }

  
    public function logout() {
        $this->session->sess_destroy(); 
        redirect('login/milogin');  
    }
}
