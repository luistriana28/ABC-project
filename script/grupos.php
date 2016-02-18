<?php
	error_reporting(E_ALL ^ E_NOTICE);
	header('Content-type: application/json');

	include_once("easyCRUD/Db.class.php");
	$db = new Db();

	include_once("easyCRUD/easyCRUD.class.php");

	class Escuela  Extends Crud {
		
			# Nombre de la Tabla 
			protected $table = 'grupos';
			
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
   		$grupo  = new Escuela();

	  	$grupo->nombre = $nombre;
	   	$grupo->turno = $turno;
	   	$grupo->carrera  = $carrera;

	// Acciones
	   	if ($Accion == 'Insertar') {
	   		$creation = $grupo->Create();
	   		$grupos = $grupo->all(); 
	   		j($grupos);
	   	}elseif ($Accion == 'Actualizar') {
	   		$grupo->id = $id;
	   		$saved = $grupo->Save();
	   		$grupos = $grupo->all(); 
	   		j($grupos);
	   	}elseif ($Accion == 'Eliminar') {
	   		$grupo->id = $id;
	   		$delete = $grupo->Delete();
	   		$grupos = $grupo->all(); 
	   		j($grupos);
	   	}elseif ($Accion == 'Buscar') {
	   		$grupo->id = $id;		
		    $grupo->Find(); 
	   		j($grupo);
	   	}elseif ($Accion == 'Reporte') {
	   		$data = $db->query("SELECT * FROM grupos");
	   		j($data);
	   	}elseif ($Accion == 'Select') {
	   		if ($Campo == 'carrera') {
	   			$data = $db->query("SELECT id as 'value', nombre as 'option' FROM carreras");
	   			s($data);
	   		}
	   	}else{
	   		$data = $db->query("SELECT 
					grupos.id, 
					grupos.nombre, 
					turno, 
					carreras.nombre as 'carrera' 
				FROM grupos
					LEFT JOIN 
				carreras ON carreras.id = grupos.carrera ");
	   		j($data);
	   	}
?>