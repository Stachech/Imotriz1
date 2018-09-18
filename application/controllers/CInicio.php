<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CInicio extends CI_Controller 
{
	public function index()
	{
		if ($this->session->userdata('Usuario')==FALSE) 
		{
			redirect('CLogin');
		} else
		{
			$Datos['RolTipo']=$this->session->userdata('RolTipo');

			if ($Datos['RolTipo']=='Vendedor' OR $Datos['RolTipo']=='Ambos' OR $Datos['RolTipo']=='AmbosV') 
			{
				$this->load->view('front_end/header',$Datos);
				$this->load->view('front_end/menu');
				$this->load->view('Vendedor');
				$this->load->view('front_end/footer');

			}elseif ($Datos['RolTipo']=='Cliente' OR $Datos['RolTipo']=='AmbosC') 
			{
				$this->load->view('front_end/header',$Datos);
				$this->load->view('front_end/menu');
				$this->load->view('Cliente');
				$this->load->view('front_end/footer');
			}	
		}		
	}	
}

