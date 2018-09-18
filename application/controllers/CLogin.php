<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CLogin extends CI_Controller
{
	public function index()
	{
		if ($this->session->userdata('Usuario')) 
		{
			redirect('CInicio');
		}
	
		$this->load->view('login');
	}

	function Validar()
	{
		$this->load->model('Consultas');

		$Usuario=$_POST['Usuario'];
		$Contrasenia=$_POST['Contrasenia'];
		$Datos=$this->Consultas->Autenticar($Usuario,$Contrasenia);

		if ($Datos['Existe']==1) 
		{
			$this->session->set_userdata('RolTipo',$Datos['RolTipo']);
			$this->session->set_userdata('Usuario',$Datos['Usuario']);
			$this->session->set_userdata('id',$Datos['id']);
			$this->session->set_userdata('Nombres',$Datos['Nombres']);
			$this->session->set_userdata('Apellidos',$Datos['Apellidos']);


			redirect('CInicio');

		}else
		{
			$this->session->set_flashdata('Mensaje','No Existe');
			redirect('CLogin');
		}
	}

	public function SignOut ()
	{
		$this->session->sess_destroy();
		redirect('CLogin');
	}
}