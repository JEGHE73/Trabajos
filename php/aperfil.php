<?php
$conexion=mysql_connect("localhost","root","") 
<?php
session_start();
include 'connect_db.php';

if ($_FILES['archivo']["error"] > 0)
  {
  echo "Error: " . $_FILES['archivo']['error'] . "<br>";
  }
else
  {
    
     $rutaservidor="../img";
	 $ruta_temportal=$_FILES['archivo']['tmp_name'];
	 $tipo=$_FILES['archivo']['type'];
	 $nombre=$_FILES['archivo']['name'];
	 $ruta_destino=$rutaservidor."/".$nombre;
     $ruta_insertada="img"."/".$nombre;
	 move_uploaded_file($ruta_temportal,$ruta_destino);
   
    $sql=mysql_query("UPDATE usuario SET fperfil='$ruta_insertada' WHERE correo='".$_SESSION['correo']."'")or die ("error");
    $sql2=mysql_query("INSERT INTO  imagenes (imagen) values('".$ruta_insertada."')")or die ("error");

    header('location:../archivos.php');
}

?>