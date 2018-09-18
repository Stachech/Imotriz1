<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CConsultarVehiculosPrecio extends CI_Controller 
{
	public function index()
	{	
		if ($this->session->userdata('Usuario')==FALSE) 
		{
			redirect('CLogin');
		} else
		{
			$this->load->model('Consultas');

			$PrecioMinimo=$_GET['PrecioMinimo'];
			$PrecioMaximo=$_GET['PrecioMaximo'];

			$Datos['ListarVehiculosPrecio']=$this->Consultas->ListarVehiculosPrecioRango($PrecioMinimo,$PrecioMaximo);

			$this->load->view('front_end/header',$Datos);
			$this->load->view('front_end/menu');
			$this->load->view('VehiculosPrecio');
			$this->load->view('front_end/footer');
		}
			
				
		}
	}
