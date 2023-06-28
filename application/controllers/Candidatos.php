<?php
class Candidatos extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('Candidato');
  }
  public function nuevocandidato(){
    $this->load->view('header');
    $this->load->view('candidatos/nuevocandidato');
    $this->load->view('footer');
  }
  public function listadocandidato(){
    $data['candidatos']=$this->Candidato->obtenerTodosLista();
    $this->load->view('header');
    $this->load->view('candidatos/listadocandidato',$data);
    $this->load->view('footer');
  }

    public function guardarcandidato(){
      //codigo neto
      $datosNuevoCandidato=array(
        "cedula_can"=>$this->input->post('cedula_can'),
        "apellidos_can"=>$this->input->post('apellidos_can'),
        "nombres_can"=>$this->input->post('nombres_can'),
        "celular_can"=>$this->input->post('celular_can'),
        "dignidad_can"=>$this->input->post('dignidad_can'),
        "tipo_can"=>$this->input->post('tipo_can'),
        "movimiento_can"=>$this->input->post('movimiento_can'),
        "latitud_can"=>$this->input->post('latitud_can'),
        "longitud_can"=>$this->input->post('longitud_can')
      );
      if ($this->Candidato->insertar($datosNuevoCandidato)) {
        redirect('candidatos/listadocandidato');
      }else {
          echo "<h1>ERROR AL INSERTAR</h1>";
        }
      }

    public function eliminar($id_can){
      if ($this->Candidato->borrar($id_can))
      {//invocando el modelo
        redirect('candidatos/listadocandidato');
      }else{
        echo "ERROR AL BORRAR :()";
      }
    }

    public function editarcandidato($id_can){
      $data["candidatoEditar"]=$this->Candidato->obtenerPorId($id_can);
      $this->load->view('header');
      $this->load->view('candidatos/editarcandidato',$data);
      $this->load->view('footer');
    }

    public function procesarActualizacion()
    {
      $datosEditados = array(
        "cedula_can"=>$this->input->post('cedula_can'),
        "apellidos_can"=>$this->input->post('apellidos_can'),
        "nombres_can"=>$this->input->post('nombres_can'),
        "celular_can"=>$this->input->post('celular_can'),
        "dignidad_can"=>$this->input->post('dignidad_can'),
        "tipo_can"=>$this->input->post('tipo_can'),
        "movimiento_can"=>$this->input->post('movimiento_can'),
        "latitud_can"=>$this->input->post('latitud_can'),
        "longitud_can"=>$this->input->post('longitud_can')
      );
      $id_can=$this->input->post("id_can");
      if ($this->Candidato->actualizar($id_can,$datosEditados)) {
        $this->session->set_flashdata("confirmacion","Datos actualizados exitosamente");
      }else {
        $this->session->set_flashdata("error","Error al actualizar su registro, intente nuevamente");
      }
        redirect("candidatos/listadocandidato");
    }
}

 ?>
