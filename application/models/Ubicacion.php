<?php

class Ubicacion extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }
  function obtenerPresidentes()
  {
      $listadoPresidentes=$this->db->select()->where('dignidad_can','Presidente')->get("candidato");
      if ($listadoPresidentes->num_rows()>0) {
        return $listadoPresidentes->result();
      }
      return false;
  }

  function obtenerAsambleistaNac()
  {
      $listadoAsambleistasNac=$this->db->select()->where('dignidad_can','Asambleista Nacional')->get("candidato");
      if ($listadoAsambleistasNac->num_rows()>0) {
        return $listadoAsambleistasNac->result();
      }
      return false;
  }

  function obtenerAsambleistaPro()
  {
      $listadoAsambleistasPro=$this->db->select()->where('dignidad_can','Asambleista Provincial')->get("candidato");
      if ($listadoAsambleistasPro->num_rows()>0) {
        return $listadoAsambleistasPro->result();
      }
      return false;
  }
  function obtenerIdeologiaDer()
  {
      $listadoIdeologiaDer=$this->db->select()->where('tipo_can','Derecha')->get("candidato");
      if ($listadoIdeologiaDer->num_rows()>0) {
        return $listadoIdeologiaDer->result();
      }
      return false;
  }

  function obtenerIdeologiaIzq()
  {
      $listadoIdeologiaIzq=$this->db->select()->where('tipo_can','Izquierda')->get("candidato");
      if ($listadoIdeologiaIzq->num_rows()>0) {
        return $listadoIdeologiaIzq->result();
      }
      return false;
  }
}
?>
