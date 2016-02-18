<?php
	error_reporting(E_ALL ^ E_NOTICE); 
	header('Content-type: application/json');

	extract($_POST); 

	include_once("validacion.php");
	include_once("easyCRUD/Db.class.php");
	$db = new Db();

	$validacion= new Validacion();

	$usuario=$validacion->Limpia($usuario);
	$pass=$validacion->Limpia($pass);
	
	$login = $db->query("SELECT 
							tipos 
						FROM 
							usuarios 
						WHERE user='$usuario' 
						AND password='$pass'");
	echo $login->tipos;

	try
	{
		if(isset($login))
		{
			session_start();
			foreach ($login as $row)
			{			
				$_SESSION['Tipo']=$row['tipos'];
			}
			echo json_encode($validacion->Redireccion($_SESSION['Tipo']));
		}
		else
		{
			echo json_encode(NULL);	
		}
	}
	catch(Exception $e)
	{
		echo json_encode(NULL);
	}
?>