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
    
    public function getComunas(){
        $idComuna = $this->input->post("id");
        echo json_encode($this->gestionModel->getComunas($idComuna));
    }
    
    public function agregarNegocio(){
        $nombre = $this->input->post("nombre");
        $horario = $this->input->post("horario");
        $rutaImg = $this->input->post("rutaImg");
        $tipo = $this->input->post("tipo");
        $latitud = $this->input->post("latitud");
        $longitud = $this->input->post("longitud");
        $rutUsuario = $this->input->post("rutUsuario");
        $idRegion = $this->input->post("idRegion");
        $idProvincia = $this->input->post("idProvincia");
        $idComuna = $this->input->post("idComuna");
        echo json_encode($this->gestionModel->agregarNegocio($nombre,$horario,$rutaImg,$tipo,$latitud,$longitud,$rutUsuario,$idRegion,$idProvincia,$idComuna));
    }
    
    public function eliminarNegocio(){
        $idNegocio = $this->input->post("idNegocio");
        echo json_encode($this->gestionModel->eliminarNegocio($idNegocio));
    }
    
    public function actualizarNegocio(){
        $idNegocio = $this->input->post("idNegocio");
        $nombre = $this->input->post("nombre");
        $latitud = $this->input->post("latitud");
        $longitud = $this->input->post("longitud");
        $horario = $this->input->post("horario");
        $tipo = $this->input->post("tipo");
        echo json_encode($this->gestionModel->actualizarNegocio($idNegocio,$nombre,$horario,$tipo,$latitud,$longitud));
    }
    
    public function cerrarSesion(){
        $this->gestionModel->cerrarSesion();
    }
}
