<?php 
//Defino mi variable mensaje
   $msg=$_POST['msg'];
   $rutaservidor="img";
   $ruta_temportal=$_FILES['fotos']['tmp_name'];
   $tipo=$_FILES['fotos']['type'];
   $nombre=$_FILES['fotos']['name'];
   $ruta_destino=$rutaservidor."/".$nombre;
   move_uploaded_file($ruta_temportal,$ruta_destino);


if(empty($msg)){
  header('location: inicio.php');
}
if (empty($nombre)) {
  header('location: inicio.php');
}
//Si no esta vacia
if(!empty($msg) OR !empty($nombre)){
  if($ruta_destino){
    //Conecto con la base de datos
     $cx = mysql_connect("localhost", "root", "") or die("Error connect: ".mysql_error());
     //Selecciono la base de datos
     mysql_select_db("senajuntos") or die("Error select db: ".mysql_error());
     //Inserto el mensaje al tabla
     mysql_query("INSERT INTO publicaciones (message,fotos) VALUES ('".$msg."','".$ruta_destino."')", $cx);
    header('location: inicio.php');

  } 
   
}
 ?>

