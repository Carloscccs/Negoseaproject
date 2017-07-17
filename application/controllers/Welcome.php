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
        } else {
            $this->load->view('welcome_message');
        }
    }

    public function venta() {
        if ($this->session->userdata("usuario")) {
            $this->load->view('moduloVenta');
        } else {
            $this->load->view('welcome_message');
        }
    }

    public function usuario() {
        if ($this->session->userdata("usuario")) {
            $this->load->view('moduloUsuario');
        } else {
            $this->load->view('welcome_message');
        }
    }

    public function dueño() {
        if ($this->session->userdata("usuario")) {
            $this->load->view('moduloDueno');
        } else {
            $this->load->view('welcome_message');
        }
    }

    public function validarUsuario() {
        $rut = $this->input->post("lrut");
        $pass = $this->input->post("lpass");
        echo json_encode($this->gestionModel->validarUsuario($rut, $pass));
    }

    public function getUsuario() {
        echo json_encode($this->gestionModel->getUsuario());
    }

    public function getNegocios() {
        echo json_encode($this->gestionModel->getNegocios());
    }

    public function getRegiones() {
        echo json_encode($this->gestionModel->getRegiones());
    }

    public function getProvincias() {
        $idRegion = $this->input->post("id");
        echo json_encode($this->gestionModel->getProvincias($idRegion));
    }

    public function getComunas() {
        $idComuna = $this->input->post("id");
        echo json_encode($this->gestionModel->getComunas($idComuna));
    }

    public function agregarNegocio() {
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
        echo json_encode($this->gestionModel->agregarNegocio($nombre, $horario, $rutaImg, $tipo, $latitud, $longitud, $rutUsuario, $idRegion, $idProvincia, $idComuna));
    }

    public function eliminarNegocio() {
        $idNegocio = $this->input->post("idNegocio");
        echo json_encode($this->gestionModel->eliminarNegocio($idNegocio));
    }

    public function actualizarNegocio() {
        $idNegocio = $this->input->post("idNegocio");
        $nombre = $this->input->post("nombre");
        $latitud = $this->input->post("latitud");
        $longitud = $this->input->post("longitud");
        $horario = $this->input->post("horario");
        $tipo = $this->input->post("tipo");
        echo json_encode($this->gestionModel->actualizarNegocio($idNegocio, $nombre, $horario, $tipo, $latitud, $longitud));
    }

    public function cerrarSesion() {
        $this->gestionModel->cerrarSesion();
    }

    public function getUsuarios() {
        echo json_encode($this->gestionModel->getUsuarios());
    }

    public function eliminarUsuario() {
        $Rut = $this->input->post("idNegocio");
        echo json_encode($this->gestionModel->eliminarUsuario($Rut));
    }

    public function modificarUsuario1() {
        $Rut = $this->input->post("Rut");
        $Nombre = $this->input->post("nombre");
        $Apellido = $this->input->post("apellido");
        $Clave = $this->input->post("clave");
        $Edad = $this->input->post("edad");
        $Correo = $this->input->post("correo");
        echo json_encode($this->gestionModel->modificarUsuario1($Rut, $Nombre, $Apellido, $Clave, $Edad, $Correo));
    }

    public function getIdNegocio() {
        $Rut = $this->input->post("Rut");
        echo json_encode($this->gestionModel->getIdNegocio($Rut));
    }

    public function agregarProducto() {
        $nombre = $this->input->post("nombre");
        $precio = $this->input->post("precio");
        $rutaImg = $this->input->post("rutaImg");
        $tipoProducto = $this->input->post("tipoProducto");
        $estado = $this->input->post("estado");
        echo json_encode($this->gestionModel->agregarProducto($nombre, $precio, $rutaImg, $tipoProducto, $estado));
    }

    public function getProductosNegocio() {
        $idNegocio = $this->input->post("idNegocio");
        echo json_encode($this->gestionModel->getProductosNegocio($idNegocio));
    }

    public function eliminarProducto() {
        $idProducto = $this->input->post("idProducto");
        echo json_encode($this->gestionModel->eliminarProducto($idProducto));
    }

    public function modificarProducto() {
        $idProducto = $this->input->post("idProducto");
        $nombre = $this->input->post("nombre");
        $precio = $this->input->post("precio");
        $tipo = $this->input->post("tipo");
        $estado = $this->input->post("estado");
        echo json_encode($this->gestionModel->modificarProducto($idProducto, $nombre, $precio, $tipo, $estado));
    }

    public function registrarUsuario() {
        $Rut = $this->input->post("Rut");
        $Nombre = $this->input->post("Nombre");
        $Apellido = $this->input->post("Apellido");
        $Edad = $this->input->post("Edad");
        $Clave = $this->input->post("Clave");
        $Correo = $this->input->post("Correo");
        $idRegion = $this->input->post("idRegion");
        $idProvincia = $this->input->post("idProvincia");
        $idComuna = $this->input->post("idComuna");
        echo json_encode($this->gestionModel->registrarUsuario($Rut, $Nombre, $Apellido, $Edad, $Clave, $Correo, $idRegion, $idProvincia, $idComuna));
    }

    public function modificarUsuario2() {
        $Rut = $this->input->post("Rut");
        $Nombre = $this->input->post("Nombre");
        $Apellido = $this->input->post("Apellido");
        $Edad = $this->input->post("Edad");
        $Clave = $this->input->post("Clave");
        $Correo = $this->input->post("Correo");
        $idRegion = $this->input->post("idRegion");
        $idProvincia = $this->input->post("idProvincia");
        $idComuna = $this->input->post("idComuna");
        echo json_encode($this->gestionModel->modificarUsuario2($Rut, $Nombre, $Apellido, $Edad, $Clave, $Correo, $idRegion, $idProvincia, $idComuna));
    }

    public function getProductosNegocioVenta() {
        $idNegocio = $this->input->post("idNegocio");
        echo json_encode($this->gestionModel->getProductosNegocio2($idNegocio));
    }

    public function addCarro() {
        $idProducto = $this->input->post("idProducto");
        $Nombre = $this->input->post("Nombre");
        $Cantidad = $this->input->post("Cantidad");
        $Precio = $this->input->post("Precio");
        $Respuesta = "Error al agregar al carro";
        if ($this->session->userdata("carro") != null) {
            $carro = $this->session->userdata("carro");
            $carro2 = array();
            foreach ($carro as $i) {
                if ($i['idProducto'] == $idProducto) {
                    $i['Cantidad'] = ($i['Cantidad']) + $Cantidad;
                    $i['Total'] = (($i['Precio']) * ($i['Cantidad']));
                } else {
                    $Total = $Precio * $Cantidad;
                    $carro2[] = array("idProducto" => $idProducto, "Nombre" => $Nombre, "Cantidad" => $Cantidad, "Precio" => $Precio, "Total" => $Total);
                }
                $carro2[] = $i;
            }
            $this->session->set_userdata("carro", $carro2);
            $Respuesta = "Agregado1";
        } else {
            $carro = array();
            $Total = $Precio * $Cantidad;
            $datos = array("idProducto" => $idProducto, "Nombre" => $Nombre, "Cantidad" => $Cantidad, "Precio" => $Precio, "Total" => $Total);
            $carro[] = $datos;
            $this->session->set_userdata("carro", $carro);
            $Respuesta = "Agregado2";
        }
        echo json_encode($Respuesta);
    }

    public function getCarro() {
        $carro = $this->session->userdata("carro");
        echo json_encode($carro);
    }

    public function vaciar() {
        $carro = array();
        $this->session->set_userdata("carro", $carro);
        $Respuesta = "Carro vaciado";
        echo json_encode($Respuesta);
    }

    public function borrarCarro() {
        $idProducto = $this->input->post("idProducto");
        $Respuesta = "Error al eliminar producto";
        if ($this->session->userdata("carro") != null) {
            $carro = $this->session->userdata("carro");
            foreach ($carro as $i) {
                if ($i['idProducto'] == $idProducto) {
                    unset($carro, $i);
                }
            }
            $this->session->set_userdata("carro", $carro);
            $Respuesta = "Eliminado";
        }else{
            $Respuesta = "Nada en el carrito";
        }
        echo json_encode($Respuesta);
    }
    
    public function buscarProductoNegocios(){
        $Nombre = $this->input->post("nombreProducto");
        echo json_encode($this->gestionModel->buscarProductoNegocios($Nombre));
    }
    
    public function getDatosNegocio(){
        $idNegocio = $this->input->post("idNegocio");
        echo json_encode($this->gestionModel->getDatosNegocio($idNegocio));
    }

}
