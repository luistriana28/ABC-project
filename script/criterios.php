<?php
	error_reporting(E_ALL ^ E_NOTICE);
	header('Content-type: application/json');

	include_once("easyCRUD/Db.class.php");
	$db = new Db();

	include_once("easyCRUD/easyCRUD.class.php");

	class Escuela  Extends Crud {
		
			# Nombre de la Tabla 
			protected $table = 'criterios';
			
			# Llave Primaria de la Tabla Principal
			protected $pk	 = 'id';
	}

	function j($q)
	{	
		$arrayDatos = array('data' => $q);
		echo json_encode($arrayDatos);
	}

	function s($q)
	{	
		echo json_encode($q);
	}
	//Extraes los datos
		extract($_POST);

	// Instantiate the person class
   		$criterio  = new Escuela();

	  	$criterio->nombre = $nombre;
	   	$criterio->porcentaje = $porcentaje;
	   	$criterio->unidad  = $unidad;

	// Acciones
	   	if ($Accion == 'Insertar') {
	   		$creation = $criterio->Create();
	   		$criterios = $criterio->all(); 
	   		j($criterios);
	   	}elseif ($Accion == 'Actualizar') {
	   		$criterio->id = $id;
	   		$saved = $criterio->Save();
	   		$criterios = $criterio->all(); 
	   		j($criterios);
	   	}elseif ($Accion == 'Eliminar') {
	   		$criterio->id = $id;
	   		$delete = $criterio->Delete();
	   		$criterios = $criterio->all(); 
	   		j($criterios);
	   	}elseif ($Accion == 'Buscar') {
	   		$criterio->id = $id;		
		    $criterio->Find(); 
	   		j($criterio);
	   	}elseif ($Accion == 'Reporte') {
	   		$data = $db->query("SELECT * FROM criterios");
	   		j($data);
	   	}elseif ($Accion == 'Select') {
	   		if ($Campo == 'unidad') {
	   			$data = $db->query("SELECT id as 'value', nombre as 'option' FROM unidades");
	   			s($data);
	   		}
	   	}else{
	   		$data = $db->query("SELECT 
					criterios.id, 
					criterios.nombre, 
					porcentaje, 
					unidades.nombre as 'unidad' 
				FROM criterios
					LEFT JOIN 
				unidades ON unidades.id = criterios.unidad ");
	   		j($data);
	   	}
?>