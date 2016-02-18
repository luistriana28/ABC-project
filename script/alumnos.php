<?php
	error_reporting(E_ALL ^ E_NOTICE);
	header('Content-type: application/json');

	include_once("easyCRUD/Db.class.php");
	$db = new Db();

	include_once("easyCRUD/easyCRUD.class.php");

	class Escuela  Extends Crud {
		
			# Your Table name 
			protected $table = 'alumnos';
			
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
   		$alumno  = new Escuela();

	  	$alumno->nombre = $nombre;
	   	$alumno->a_paterno = $a_paterno;
	   	$alumno->a_materno  = $a_materno;
        $alumno->matricula = $matricula;
        $alumno->usuario = $usuario;
        $alumno->grupo = $grupo;

	// Acciones
	   	if ($Accion == 'Insertar') {
	   		$creation = $alumno->Create();
	   		$alumnos = $alumno->all(); 
	   		j($alumnos);
	   	}elseif ($Accion == 'Actualizar') {
	   		$alumno->id = $id;
	   		$saved = $alumno->Save();
	   		$alumnos = $alumno->all(); 
	   		j($alumnos);
	   	}elseif ($Accion == 'Eliminar') {
	   		$alumno->id = $id;
	   		$delete = $alumno->Delete();
	   		$alumnos = $alumno->all(); 
	   		j($alumnos);
	   	}elseif ($Accion == 'Buscar') {
	   		$alumno->id = $id;		
		    $alumno->Find(); 
	   		j($alumno);
	   	}elseif ($Accion == 'Reporte') {
	   		$data = $db->query("SELECT * FROM alumnos");
	   		j($data);
	    }elseif($Accion == 'Select') {
	   		if ($Campo == 'usuario') {
	   			$data = $db->query("SELECT id as 'value', user as 'option' FROM usuarios");
	   			s($data);
	   		}
	   		if($Campo == 'grupo'){
                $data = $db->query("SELECT id as 'value', nombre as 'option' FROM grupos");
                s($data);
            }
	   	}else{
	   		$alumnos = $db->query("SELECT 
					alumnos.id as 'id',
					matricula,
					CONCAT(alumnos.nombre, ' ',a_paterno, ' ',a_materno) as 'nombre',
					usuarios.user as usuario,
					grupos.nombre as grupo
				FROM alumnos
					LEFT JOIN usuarios
				ON alumnos.usuario = usuarios.id
					LEFT JOIN grupos
				ON alumnos.grupo = grupos.id"); 
	   		j($alumnos);
	   	}
?>