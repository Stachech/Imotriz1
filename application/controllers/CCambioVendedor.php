<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CCambioVendedor extends CI_Controller 
{
	public function index()
	{	
		if ($this->session->userdata('Usuario')==FALSE) 
		{
			redirect('CLogin');
		} else
		{
			$this->session->set_userdata('RolTipo','AmbosV');

			redirect('CInicio');
		
		}
	}
}