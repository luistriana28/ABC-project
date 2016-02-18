<?php
	error_reporting(E_ALL ^ E_NOTICE);
	header('Content-type: application/json');

	include_once("easyCRUD/Db.class.php");
	$db = new Db();

	include_once("easyCRUD/easyCRUD.class.php");

	class Escuela  Extends Crud {
		
			# Nombre de la Tabla 
			protected $table = 'unidades';
			
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
   		$unidade  = new Escuela();

	  	$unidade->numero = $numero;
	   	$unidade->nombre = $nombre;
	   	$unidade->materia  = $materia;

	// Acciones
	   	if ($Accion == 'Insertar') {
	   		$creation = $unidade->Create();
	   		$unidades = $unidade->all(); 
	   		j($unidades);
	   	}elseif ($Accion == 'Actualizar') {
	   		$unidade->id = $id;
	   		$saved = $unidade->Save();
	   		$unidades = $unidade->all(); 
	   		j($unidades);
	   	}elseif ($Accion == 'Eliminar') {
	   		$unidade->id = $id;
	   		$delete = $unidade->Delete();
	   		$unidades = $unidade->all(); 
	   		j($unidades);
	   	}elseif ($Accion == 'Buscar') {
	   		$unidade->id = $id;		
		    $unidade->Find(); 
	   		j($unidade);
	   	}elseif ($Accion == 'Reporte') {
	   		$data = $db->query("SELECT * FROM unidades");
	   		j($data);
	   	}elseif ($Accion == 'Select') {
	   		if ($Campo == 'materia') {
	   			$data = $db->query("SELECT id as 'value', nombre as 'option' FROM materias");
	   			s($data);
	   		}
	   	}else{
	   		$data = $db->query("SELECT 
					unidades.id, 
					unidades.numero, 
					unidades.nombre, 
					materias.nombre as 'materia' 
				FROM unidades
					LEFT JOIN 
				materias ON materias.id = unidades.materia ");
	   		j($data);
	   	}
?>