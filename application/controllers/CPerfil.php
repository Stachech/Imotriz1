<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CPerfil extends CI_Controller 
{
	public function index()
	{	
		if ($this->session->userdata('Usuario')==FALSE) 
		{
			redirect('CLogin');
		} else
			{
				$this->load->model('Consultas');
		
				$id=$this->session->userdata('id');
				$Datos['Perfil']=$this->Consultas->CargarPerfil($id);

				$this->load->view('front_end/header',$Datos);
				$this->load->view('front_end/menu');
				$this->load->view('Perfil');
				$this->load->view('front_end/footer');
			}
	}

	 function Actualizar()
	{
		$this->load->model('Consultas');

		$id=$_GET['id'];
		$Nombres=$_GET['Nombres'];
		$Apellidos=$_GET['Apellidos'];
		$Celular=$_GET['Celular'];
		$Telefono=$_GET['Telefono'];
		$CorreoElectronico=$_GET['CorreoElectronico'];

		$this->Consultas->ActualizarPerfil($id,$Nombres,$Apellidos,$Celular,$Telefono,$CorreoElectronico);

		$this->session->set_flashdata('Actualizado','Actualizado');

		redirect ('CPerfil');
		
	}
}
