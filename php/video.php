<?php
session_start();
include 'connect_db.php';

if ($_FILES['archivo']["error"] > 0)
  {
  echo "Error: " . $_FILES['archivo']['error'] . "<br>";
  }
else
  {
    
     $rutaservidor="../videos";
	 $ruta_temportal=$_FILES['archivo']['tmp_name'];
	 $tipo=$_FILES['archivo']['type'];
	 $nombre=$_FILES['archivo']['name'];
	 $ruta_destino=$rutaservidor."/".$nombre;
     $ruta_insertada="videos"."/".$nombre;
	 move_uploaded_file($ruta_temportal,$ruta_destino);
    
        $sql=mysql_query("INSERT INTO videos (video) values('".$ruta_insertada."')")or die ("error");

	 
    header('location:../videos.php');
}