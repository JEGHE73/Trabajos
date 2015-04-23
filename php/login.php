<?php
	session_start();
	include("connect_db.php");

	$_SESSION['correo']=$_POST['email'];
	$_SESSION['password']=$_POST['contraseña'];
	$_SESSION['password']=sha1($_SESSION['password']);

	$consult=mysql_query("SELECT * FROM registro WHERE correo='$_SESSION[correo]'")or die ('usuario no existe');	

	if($_SESSION['correo']==mysql_result($consult,0,'correo')){
		if($_SESSION['password']==mysql_result($consult,0,'clave')){
			header('location: inicio.php');
		}
		else{
		echo"correo y/o contraseña son incorrectas";
	}
	}
	else {
		echo 'error en:'.mysql_error();
	}
	
?>