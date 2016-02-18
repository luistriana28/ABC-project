<?php
	error_reporting(E_ALL ^ E_NOTICE);
	header('Content-type: application/json');

	include_once("easyCRUD/Db.class.php");
	$db = new Db();

	include_once("easyCRUD/easyCRUD.class.php");

	class Escuela  Extends Crud {
		
			# Your Table name 
			protected $table = 'asignaturas';

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
   		$asignatura  = new Escuela();

	  	$asignatura->materia = $materia;
	   	$asignatura->grupo = $grupo;
	   	$asignatura->profesor  = $profesor;

	// Acciones
	   	if ($Accion == 'Insertar') {
	   		$creation = $asignatura->Create();
	   		$asignaturas = $asignatura->all(); 
	   		j($asignaturas);
	   	}elseif ($Accion == 'Actualizar') {
	   		$asignatura->id = $id;
	   		$saved = $asignatura->Save();
	   		$asignaturas = $asignatura->all(); 
	   		j($asignaturas);
	   	}elseif ($Accion == 'Eliminar') {
	   		$asignatura->id = $id;
	   		$delete = $asignatura->Delete();
	   		$asignaturas = $asignatura->all(); 
	   		j($asignaturas);
	   	}elseif ($Accion == 'Buscar') {
	   		$asignatura->id = $id;		
		    $asignatura->Find(); 
	   		j($asignatura);
	   	}elseif ($Accion == 'Reporte') {
	   		$data = $db->query("SELECT * FROM asignaturas");
	   		j($data);
	    }elseif($Accion == 'Select') {
	   		if ($Campo == 'materia') {
	   			$data = $db->query("SELECT id as 'value', nombre as 'option' FROM materias");
	   			s($data);
	   		}
	   		if($Campo == 'grupo'){
                $data = $db->query("SELECT id as 'value', nombre as 'option' FROM grupos");
                s($data);
            }
            if($Campo == 'profesor'){
                $data = $db->query("SELECT id as 'value', nombre as 'option' FROM profesores");
                s($data);
            }
	   	}else{
	   		$asignaturas = $db->query("SELECT 
					asignaturas.id as 'id',
					materias.nombre as 'materia',
					grupos.nombre as 'grupo',
					profesores.nombre as 'profesor'
				FROM asignaturas
					LEFT JOIN materias
				ON asignaturas.materia = materias.id
					LEFT JOIN grupos
				ON asignaturas.grupo = grupos.id
					LEFT JOIN profesores
				ON asignaturas.profesor = profesores.id"); 
	   		j($asignaturas);
	   	}
?>