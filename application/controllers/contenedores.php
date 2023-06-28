<?php
class Contenedores extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
  }
  //funcion para renderizar las vistas
  public function ubicanos(){
    $this->load->view('header');
    $this->load->view('contenedores/ubicanos');
    $this->load->view('footer');
  }

}

?>
