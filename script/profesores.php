<?php
	error_reporting(E_ALL ^ E_NOTICE);
	header('Content-type: application/json');

	include_once("easyCRUD/Db.class.php");
	$db = new Db();

	include_once("easyCRUD/easyCRUD.class.php");

	class Escuela  Extends Crud {
		
			# Your Table name 
			protected $table = 'profesores';
			
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
   		$profesor  = new Escuela();

   		$profesor->rfc = $rfc;
	  	$profesor->nombre = $nombre;
	   	$profesor->a_paterno = $a_paterno;
	   	$profesor->a_materno  = $a_materno;
        $profesor->usuario = $usuario;

	// Acciones
	   	if ($Accion == 'Insertar') {
	   		$creation = $profesor->Create();
	   		$profesores = $profesor->all(); 
	   		j($profesores);
	   	}elseif ($Accion == 'Actualizar') {
	   		$profesor->id = $id;
	   		$saved = $profesor->Save();
	   		$profesores = $profesor->all(); 
	   		j($profesores);
	   	}elseif ($Accion == 'Eliminar') {
	   		$profesor->id = $id;
	   		$delete = $profesor->Delete();
	   		$profesores = $profesor->all(); 
	   		j($profesores);
	   	}elseif ($Accion == 'Buscar') {
	   		$profesor->id = $id;		
		    $profesor->Find(); 
	   		j($profesor);
	   	}elseif ($Accion == 'Reporte') {
	   		$data = $db->query("SELECT * FROM profesores");
	   		j($data);
	    }elseif($Accion == 'Select') {
	   		if ($Campo == 'usuario') {
	   			$data = $db->query("SELECT id as 'value', user as 'option' FROM usuarios");
	   			s($data);
	   		}
	   	}else{
	   		$profesores = $db->query("SELECT 
					profesores.id as 'id',
					rfc,
					CONCAT(profesores.nombre, ' ',a_paterno, ' ',a_materno) as 'nombre',
					usuarios.user as usuario
				FROM profesores
					LEFT JOIN usuarios
				ON profesores.usuario = usuarios.id"); 
	   		j($profesores);
	   	}
?>