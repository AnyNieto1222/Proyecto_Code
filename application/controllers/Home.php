<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session'); // Cargar la biblioteca de sesión
    }

    public function home_message() {
        // Cargar la vista de bienvenida
        $this->load->view('welcome_view');
    }
}
