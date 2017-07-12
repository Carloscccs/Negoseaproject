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
    
    function getUsuarios(){
        return $this->db->get("Usuario")->result();
    }
    
    function eliminarUsuario($Rut){
        $this->db->where("Rut",$Rut);
        $datos = array("Rol"=>'Eliminado');
        $respuesta = "Error inesperado";
        if($this->db->update("Usuario",$datos)){
            $respuesta = "Usuario eliminado";
        }else{
            $respuesta = "Error al eliminar usuario";
        }
        return $respuesta;
    }
    
    function modificarUsuario1($Rut,$Nombre,$Apellido,$Clave,$Edad,$Correo){
        $this->db->where("Rut",$Rut);
        $datos = array("Nombre"=>$Nombre,"Apellido"=>$Apellido,"Clave"=>$Clave,"Edad"=>$Edad,"Correo"=>$Correo);
        $respuesta = "Error inesperado";
        if($this->db->update("Usuario",$datos)){
            $respuesta = "Usuario modificado";
        }else{
            $respuesta = "Error al modificar usuario";
        }
        return $respuesta;
    }
    
    function getIdNegocio($Rut){
        $this->db->select("idNegocio");
        $this->db->from("Negocio");
        $this->db->where("rutUsuario", $Rut);
        $id = $this->db->get()->result();
        return $id[0]->idNegocio;
    }
    
    function agregarProducto($nombre,$precio,$rutaImg,$tipoProducto,$Estado){
        $user = $this->getUsuario();
        $idNegocio = $this->getIdNegocio($user->Rut);
        $datos = array("Nombre"=>$nombre,"Precio"=>$precio,"rutaImg"=>$rutaImg,"tipoProducto"=>$tipoProducto,"Estado"=>$Estado,"idNegocio"=>$idNegocio);
        $resultado = "Error desconocido";
        if($this->db->insert("Producto",$datos)){
            $resultado = "Producto agregado";
        }else{
            $resultado = "Error al agregar producto";
        }
        return $resultado;
    }
    
    function getProductosNegocio($id){
        $this->db->select("*");
        $this->db->from("Producto");
        $this->db->where("idNegocio",$id);
        return $this->db->get()->result();
    }
    
    function eliminarProducto($idProducto){
        $this->db->where("idProducto",$idProducto);
        $datos = array("Estado"=>'Eliminado');
        $respuesta = "Error inesperado";
        if($this->db->update("Producto",$datos)){
            $respuesta = "Producto eliminado";
        }else{
            $respuesta = "Error al eliminar producto";
        }
        return $respuesta;
    }
    
    function modificarProducto($idProducto,$nombre,$precio,$tipoProducto,$estado){
        $datos = array("Nombre"=>$nombre,"Precio"=>$precio,"tipoProducto"=>$tipoProducto,"Estado"=>$estado);
        $this->db->where("idProducto",$idProducto);
        $respuesta = "Error desconocido";
        if($this->db->update("Producto",$datos)){
            $respuesta = "Producto modificado";
        }else{
            $respuesta = "Error al modificar producto";
        }
        return $respuesta;
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
