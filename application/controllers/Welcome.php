<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("gestionModel");
    }

    public function index() {
        $this->load->view('welcome_message');
    }

    public function admin() {
        if ($this->session->userdata("usuario")) {
            $this->load->view('moduloAdmin');
        }else{
            $this->load->view('welcome_message');
        }
            
    }

    public function validarUsuario() {
        $rut = $this->input->post("lrut");
        $pass = $this->input->post("lpass");
        echo json_encode($this->gestionModel->validarUsuario($rut, $pass));
    }
    
    public function getUsuario(){
        echo json_encode($this->gestionModel->getUsuario());
    }
    
    public function getNegocios(){
        echo json_encode($this->gestionModel->getNegocios());
    }
    
    public function getRegiones(){
        echo json_encode($this->gestionModel->getRegiones());
    }
    
    public function getProvincias(){
        $idRegion = $this->input->post("id");
        echo json_encode($this->gestionModel->getProvincias($idRegion));
    }
}
