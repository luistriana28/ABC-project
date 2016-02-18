<?php
	error_reporting(E_ALL ^ E_NOTICE);
	header('Content-type: application/json');

	include_once("easyCRUD/Db.class.php");
	$db = new Db();

	include_once("easyCRUD/easyCRUD.class.php");

	class Escuela  Extends Crud {
		
			# Your Table name 
			protected $table = 'usuarios';
			
			# Primary Key of the Table
			protected $pk	 = 'id';
	}

	function j($q)
	{	
		$arrayDatos = array('data' => $q);
		echo json_encode($arrayDatos);
	}
	//Extraes los datos
		extract($_POST);

	// Instantiate the person class
   		$usuario  = new Escuela();

	  	$usuario->user = $user;
	   	$usuario->password = $password;
	   	$usuario->tipos  = $tipos;

	// Acciones
	   	if ($Accion == 'Insertar') {
	   		$creation = $usuario->Create();
	   		$usuarios = $usuario->all(); 
	   		j($usuarios);
	   	}elseif ($Accion == 'Actualizar') {
	   		$usuario->id = $id;
	   		$saved = $usuario->Save();
	   		$usuarios = $usuario->all(); 
	   		j($usuarios);
	   	}elseif ($Accion == 'Eliminar') {
	   		$usuario->id = $id;
	   		$delete = $usuario->Delete();
	   		$usuarios = $usuario->all(); 
	   		j($usuarios);
	   	}elseif ($Accion == 'Buscar') {
	   		$usuario->id = $id;		
		    $usuario->Find(); 
	   		j($usuario);
	   	}elseif ($Accion == 'Reporte') {
	   		$data = $db->query("SELECT * FROM usuarios");
	   		j($data);
	   	}else{
	   		$usuarios = $usuario->all(); 
	   		j($usuarios);
	   	}
?>