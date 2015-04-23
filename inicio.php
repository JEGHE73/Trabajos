<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>SenaJuntos</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<script type="text/javascript" src="js/jquery.js"></script>
	<link rel="shortcut icon" type="image/x-icon" href="img/icon.png" />
	<style type="text/css">
	header h1{
	margin-left:20px;
	font-size:40px;
	 display:inline-block;
    margin-left: 6%;
}
header h1 a{
	text-decoration: none;
}
header h1:hover{
	opacity:0.5;
	cursor: pointer;
}

h1 span#ttl{
	font-family:Forte;
	color:rgba(4,123,117,0.8);
}

h1 span#ttl2{
	font-family:Forte;
	color:rgba(0,0,0,0.6);
}
		#navbar{
		position: fixed;
		z-index: 1;
	}
	#center{
		z-index: 2;
	}
	/*#center2{
		position: fixed;
	}*/

	 body{
        font-family: "lucida grande",tahoma,verdana,arial,sans-serif;
     }
     label{
        color: #808080;
        font-size: 11px;
        font-weight: bold;
        line-height: 30px;
     }
     #wrapper{
        width: 605px;
        margin-left: auto;
        margin-right: auto;
     }
     #msg{
        border: thin solid #B4BBCD !important;
        padding: 5px;
        margin-left: -130px;
        width: 750px;
     }
     #submit{
        color: #fff;
        font-size: 13px;
        background-color: rgba(4,123,113,0.6);
        background-image: url("background.png");
        background-position: 0 -98px;
        background-repeat: no-repeat;
       border-width: 1px;
       cursor: pointer;
       display: inline-block;
       font-weight: bold;
       line-height: normal !important;
       padding: 4px 6px 4px;
       text-align: center;
       text-decoration: none;
       vertical-align: top;
       white-space: nowrap;
       margin-left: 640px;
       margin-top: -27px;
     }
     #wall{
        width: 860px;
        min-height: 200px;
        border: solid thin #B4BBCD;
        margin-top: 10px;
        margin-left: -130px;
        word-wrap: break-word; 
     }
     #wall ul{
        list-style: none;
        font-size: 12px;
        line-height: 20px;
     }
     #wall ul #date{
        font-style: italic;
        font-size: 11px;
        color: #ccc;
        padding-left: 5px;
     }
     #loading{
        float: left;
        position:relative;
        top: 10px;
        left: 450px;
        display: none;
     }
	</style>
	 <script type="text/javascript">
  function loadWall(){
     //Funcion para cargar el muro
     $("#wall").load('wall.php');
     //Devuelve el campo message a vacio
     $("#msg").val("")
  }
  
  //Cuando el documento esta listo carga el muro
 /*$(document).ready(function(){
   loadWall();
 });*/
  </script>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
		<div id="navbar" class="col-md-12">
				<nav class="navbar navbar-default" role="navigation">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<header>
					<h1 style="margin-top:4%; ">
						<a href="inicio.php"><span id="ttl">Sena</span><span id="ttl2">Juntos</span></a>
					</h1>
				</header>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						
					</ul>
					
					<ul class="nav navbar-nav navbar-right">
						<form method="POST" class="navbar-form navbar-left" action="buscaramigos.php">
							<div class="form-group">
								<input type="text" name="texto" class="form-control" placeholder="Buscar...">
							</div>
							<button type="submit" name="search" class="glyphicon glyphicon-search btn" style="background-color: rgba(4,123,113,0.6);"></button>
						</form>
						<li><a href="inicio.php" class="glyphicon glyphicon-home">Inicio</a></li>
						<li><a href="perfil.php" class="glyphicon glyphicon-user">Perfil</a></li>
						<li><a href="#" class="glyphicon glyphicon-globe">Notificaciones</a></li>
						<li><a href="#" class="glyphicon glyphicon-comment">Mensajes</a></li>
						<li><a href="#" class="glyphicon glyphicon-bell">Solicitudes</a></li>
						<li><a class="btn glyphicon glyphicon-cog" data-toggle="modal" href='#modal-id'>Configuraciones</a>
						<div class="modal fade" id="modal-id">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title">Modal title</h4>
									</div>
									<div class="modal-body">
										
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										<button type="button" class="btn btn-primary">Save changes</button>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div><!-- /.modal --></li>
						<li><a href="php/destroy.php" class="glyphicon glyphicon-off">Salir</a></li>
						<li class="dropdown">
										<a href="#" class="dropdown-toggle glyphicon glyphicon-bullhorn" data-toggle="dropdown">Chat <b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li><a href="#" class="glyphicon glyphicon-ok-circle">Amigo1</a></li>
											<li><a href="#" class="glyphicon glyphicon-ban-circle">Amigo2</a></li>
											<li><a href="#" class="glyphicon glyphicon-ok-circle">Amigo3</a></li>
											<li><a href="#" class="glyphicon glyphicon-ban-circle">Amigo4</a></li>
											<li><a href="#" class="glyphicon glyphicon-ok-circle">Amigo5</a></li>
											<li><a href="#" class="glyphicon glyphicon-ban-circle">Amigo6</a></li>
											<li><a href="#" class="glyphicon glyphicon-ok-circle">Amigo7</a></li>
											<li><a href="#" class="glyphicon glyphicon-ban-circle">Amigo8</a></li>
										</ul>
						</li>
						
					</ul>
				</div><!-- /.navbar-collapse -->
			</nav>
		</div>
	</div>	
	<div class="row" id="center">
					<div class="col-md-6" id="center2"style="width:25%; margin-top:8%;">
						<table id="table" class="table table-hover" style="margin-left:6%;">
							<thead>
								<tr>
									<th> <?php
                include 'php/connect_db.php';
                $consulta=mysql_query("SELECT fperfil FROM usuario WHERE correo='".$_SESSION['correo']."'")or die ("error");
                           while ($filas=mysql_fetch_array($consulta))
                               {
                                $img_pub=$filas["fperfil"];
                                echo "<img src='$img_pub' width='150' height='150'></a><br>";
                               }

                                ?>
        </th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><b>Nombres:</b> <?php 
                    	include 'php/connect_db.php';
                    	$nombres=mysql_query("SELECT nombre,ape FROM registro WHERE correo='".$_SESSION['correo']."'")or die ("error");
                    	$consulta=mysql_fetch_array($nombres);
                    	echo $consulta['nombre']." ".$consulta['ape'];
                     ?></td>
								</tr>
								<tr>
									<td><b>Correo:</b> <?php 
                    	include 'php/connect_db.php';
                    	$correo=mysql_query("SELECT correo FROM registro WHERE correo='".$_SESSION['correo']."'")or die ("error");
                    	$consulta=mysql_fetch_array($correo);
                    	echo $consulta['correo'];
                     ?></td>
								</tr>
								<tr>
									<td><b>Edad:</b> <?php 
                        include 'php/connect_db.php';
                       $anyo_act=date("Y");
                       $consulta=mysql_query("SELECT anyo FROM registro WHERE correo='".$_SESSION['correo']."'");
                       $anyo=mysql_fetch_array($consulta);
                       echo $anyo_act - $anyo['anyo'];
                     ?></td>
								</tr>
								<tr>
									<td><b>Ficha:</b> <?php 
                    	include 'php/connect_db.php';
                    	$ficha=mysql_query("SELECT ficha FROM registro WHERE correo='".$_SESSION['correo']."'")or die ("error");
                    	$consulta=mysql_fetch_array($ficha);
                    	echo $consulta['ficha'];
                     ?></td>
								</tr>
								<tr>
									<td><b>Programa:</b> <?php 
                        include 'php/connect_db.php';
                        $programa=mysql_query("SELECT programa FROM registro WHERE correo='".$_SESSION['correo']."'")or die ("error");
                        $consulta=mysql_fetch_array($programa);
                        echo $consulta['programa'];
                     ?></td>
								</tr>
								<tr>
									<td><b>Regional:</b> <?php 
                    	include 'php/connect_db.php';
                    	$regional=mysql_query("SELECT regional FROM registro WHERE correo='".$_SESSION['correo']."'")or die ("error");
                    	$consulta=mysql_fetch_array($regional);
                    	echo $consulta['regional'];
                     ?></td>
								</tr>
								<tr>
									<td><b>Centro:</b>  <?php 
                    	include 'php/connect_db.php';
                    	$cen_form=mysql_query("SELECT centro FROM registro WHERE correo='".$_SESSION['correo']."'")or die ("error");
                    	$consulta=mysql_fetch_array($cen_form);
                    	echo $consulta['centro'];
                     ?></td>
								</tr>
							</tbody>
						</table>	
					
					</div>
					<div class="col-md-6" style="width:70%; border:1px solid silver; height:70%; margin-top:8%; margin-left:2%;">
						<div class="row">
							<div class="col-md-12">
								<div id="wrapper">	
								 
									    <div id="form">
   
       						<form action="action.php" method="post" enctype="multipart/form-data">                 
 <div>
      <a href="#" class="abrir"><input type="file" name="fotos" id="modal1" value="Fotos" style="margin-left:-130px;" ></input>
</a>

  </div>

  <div class="modal">
    <div class="ventana">
      <div class="boton-cerrar">X</div>

      <img src="
            <?php 
            include('wall.php');            
             ?>"
/>
      
    </div>
  </div>
                       <input type="text" name="msg" id="msg" maxlength="200" size="50" />
                       <input type="submit" name="submit" id="submit" value="Publicar" />
                       </form>



									    <div id="loading"><p>Cargando...</p></div>
									    </div>
									    
								    <div id="wall">
								    	<?php 
											include ('wall.php');
								    	 ?>
								    </div>
						   		 </div>
						    </div>
						</div>
				    </div>

    </div>
 </div>
 
<script>
   function addMessage(){
      
      //Tomas el valor del campo msg      
      var msg = $("#msg").val();
      
      //Si empieza el ajax muestro el loading
      $("#loading").ajaxStart(function(){
         $("#loading").show();
      });
      
      //Cuando termina el ajax oculta el loading
      $("#loading").ajaxStop(function(){
         $("#loading").hide();
      });
      
      //Se envian los datos a url y al completarse se recarga el muro
      //con la nueva informacion
      $.ajax({
         url: 'action.php',
         data: 'msg='+ msg,
         type: 'post',
         error: function(obj, msg, obj2){
            alert(msg);
         },
         success: function(data){
            loadWall();
         }
      });      
   };
</script>
					</div>
					
		</div>
	</div>


	<script>
   function addMessage(){
      
      //Tomas el valor del campo msg      
      var msg = $("#msg").val();
      
      //Si empieza el ajax muestro el loading
      $("#loading").ajaxStart(function(){
         $("#loading").show();
      });
      
      //Cuando termina el ajax oculta el loading
      $("#loading").ajaxStop(function(){
         $("#loading").hide();
      });
      
      //Se envian los datos a url y al completarse se recarga el muro
      //con la nueva informacion
      $.ajax({
         url: 'action.php',
         data: 'msg='+ msg,
         type: 'post',
         error: function(obj, msg, obj2){
            alert(msg);
         },
         success: function(data){
            loadWall();
         }
      });      
   };
</script>
	

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>