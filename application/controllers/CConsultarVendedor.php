<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CConsultarVendedor extends CI_Controller 
{
	public function index()
	{	
		if ($this->session->userdata('Usuario')==FALSE) 
		{
			redirect('CLogin');
		} else
		{

			$this->load->model('Consultas');

			$id=$_POST['id'];

			$Datos['Vendedor']=$this->Consultas->CargarVendedor($id);

			$this->load->view('front_end/header',$Datos);
			$this->load->view('front_end/menu');
			$this->load->view('Vendedores');
			$this->load->view('front_end/footer');	
		}
	}
}