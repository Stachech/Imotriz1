<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CConsultarVehiculos extends CI_Controller 
{
	public function index()
	{	
		if ($this->session->userdata('Usuario')==FALSE) 
		{
			redirect('CLogin');
		} else
		{

			$this->load->model('Consultas');

			$Datos['ListarVehiculos']=$this->Consultas->ListarVehiculos();

			$this->load->view('front_end/header',$Datos);
			$this->load->view('front_end/menu');
			$this->load->view('Vehiculos');
			$this->load->view('front_end/footer');	
		}
	}
}