<?php
	error_reporting(E_ALL ^ E_NOTICE);
	header('Content-type: application/json');

	include_once("easyCRUD/Db.class.php");
	$db = new Db();

	include_once("easyCRUD/easyCRUD.class.php");

	class Escuela  Extends Crud {
		
			# Your Table name 
			protected $table = 'carreras';
			
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
   		$carrera  = new Escuela();

	  	$carrera->nombre = $nombre;
	   	$carrera->fundacion = $fundacion;
	   	$carrera->descripcion  = $descripcion;

	// Acciones
	   	if ($Accion == 'Insertar') {
	   		$creation = $carrera->Create();
	   		$carreras = $carrera->all(); 
	   		j($carreras);
	   	}elseif ($Accion == 'Actualizar') {
	   		$carrera->id = $id;
	   		$saved = $carrera->Save();
	   		$carreras = $carrera->all(); 
	   		j($carreras);
	   	}elseif ($Accion == 'Eliminar') {
	   		$carrera->id = $id;
	   		$delete = $carrera->Delete();
	   		$carreras = $carrera->all(); 
	   		j($carreras);
	   	}elseif ($Accion == 'Buscar') {
	   		$carrera->id = $id;		
		    $carrera->Find(); 
	   		j($carrera);
	   	}elseif ($Accion == 'Reporte') {
	   		$data = $db->query("SELECT * FROM carreras");
	   		j($data);
	   	}else{
	   		$carreras = $carrera->all(); 
	   		j($carreras);
	   	}
?>