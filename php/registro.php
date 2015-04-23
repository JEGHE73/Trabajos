<?php
	include('connect_db.php');

	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$pass= sha1($pass);
	$rpass = $_POST['rpass'];
	$rpass= sha1($rpass);
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellidos'];
	$tdoc = $_POST['tdoc'];
	$ndoc = $_POST['ndoc'];
	$anyo = $_POST['anyo'];
	$mes = $_POST['mes'];
	$dia= $_POST['dia'];   
	$sexo = $_POST['sexo'];
	$carg = $_POST['carg'];	
	$ficha= $_POST['ficha'];
	$programa=$_POST['programa'];
	$region=$_POST['regional'];
	$centro=$_POST['centro'];

	$sql=mysql_query('SELECT * FROM registro WHERE correo="'.$email.'"');
	if (mysql_num_rows($sql)==1){
		
		echo "<script>
			alert('El usuario ".$email." ya existe');
		</script>";
	}
	else {
		$ingresa=mysql_query('INSERT INTO registro(correo,clave,nombre,ape,tdoc,doc,anyo,mes,dia,sexo,rol,ficha,programa,regional,centro) VALUES ("'.$email.'","'.$pass.'","'.$nombre.'","'.$apellido.'","'.$tdoc.'","'.$ndoc.'","'.$anyo.'","'.$mes.'","'.$dia.'","'.$sexo.'","'.$carg.'","'.$ficha.'","'.$programa.'","'.$region.'","'.$centro.'")');
        
		if($ingresa){
            $ingresa2=mysql_query('INSERT INTO usuario(nombre,ape,rol,correo,fperfil,fportada) VALUES ("'.$nombre.'","'.$apellido.'","'.$carg.'","'.$email.'","img/perfil.png","img/portada.jpg")');
			echo "<script>alert('usuario registrado con exito');</script>";
		}
		else {
			echo "error en: ".mysql_error();
		}
	}
?>