<?php
	error_reporting(E_ALL ^ E_NOTICE);
	header('Content-type: application/json');

	include_once("easyCRUD/Db.class.php");
	$db = new Db();

	include_once("easyCRUD/easyCRUD.class.php");

	class Escuela  Extends Crud {
		
			# Your Table name 
			protected $table = 'materias';
			
			# Primary Key of the Table
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
   		$materia  = new Escuela();

	  	$materia->nombre = $nombre;
	   	$materia->descripcion  = $descripcion;

	// Acciones
	   	if ($Accion == 'Insertar') {
	   		$creation = $materia->Create();
	   		$materias = $materia->all(); 
	   		j($materias);
	   	}elseif ($Accion == 'Actualizar') {
	   		$materia->id = $id;
	   		$saved = $materia->Save();
	   		$materias = $materia->all(); 
	   		j($materias);
	   	}elseif ($Accion == 'Eliminar') {
	   		$materia->id = $id;
	   		$delete = $materia->Delete();
	   		$materias = $materia->all(); 
	   		j($materias);
	   	}elseif ($Accion == 'Buscar') {
	   		$materia->id = $id;		
		    $materia->Find(); 
	   		j($materia);
	   	}elseif ($Accion == 'Reporte') {
	   		$data = $db->query("SELECT * FROM materias");
	   		j($data);
	   	}else{
	   		$materias = $materia->all(); 
	   		j($materias);
	   	}
?>