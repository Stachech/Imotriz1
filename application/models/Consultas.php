<?php

class Consultas  extends CI_Model
{
	
	public function _construct() 
	{
		parent:: _contruct();
	}

	function Autenticar($Usuario,$Contrasenia)
	{
		$ConsultaCuenta=$this->db->query("SELECT * FROM `concesionarioapp_usuario` WHERE `username`='$Usuario' AND `password`='$Contrasenia'");

		if ($ConsultaCuenta->num_rows()>0)  
		{
			$ResultadoCuenta=$ConsultaCuenta->row()->id;

			$ConsultaRol=$this->db->query("SELECT roltipo FROM concesionarioapp_rol,concesionarioapp_usuariorol WHERE concesionarioapp_rol.rolid=concesionarioapp_usuariorol.rolid_id AND concesionarioapp_usuariorol.usuid_id=$ResultadoCuenta");

			$ConsultaRoles=$this->db->query("SELECT * FROM `concesionarioapp_usuariorol` WHERE `usuid_id`='$ResultadoCuenta'");

			if ($ConsultaRoles->num_rows()>1)  
			{
				$ConsultaNombres=$this->db->query("SELECT * FROM `concesionarioapp_datospersonales` WHERE `usuid_id`=$ResultadoCuenta");

				$Resultado=array('Existe'=>1,'RolTipo'=>'Ambos','Usuario'=> $ConsultaCuenta->row()->username,'id'=> $ConsultaCuenta->row()->id,'Nombres'=> $ConsultaNombres->row()->datnombre,'Apellidos'=> $ConsultaNombres->row()->datapellido);
			}else
			{ 

				$ConsultaNombres=$this->db->query("SELECT * FROM `concesionarioapp_datospersonales` WHERE `usuid_id`=$ResultadoCuenta");

				$Resultado=array('Existe'=>1,'RolTipo'=> $ConsultaRol->row()->roltipo,'Usuario'=> $ConsultaCuenta->row()->username,'id'=> $ConsultaCuenta->row()->id,'Nombres'=> $ConsultaNombres->row()->datnombre,'Apellidos'=> $ConsultaNombres->row()->datapellido);	
		    }
		}
		else
		{
			$Resultado=array('Existe'=>0,'RolTipo'=>null,'Usuario'=>null);
		}

		return $Resultado;
	}

	function ListarCategorias()
	{
		$ConsultaCategorias=$this->db->query("SELECT * FROM `concesionarioapp_categoria` ");

		return $ConsultaCategorias->result();
	}

	function GuardarVehiculo($Modelo,$Color,$Placa,$Estado,$Precio,$Categoria,$Usuario,$Marca)
	{
		$ConsultaPlaca=$this->db->query("SELECT * FROM `concesionarioapp_vehiculo` WHERE `vehplaca`='$Placa'");

		if ($ConsultaPlaca->num_rows()>0)  
		{
			$Resultado=array('Existe'=>1);
		}else
		{
			$ConsultaViculo=$this->db->query("INSERT INTO `concesionarioapp_vehiculo`(`vehplaca`, `vehmodelo`, `vehcolor`, `vehmarca`, `vehestado`, `vehprecio`, `vehfoto`, `catid_id`, `datid_id`) VALUES ('$Placa','$Modelo','$Color','$Marca','$Estado','$Precio','Foto',$Categoria,$Usuario)");

			$Resultado=array('Existe'=>0);
		}

		return $Resultado;
	}

	function CargarPerfil($id)
	{
		$ConsutlaPerfil=$this->db->query("SELECT * FROM `concesionarioapp_datospersonales` WHERE `datid`=$id");

		return $ConsutlaPerfil->row();
	}

	function ActualizarPerfil($id,$Nombres,$Apellidos,$Celular,$Telefono,$CorreoElectronico)
	{
		$ConsutlaPerfil=$this->db->query("UPDATE `concesionarioapp_datospersonales` SET `datnombre`='$Nombres',`datapellido`='$Apellidos',`datelefono`='$Telefono',`datcorreo`='$CorreoElectronico' WHERE `datid`=$id");
	}

	function ListarVehiculos()
	{
		$ConsutlaVehiculos=$this->db->query("SELECT * FROM `concesionarioapp_vehiculo`,concesionarioapp_categoria WHERE concesionarioapp_vehiculo.catid_id=concesionarioapp_categoria.catid ");

		return $ConsutlaVehiculos->result();

	}
	function CargarVendedor($id)
	{
		$ConsutarVendedor=$this->db->query("SELECT * FROM `concesionarioapp_datospersonales` WHERE `datid`=$id");

		return $ConsutarVendedor->row();
	}

	function ListarVehiculosPrecio()
	{
		$ConsutlaVehiculos=$this->db->query("SELECT * FROM `concesionarioapp_vehiculo`,concesionarioapp_datospersonales WHERE concesionarioapp_datospersonales.datid=concesionarioapp_vehiculo.datid_id");

		return $ConsutlaVehiculos->result();

	}

	function ListarVehiculosPrecioRango($PrecioMinimo,$PrecioMaximo)
	{
		$ConsutlaVehiculos=$this->db->query("SELECT * FROM `concesionarioapp_vehiculo`,concesionarioapp_datospersonales WHERE concesionarioapp_datospersonales.datid=concesionarioapp_vehiculo.datid_id AND `vehprecio` BETWEEN $PrecioMinimo and $PrecioMaximo");

		return $ConsutlaVehiculos->result();
	}

}

?>