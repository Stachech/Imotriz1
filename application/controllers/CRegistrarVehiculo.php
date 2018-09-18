<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CRegistrarVehiculo extends CI_Controller 
{
  public function index()
  {
    if ($this->session->userdata('Usuario')==FALSE) 
    {
      redirect('CLogin');
    } else
      {
        $this->load->model('Consultas');

        $Datos['Categoria']=$this->Consultas->ListarCategorias();

        $this->load->view('front_end/header',$Datos);
        $this->load->view('front_end/menu');
        $this->load->view('RegistrarVehiculo');
        $this->load->view('front_end/footer');    
      }   
  }

   function RegistrarVehiculo()
  {
    $this->load->model('Consultas');


    $Modelo=$_POST['Modelo'];
    $Color=$_POST['Color'];
    $Placa=$_POST['Placa'];
    $Marca=$_POST['Marca'];
    $Estado=$_POST['Estado'];
    $Precio=$_POST['Precio'];
    $Categoria=$_POST['Categoria'];
    $Usuario=$this->session->userdata('id');


    $Resultado=$this->Consultas->GuardarVehiculo($Modelo,$Color,$Placa,$Estado,$Precio,$Categoria,$Usuario,$Marca);
      
    if ($Resultado['Existe']==1) 
    {
      $this->session->set_flashdata('Mensaje','Existe');
      redirect('CRegistrarVehiculo');

    }else
    {
      $this->session->set_flashdata('Registro','Existe');
      redirect('CRegistrarVehiculo');
    }   
  }
}
