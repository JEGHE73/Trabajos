<?php

/*
 * CREATE DATABASE wall;
 * CREATE TABLE message (id int AUTO_INCREMENT , message tinytext, date timestamp, PRIMARY KEY(id));
 * 
 */

//Conecto al servidor
$cx = mysql_connect("localhost", "root", "") or die("Error connect: ".mysql_error());
 
//Seleccion la base de datos
mysql_select_db("senajuntos") or die("Error select db: ".mysql_error());

//Realizo la consulta de la tabla y ordeno por fecha (El ultimo mensaje de primero)
$query = mysql_query("SELECT * FROM publicaciones ORDER BY date DESC", $cx);

//Muestro los mensaje en una lista desordenada
echo '<ul id="message">';
//Si la consulta es verdadera
if($query == true){
   //Recorro todos los campos de la tabla y los muestro
   while ($row = mysql_fetch_array($query)){
   	$msg=$row["message"];
    $img_pub=$row["fotos"];
   if (!empty($msg)) {
    	echo "<hr><img src='img/perfil.png' style='width:10%;heigth:20%;'><li><p>".$row['message']."<span id=\"date\">".$row['date']."</span><span><form class='form-inline'action='action.php' method='POST' enctype='multipart/form-data' autocomplete='OFF'>
           									  <input type='text' name='msg' id='msg' maxlength='500' size='50' style='width:;'/>
									          <input type='submit' name='submit' id='submit' value='Publicar' />
									     </form></span><span><hr></span></li>";
    } 
	else{
    	echo "<img src='img/perfil.png' style='width:10%;heigth:20%;'><li><p>"."<img src='$img_pub' width='150' heigth='150'>"."<br>"." <span id=\"date\">".$row['date']."</span><hr></li>";
    }
    /*else{
    	echo "<img src='img/perfil.png' style='width:10%;heigth:20%;'><li><p>"."<img src='$img_pub' width='150' heigth='150'>"."<br>".$row['message']." <span id=\"date\">".$row['date']."</span><hr></li>";
    }*/
   }
   
}
echo '</ul>'
?>
 