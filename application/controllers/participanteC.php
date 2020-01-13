<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class participanteC extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model("participanteM");
	}

	public function index(){
		$datos=array("title" =>"AJAX || AVANZADO");
		$this->load->view("template/header", $datos);
		$this->load->view("participanteV");
		$this->load->view("template/footer");

	}

	public function get_participante(){
		$respuesta=$this->participanteM->get_participante();
		echo json_encode($respuesta);
	}

	public function eliminar(){
		$id=$this->input->post("id");
		$respuesta=$this->participanteM->eliminar($id);
		echo json_encode($respuesta);
	}

	public function get_sexo(){
		$respuesta=$this->participanteM->get_sexo();
		echo json_encode($respuesta);
	}

	public function get_procedencia(){
		$respuesta=$this->participanteM->get_procedencia();
		echo json_encode($respuesta);
	}


	public function get_categoria(){
		$respuesta=$this->participanteM->get_categoria();
		echo json_encode($respuesta);
	}

	public function ingresar(){
		$datos["nombre_participante"]=$this->input->post("nombre_participante");
		$datos["fuerza"]=$this->input->post("fuerza");
		$datos["sexo"]=$this->input->post("sexo");
		$datos["procedencia"]=$this->input->post("procedencia");
		$datos["categoria"]=$this->input->post("categoria");
		$respuesta = $this->participanteM->set_participante($datos);
		echo json_encode($respuesta);
	}


	public function get_datos(){
		$id=$this->input->post("id");
		$respuesta=$this->participanteM->get_datos($id);
		echo json_encode($respuesta);
	}


	public function actualizar(){
		$datos["id_participante"]=$this->input->post("id_participante");
		$datos["nombre_participante"]=$this->input->post("nombre_participante");
		$datos["fuerza"]=$this->input->post("fuerza");
		$datos["sexo"]=$this->input->post("sexo");
		$datos["procedencia"]=$this->input->post("procedencia");
		$datos["categoria"]=$this->input->post("categoria");
		$respuesta = $this->participanteM->actualizar($datos);
		echo json_encode($respuesta);
	}



}
