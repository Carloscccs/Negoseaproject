<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class gestionModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function buscarUsuario($rut) {
        $this->db->select("Rut,Nombre,Apellido,Rol,Clave");
        $this->db->from("Usuario");
        $this->db->where("Rut", $rut);
        return $this->db->get()->result();
    }

    function validarUsuario($rut, $pass) {
        $user = $this->buscarUsuario($rut);
        $resp = "Datos incorrectos";
        foreach ($user as $i) {
            if ($i->Clave == $pass) {
                $this->session->set_userdata("usuario", $i);
                $resp = $i->Rol;
            }
        }
        return $resp;
    }

    function getUsuario() {
        $user = $this->session->get_userdata("usuario");
        return $user['usuario'];
    }

    function getNegocios() {
        $this->db->select("idNegocio, Nombre, horarioAtencion, tipoNegocio, latitud, longitud, rutUsuario");
        $this->db->from("Negocio");
        return $this->db->get()->result();
    }

    function getRegiones() {
        // $this->db->select("*");
        //$this->db->from("Region");
        return $this->db->get("Region")->result();
    }

    function getProvincias($id) {
        $this->db->select("id,nombre");
        $this->db->from("Provincia");
        $this->db->where("idRegion", $id);
        return $this->db->get()->result();
    }

    function getComunas($id) {
        $this->db->select("id,nombre");
        $this->db->from("Comuna");
        $this->db->where("idProvincia", $id);
        return $this->db->get()->result();
    }
    

    function agregarNegocio($nombre, $horario, $rutaImg, $tipo, $latitud, $longitud, $rutUsuario, $idRegion, $idProvincia, $idComuna) {
        $usuario = $this->buscarUsuario($rutUsuario);
        $respuesta = "Error desconocido";
        $Rol = $usuario[0]->Rol;
        if ($Rol == "Dueño") {
            $respuesta = "Usuario ya tiene asociado un negocio";
        } else {
            $consulta = "CALL insertarNegocio('".$nombre."','".$horario."','".$rutaImg."','".$tipo."','".$latitud."','".$longitud."','".$rutUsuario."',".$idRegion.",".$idProvincia.",".$idComuna.");";
            if ($this->db->query($consulta)) {
                $respuesta = "Negocio creado";
            } else {
                $respuesta = "Ha ocurrido un error al ingresar el negocio";
            }
        }
         return $respuesta;
    }
    
    function eliminarNegocio($idNegocio){
        $consulta = "CALL eliminarNegocio(".$idNegocio.");";
        $respuesta = "Error desconocido";
        if($this->db->query($consulta)){
            $respuesta = "Negocio eliminado";
        }else{
            $respuesta = "Error al eliminar negocio";
        }
        return $respuesta;;
    }
    
    function actualizarNegocio($id,$nombre,$horario,$tipo,$latitud,$longitud){
        $this->db->where("idNegocio",$id);
        $datos = array("nombre"=>$nombre,"horarioAtencion"=>$horario,"tipoNegocio"=>$tipo,"latitud"=>$latitud,"longitud"=>$longitud);
        $respuesta = "error inesperado";
        if($this->db->update("Negocio",$datos)){
            $respuesta = "Negocio modificado";
        }else{
            $respuesta = "Error al modificar negocio";
        }
        return $respuesta;
    }
    
    function cerrarSesion(){
        $this->session->sess_destroy();
        header("Location:".site_url());
    }

}

//        }
//        foreach ($usuario as $i) {
//            if ($i->Rol == "Usuario") {
//                $respuesta = "Usuario ya tiene asociado un negocio";
//            }else{
//                //$consulta = "CALL insertarNegocio(".$nombre.",".$horario.",".$rutaImg.",".$tipo.",".$latitud.",".$longitud.",".$rutUsuario.",".$idRegion.",".$idProvincia.",".$idComuna.");";
//                $conSql = "CALL insertarNegocio('Don pepe','8:30 - 20:00','sin imagen','Minimarket','-35.43611021','-71.62354767','111111111',7,25,112);";
//                if($this->db->query($conSql)){
//                    $respuesta = "Negocio creado";
//                }else{
//                    $respuesta = "Ha ocurrido un error al ingresar el negocio";
//                }
//            }
//        }
