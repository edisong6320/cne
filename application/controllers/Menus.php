<?php

class Menus extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
  }

  public function llamarMenu(){
    $this->load->view('header');
    $this->load->view('menus/opciones');
    $this->load->view('footer');
  }
}

 ?>
