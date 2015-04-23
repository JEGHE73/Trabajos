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
	<link rel="shortcut icon" type="image/x-icon" href="img/icon.png" />
	<style type="text/css">
        #chgprf{
            width:90px;   
        }
        #chgprt{
            width:90px;   
        }
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
		 .modalmask {
                position: fixed;
                font-family: Arial, sans-serif;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                background: rgba(0,0,0,0.5);
                z-index: 99999;
                opacity:0;
                -webkit-transition: opacity 400ms ease-in;
                -moz-transition: opacity 400ms ease-in;
                transition: opacity 400ms ease-in;
                pointer-events: none;
            }
            .modalmask:target {
                opacity:1;
                pointer-events: auto;
            }
            .modalbox{
                width: 600px;
                height: 500px;
                position: relative;
                padding: 20px;
                background: rgba(0,0,0,0.6);
                border-radius:3px;
                -webkit-transition: all 500ms ease-in;
                -moz-transition: all 500ms ease-in;
                transition: all 500ms ease-in;
                overflow-y: scroll;
                overflow-x: hidden;
            }
            .modalbox2{
                width: 600px;
                height: auto;
                position: relative;
                padding: 30px;
                background: rgb(255,255,255);
                border-radius:3px;
                -webkit-transition: all 500ms ease-in;
                -moz-transition: all 500ms ease-in;
                transition: all 500ms ease-in;
                overflow-x: hidden;   
            }
            .movedown {
                margin: 5% auto;
            }
            .modalmask img{   
                width: 95%;
            }

            .close {
                background: rgba(0,0,0,0.5);
                color: #FFFFFF;
                line-height: 25px;
                position: absolute;
                right: 1px;
                text-align: center;
                top: 1px;
                width: 24px;
                text-decoration: none;
                font-weight: bold;
                border-radius:3px;

            }

            .close:hover {
                background: rgba(0,0,0,1);
                color:#222;
            }
			
/*modal2*/
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
		<div id="navbar"class="col-md-12">
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
							<button type="submit" name="search" class="glyphicon glyphicon-search btn"></button>
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

	<!---->

	<div class="row">
		<div class="row" id="center">
					<div class="col-md-6" style="width:25%; margin-top:8%;">
							<table id="table" class="table table-hover"style="margin-left:6%;">
							<thead>
								<tr>
									<th><?php
                include 'php/connect_db.php';
                $consulta=mysql_query("SELECT fperfil FROM usuario WHERE correo='".$_SESSION['correo']."'")or die ("error");
                           while ($filas=mysql_fetch_array($consulta))
                               {
                                $img_pub=$filas["fperfil"];
                                echo "<img src='$img_pub' width='150' height='150'></a><br>";
                               }

                                        ?><form action="php/fperfil.php" method="post" enctype="multipart/form-data">
            <input type="file" name="archivo" id="chgprf" ></input>
            <input type="submit" value="Subir archivo"></input>
		</form></th>
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
					<?php
                include 'php/connect_db.php';

                $consulta=mysql_query("SELECT fportada FROM usuario WHERE correo='".$_SESSION['correo']."'");
                               while ($filas=mysql_fetch_array($consulta))
                               {
                                $img_pub=$filas["fportada"];
                                echo "<img src='$img_pub' width='938' height='445'></a><br>";
                               }

        ?>
					<nav class="navbar navbar-default" role="navigation" style="width:50%;margin-left:50%;margin-top:-60px;">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
					
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse navbar-ex1-collapse">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="perfil.php">Biografia</a></li>
								<li><a href="galeria.php">Galerìa</a></li>
								<li><a href="#">Amigos</a></li>
								<li><a href="#">Ayuda</a></li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</nav>
					<form action="php/fportada.php" method="post" enctype="multipart/form-data">
                        <input type="file" name="archivo" id="chgprt" style="margin-top:-130px; margin-left:90%;"></input>
                        <input type="submit" value="Subir archivo" style="margin-top:-270px; margin-left:89%;"></input>
		            </form>
				<center>
				<div class="row">
				    <div class="col-md-12">
				    	<section id="contenedor">			
                            <?php
                include 'php/connect_db.php';
                $consulta=mysql_query("SELECT imagen FROM imagenes WHERE correo='".$_SESSION['correo']."'")or die ("error");
                           while ($filas=mysql_fetch_array($consulta))
                               {
                                $img_pub=$filas["imagen"];
                                echo "<a href=''><img src='$img_pub' width='150' height='150'></a>";
                               }
?>
						</section>
					</div>
				    <div class="row">
				    	<div class="col-md-12" style="margin-top:10%;">
                            <?php
                include 'php/connect_db.php';
                $consulta=mysql_query("SELECT imagen FROM imagenes WHERE correo='".$_SESSION['correo']."'")or die ("error");
                           while ($filas=mysql_fetch_array($consulta))
                               {
                                $img_pub=$filas["imagen"];
                                echo "<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
				    			<a href='#' class='thumbnail'>
				    				<img src='$img_pub' style='width:170px; height:180px;'>
				    			</a>
				    		</div>";
                               }
?>
				    	</div>
                        
				    </div>
				    
				  </div>
				  </center>
				</div>
		</div>
	</div>
</div>



	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>