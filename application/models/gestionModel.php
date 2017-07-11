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
    
    function getProvincias($id){
        $this->db->select("id,nombre");
        $this->db->from("Provincia");
        $this->db->where("idRegion", $id);
        return $this->db->get()->result();
    }

}
