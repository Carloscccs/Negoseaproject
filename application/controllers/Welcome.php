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
    
    public function dueño(){
        if ($this->session->userdata("usuario")) {
            $this->load->view('moduloDueno');
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
    
    public function getUsuarios(){
        echo json_encode($this->gestionModel->getUsuarios());
    }
    
    public function eliminarUsuario(){
        $Rut = $this->input->post("idNegocio");
        echo json_encode($this->gestionModel->eliminarUsuario($Rut));
    }
    
    public function modificarUsuario1(){
        $Rut = $this->input->post("Rut");
        $Nombre = $this->input->post("nombre");
        $Apellido = $this->input->post("apellido");
        $Clave = $this->input->post("clave");
        $Edad = $this->input->post("edad");
        $Correo = $this->input->post("correo");
        echo json_encode($this->gestionModel->modificarUsuario1($Rut,$Nombre,$Apellido,$Clave,$Edad,$Correo));
    }
    
    public function getIdNegocio(){
        $Rut = $this->input->post("Rut");
        echo json_encode($this->gestionModel->getIdNegocio($Rut));
    }
    
    public function agregarProducto(){
        $nombre = $this->input->post("nombre");
        $precio = $this->input->post("precio");
        $rutaImg = $this->input->post("rutaImg");
        $tipoProducto = $this->input->post("tipoProducto");
        $estado = $this->input->post("estado");
        echo json_encode($this->gestionModel->agregarProducto($nombre,$precio,$rutaImg,$tipoProducto,$estado));
    }
    
    public function getProductosNegocio(){
        $idNegocio = $this->input->post("idNegocio");
        echo json_encode($this->gestionModel->getProductosNegocio(6));
    }
    
    public function eliminarProducto(){
        $idProducto = $this->input->post("idProducto");
        echo json_encode($this->gestionModel->eliminarProducto($idProducto));
    }
    
    public function modificarProducto(){
        $idProducto = $this->input->post("idProducto");
        $nombre = $this->input->post("nombre");
        $precio = $this->input->post("precio");
        $tipo = $this->input->post("tipo");
        $estado = $this->input->post("estado");
        echo json_encode($this->gestionModel->modificarProducto($idProducto,$nombre,$precio,$tipo,$estado));
    }
}
