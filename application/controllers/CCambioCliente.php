<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CCambioCliente extends CI_Controller 
{
	public function index()
	{	
		if ($this->session->userdata('Usuario')==FALSE) 
		{
			redirect('CLogin');
		} else
		{
			$this->session->set_userdata('RolTipo','AmbosC');

			redirect('CInicio');
		
		}
	}
}