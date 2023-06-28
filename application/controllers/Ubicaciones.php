<?php
class Ubicaciones extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model("Ubicacion");
  }
  public function presidente()
	{
    $data["candidatospre"]=$this->Ubicacion->obtenerPresidentes();
    $this->load->view('header');
		$this->load->view('ubicaciones/presidentes',$data);
    $this->load->view('footer');
	}

  public function asambleistanac()
	{
    $data["candidatosan"]=$this->Ubicacion->obtenerAsambleistaNac();
    $this->load->view('header');
		$this->load->view('ubicaciones/asambleistanac',$data);
    $this->load->view('footer');
	}

  public function asambleistapro()
	{
    $data["candidatosap"]=$this->Ubicacion->obtenerAsambleistaPro();
    $this->load->view('header');
		$this->load->view('ubicaciones/asambleistapro',$data);
    $this->load->view('footer');
	}
  public function ideologia()
	{
    $data["candidatosder"]=$this->Ubicacion->obtenerIdeologiaDer();
    $data["candidatosizq"]=$this->Ubicacion->obtenerIdeologiaIzq();
    $this->load->view('header');
		$this->load->view('ubicaciones/ideologia',$data);
    $this->load->view('footer');
	}

  public function candidatos()
	{
    $data["candidatospre"]=$this->Ubicacion->obtenerPresidentes();
    $data["candidatosan"]=$this->Ubicacion->obtenerAsambleistaNac();
    $data["candidatosap"]=$this->Ubicacion->obtenerAsambleistaPro();
    $this->load->view('header');
		$this->load->view('ubicaciones/candidatos',$data);
    $this->load->view('footer');
	}
}

 ?>
