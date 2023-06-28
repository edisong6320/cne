<?php

class Candidato extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }
  function insertar($datos){
    return $this->db->insert("candidato",$datos);
  }

  function obtenerTodosLista(){
    $listadsCandidatos=$this->db->get("candidato");
    if($listadsCandidatos->num_rows()>0){//Si hay datos
    return $listadsCandidatos->result();
      }else{
        return false;
      }
  }

  function borrar($id_can)
  {
    $this->db->where("id_can",$id_can);
    return $this->db->delete("candidato");
  }

  function obtenerPorId($id_can){
    $this->db->where("id_can",$id_can);
    $candidato=$this->db->get("candidato");
    if ($candidato->num_rows()>0) {
      return $candidato->row();
    }
    return false;
  }

  function actualizar($id_can,$datos)
  {
    $this->db->where("id_can",$id_can);
    return $this->db->update('candidato',$datos);
  }

}

?>
