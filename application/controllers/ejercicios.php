<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ejercicios extends CI_Controller{ 

    public function ejercicios1() {
       
            $this->load->helper('url');
        $this->load->view('vista_ejercicios');
    }
    public function semana1_array_ejercicio() {
        $this->load->view('array_ejercicio');
    }
    
    public function semana1_switch_ejercicio() {
        $this->load->view('switch_ejercicio');
    }
    
    public function semana1_foreach_ejercicio() {
        $this->load->view('foreach_ejercicio');
    }
   
}


