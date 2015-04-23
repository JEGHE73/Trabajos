<?php 
if(isset($_POST['enviar'])){
    include'php/login.php';
}

if(isset($_POST['submit'])){
    include 'php/registro.php';
}
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
        #ficha,#programa{
        display: none;   
        }  
        #img{
            width: 40%;
            height: 70%;
        }
        #nac input{
            margin-right:5px;   
        }
		@-moz-document url-prefix() {
			  fieldset {
			   display: table-cell; 
				}
		}
		header h1{
			margin-left:20px;
			font-size:50px;
			 display:inline-block;
		    margin-left: 6%;
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
        </style>
	        
        <script type="text/javascript">
            function agregar(){
                    i = document.getElementById('rol').value 
                   if(i=='ap'){
                        document.getElementById('programa').style.display = 'inline';
                        document.getElementById('ficha').style.display = 'inline';                       
                    }
            }
            function aparece(){
                c = document.getElementById("regional").value;
                                if(c=='Seleccione'){
                    document.getElementById('muestra').innerHTML = '';
                }
                if(c=='ANTIOQUIA'){
                    document.getElementById('muestra').innerHTML = '<select id="c1" name="centro" ><option value="CENTRO DE LOS RECURSOS NATURALES RENOVABLES">CENTRO DE LOS RECURSOS NATURALES RENOVABLES</option><option value="CENTRO DE DISEÑO Y MANUFACTURA DE CUERO Itaguí">CENTRO DE DISEÑO Y MANUFACTURA DE CUERO Itaguí</option><option value="CENTRO DE FORMACIÓN EN DISEÑO, CONFECCIÓN Y MODA">CENTRO DE FORMACIÓN EN DISEÑO, CONFECCIÓN Y MODA.</option><option value="CENTRO PARA EL DESARROLLO DEL HABITAT Y LA CONSTRUCCION">CENTRO PARA EL DESARROLLO DEL HABITAT Y LA CONSTRUCCION</option><option value="CENTRO DE TECNOLOGÍA DE LA MANUFACTURA AVANZADA">CENTRO DE TECNOLOGÍA DE LA MANUFACTURA AVANZADA.</option><option value="CENTRO TECNOLOGICO DEL MOBILIARIO">CENTRO TECNOLOGICO DEL MOBILIARIO</option>	<option value="CENTRO TECNOLÓGICO DE GESTIÓN INDUSTRIAL">CENTRO TECNOLÓGICO DE GESTIÓN INDUSTRIAL</option><option value="CENTRO DE COMERCIO">CENTRO DE COMERCIO</option><option value="CENTRO DE SERVICIOS DE SALUD">CENTRO DE SERVICIOS DE SALUD</option><option value="CENTRO DE SERVICIOS Y GESTION EMPRESARIAL">CENTRO DE SERVICIOS Y GESTION EMPRESARIAL</option><option value="COMPLEJO TECNOLOGICO PARA LA GESTION AGROEMPRESARIAL">COMPLEJO TECNOLOGICO PARA LA GESTION AGROEMPRESARIAL</option><option value="COMPLEJO TECNOLOGICO MINERO AGROEMPRESARIAL">COMPLEJO TECNOLOGICO MINERO AGROEMPRESARIAL</option><option value="CENTRO DE LA INNOVACION, LA AGROINDUSTRIA Y EL TURISMO">CENTRO DE LA INNOVACION, LA AGROINDUSTRIA Y EL TURISMO</option><option value="COMPLEJO TECNOLOGICO TURISTICO Y AGROINDUSTRIAL DEL OCCIDENTE ANTIOQUEÑO">COMPLEJO TECNOLOGICO TURISTICO Y AGROINDUSTRIAL DEL OCCIDENTE ANTIOQUEÑO</option><option value="COMPLEJO TECNOLOGICO AGROINDUSTRIAL, PECUARIO Y TURISTICO">COMPLEJO TECNOLOGICO AGROINDUSTRIAL, PECUARIO Y TURISTICO</option></select>';
                }
                if(c=='ATLANTICO'){
                    document.getElementById('muestra').innerHTML = '<select id="c2" name="centro"><option value="CENTRO PARA EL DESARROLLO AGROECOLOGICO Y AGROINDUSTRIAL">CENTRO PARA EL DESARROLLO AGROECOLOGICO Y AGROINDUSTRIAL</option><option value="CENTRO NACIONAL COLOMBO ALEMAN">CENTRO NACIONAL COLOMBO ALEMAN</option><option value="CENTRO INDUSTRIAL Y DE AVIACION">CENTRO INDUSTRIAL Y DE AVIACION</option><option value="CENTRO DE COMERCIO Y SERVICIOS">CENTRO DE COMERCIO Y SERVICIOS</option></select>';
                }
                if(c=='BOGOTA'){
                    document.getElementById('muestra').innerHTML = '<select id="c3" name="centro"><option value="CENTRO DE TECNOLOGIAS PARA LA CONSTRUCCION Y LA MADERA">CENTRO DE TECNOLOGIAS PARA LA CONSTRUCCION Y LA MADERA</option><option value="CENTRO DE ELECTRICIDAD, ELECTRONICA Y TELECOMUNICACIONES">CENTRO DE ELECTRICIDAD, ELECTRONICA Y TELECOMUNICACIONES</option><option value="CENTRO DE GESTION INDUSTRIAL">CENTRO DE GESTION INDUSTRIAL</option><option value="CENTRO DE MANUFACTURA EN TEXTILES Y CUERO">CENTRO DE MANUFACTURA EN TEXTILES Y CUERO</option><option value="CENTRO DE TECNOLOGIAS DEL TRANSPORTE">CENTRO DE TECNOLOGIAS DEL TRANSPORTE</option><option value="CENTRO METALMECANICO">CENTRO METALMECANICO</option><option value="CENTRO DE MATERIALES Y ENSAYOS">CENTRO DE MATERIALES Y ENSAYOS</option><option value="CENTRO DE DISEÑO Y METROLOGIA">CENTRO DE DISEÑO Y METROLOGIA</option><option value="CENTRO PARA LA INDUSTRIA DE LA COMUNICACIÓN GRAFICA">CENTRO PARA LA INDUSTRIA DE LA COMUNICACIÓN GRAFICA</option><option value="CENTRO DE GESTION DE MERCADOS, LOGISTICA Y TECNOLOGIAS DE LA INFORMACION">CENTRO DE GESTION DE MERCADOS, LOGISTICA Y TECNOLOGIAS DE LA INFORMACION</option><option value="CENTRO DE FORMACION DE TALENTO HUMANO EN SALUD">CENTRO DE FORMACION DE TALENTO HUMANO EN SALUD</option><option value="CENTRO DE GESTION ADMINISTRATIVA">CENTRO DE GESTION ADMINISTRATIVA</option><option value="CENTRO DE SERVICIOS FINANCIEROS">CENTRO DE SERVICIOS FINANCIEROS</option><option value="CENTRO NACIONAL DE HOTELERIA, TURISMO Y ALIMENTOS">CENTRO NACIONAL DE HOTELERIA, TURISMO Y ALIMENTOS</option><option value="CENTRO DE GESTION Y FORTALECIMIENTO SOCIO-EMPRESARIAL value=""">CENTRO DE GESTION Y FORTALECIMIENTO SOCIO-EMPRESARIAL</option></select>';
}
                if(c=='BOLIVAR'){
                    document.getElementById('muestra').innerHTML = '<select id="c4" name="centro"><option value="CENTRO AGROEMPRESARIAL Y MINERO">CENTRO AGROEMPRESARIAL Y MINERO</option><option value="CENTRO NAUTICO ACUICOLA Y PESQUERO">CENTRO NAUTICO ACUICOLA Y PESQUERO</option><option value="CENTRO PARA LA INDUSTRIA PETROQUIMICA">CENTRO PARA LA INDUSTRIA PETROQUIMICA</option><option value="CENTRO DE COMERCIO Y SERVICIOS">CENTRO DE COMERCIO Y SERVICIOS</option><option value="CENTRO DE DESARROLLO AGROPECUARIO Y AGROINDUSTRIAL">CENTRO DE DESARROLLO AGROPECUARIO Y AGROINDUSTRIAL</option></select>';
                }
                if(c=='BOYACA'){
                    document.getElementById('muestra').innerHTML = '<select id="c5" name="centro"><option value="CENTRO MINERO">CENTRO MINERO</option><option value="CENTRO DE GESTION ADMINISTRATIVA Y FORTALECIMIENTO EMPRESARIAL">CENTRO DE GESTION ADMINISTRATIVA Y FORTALECIMIENTO EMPRESARIAL</option><option value="CENTRO INDUSTRIAL DE MANTENIMIENTO Y MANUFACTURA">CENTRO INDUSTRIAL DE MANTENIMIENTO Y MANUFACTURA</option></select>';
                }
                if(c=='CALDAS'){
                    document.getElementById('muestra').innerHTML = '<select id="c6" name="centro"><option value="CENTRO PARA LA FORMACION CAFETERA">CENTRO PARA LA FORMACION CAFETERA</option><option value="CENTRO DE AUTOMATIZACION INDUSTRIAL">CENTRO DE AUTOMATIZACION INDUSTRIAL</option><option value="CENTRO DE PROCESOS INDUSTRIALES">CENTRO DE PROCESOS INDUSTRIALES</option><option value="CENTRO DE COMERCIO Y SERVICIOS">CENTRO DE COMERCIO Y SERVICIOS</option><option value="CENTRO PECUARIO Y AGROEMPRESARIAL">CENTRO PECUARIO Y AGROEMPRESARIAL </option></select>';
}
                if(c=='CAQUETA'){
                    document.getElementById('muestra').innerHTML = '<select id="c7" name="centro"><option value="CENTRO TECNOLOGICO DE LA AMAZONIA">CENTRO TECNOLOGICO DE LA AMAZONIA</option></select>';
                }
                if(c=='CAUCA'){
                    document.getElementById('muestra').innerHTML = '<select id="c8" name="centro"><option value="CENTRO AGROPECUARIO">CENTRO AGROPECUARIO</option><option value="CENTRO DE TELEINFORMATICA Y PRODUCCION INDUSTRIAL">CENTRO DE TELEINFORMATICA Y PRODUCCION INDUSTRIAL </option><option value="CENTRO DE COMERCIO Y SERVICIOS">CENTRO DE COMERCIO Y SERVICIOS </option></select>';
                }
                if(c=='CESAR'){
                    document.getElementById('muestra').innerHTML = '<select id="c9" name="centro"><option value="CENTRO BIOTECNOLOGICO DEL CARIBE">CENTRO BIOTECNOLOGICO DEL CARIBE</option><option value="CENTRO AGROEMPRESARIAL">CENTRO AGROEMPRESARIAL</option><option value="CENTRO DE OPERACIÓN Y MANTENIMIENTO MINERO">CENTRO DE OPERACIÓN Y MANTENIMIENTO MINERO</option></select>';
}
                if(c=='CORDOBA'){
                    document.getElementById('muestra').innerHTML = '<select id="c10" name="centro"><option value="CENTRO AGROPECUARIO Y DE BIOTECNOLOGIA EL PORVENIR">CENTRO AGROPECUARIO Y DE BIOTECNOLOGIA EL PORVENIR</option><option value="CENTRO DE COMERCIO, INDUSTRIA Y TURISMO DE CORDOBA">CENTRO DE COMERCIO, INDUSTRIA Y TURISMO DE CORDOBA</option></select>';
}
                if(c=='CUNDINAMARCA'){
                    document.getElementById('muestra').innerHTML = '<select id="c11" name="centro"><option value="CENTRO INDUSTRIAL Y DESARROLLO EMPRESARIAL DE SOACHA">CENTRO INDUSTRIAL Y DESARROLLO EMPRESARIAL DE SOACHA</option><option value="CENTRO DE DESARROLLO AGROINDUSTRIAL Y EMPRESARIAL">CENTRO DE DESARROLLO AGROINDUSTRIAL Y EMPRESARIAL</option><option value="CENTRO AGROECOLOGICO Y EMPRESARIAL">CENTRO AGROECOLOGICO Y EMPRESARIAL</option><option value="CENTRO DE LA TECNOLOGIA DEL DISEÑO Y LA PRODUCTIVIDAD EMPRESARIAL">CENTRO DE LA TECNOLOGIA DEL DISEÑO Y LA PRODUCTIVIDAD EMPRESARIAL</option><option value="CENTRO DE BIOTECNOLOGIA AGROPECUARIA">CENTRO DE BIOTECNOLOGIA AGROPECUARIA</option><option value="CENTRO DE DESARROLLO AGROEMPRESARIA">CENTRO DE DESARROLLO AGROEMPRESARIA</option></select>';
                }
                if(c=='CHOCO'){
                    document.getElementById('muestra').innerHTML = '<select id="c12" name="centro"><option value="CENTRO DE RECURSOS NATURALES, INDUSTRIA Y BIODIVERSIDAD">CENTRO DE RECURSOS NATURALES, INDUSTRIA Y BIODIVERSIDAD</option></select>';
                }
                if(c=='HUILA'){
                    document.getElementById('muestra').innerHTML = '<select id="c13" name="centro"><option value="CENTRO DE FORMACION AGROINDUSTRIAL">CENTRO DE FORMACION AGROINDUSTRIAL</option><option value="CENTRO AGROEMPRESARIAL Y DESARROLLO PECUARIO DEL HUILA">CENTRO AGROEMPRESARIAL Y DESARROLLO PECUARIO DEL HUILA</option><option value="CENTRO DE DESARROLLO AGROEMPRESARIAL Y TURISTICO DEL HUILA">CENTRO DE DESARROLLO AGROEMPRESARIAL Y TURISTICO DEL HUILA</option><option value="CENTRO DE LA INDUSTRIA, LA EMPRESA Y LOS SERVICIOS">CENTRO DE LA INDUSTRIA, LA EMPRESA Y LOS SERVICIOS</option><option value="CENTRO DE GESTION Y DESARROLLO SOSTENIBLE SURCOLOMBIANO">CENTRO DE GESTION Y DESARROLLO SOSTENIBLE SURCOLOMBIANO</option></select>';
}
                if(c=='GUAJIRA'){
                    document.getElementById('muestra').innerHTML = '<select id="c14" name="centro"><option value="CENTRO INDUSTRIAL Y DE ENERGIAS ALTERNATIVAS">CENTRO INDUSTRIAL Y DE ENERGIAS ALTERNATIVAS</option><option value="CENTRO AGROEMPRESARIAL Y ACUICOLA">CENTRO AGROEMPRESARIAL Y ACUICOLA</option></select>';
                }
                if(c=='MAGDALENA'){
                    document.getElementById('muestra').innerHTML = '<select id="c15" name="centro"><option value="CENTRO ACUICOLA Y AGROINDUSTRIAL DE GAIRA">CENTRO ACUICOLA Y AGROINDUSTRIAL DE GAIRA</option><option value="CENTRO DE LOGISTICA Y PROMOCION ECOTURISTICA DEL MAGDALENA">CENTRO DE LOGISTICA Y PROMOCION ECOTURISTICA DEL MAGDALENA</option></select>';
                }
                if(c=='META'){
                    document.getElementById('muestra').innerHTML = '<select id="c16" name="centro"><option value="CENTRO AGROINDUSTRIAL DEL META">CENTRO AGROINDUSTRIAL DEL META</option><option value="CENTRO DE INDUSTRIA Y SERVICIOS DEL META">CENTRO DE INDUSTRIA Y SERVICIOS DEL META</option></select>';
}
                if(c=='NARIÑO'){
                    document.getElementById('muestra').innerHTML = '<select id="c17" name="centro"><option value="CENTRO SUR COLOMBIANO DE LOGÍSTICA INTERNACIONAL">CENTRO SUR COLOMBIANO DE LOGÍSTICA INTERNACIONAL</option><option value="CENTRO AGROINDUSTRIAL Y PESQUERO DE LA COSTA PACIFICA">CENTRO AGROINDUSTRIAL Y PESQUERO DE LA COSTA PACIFICA</option><option value="CENTRO INTERNACIONAL DE PRODUCCIÓN LIMPIA">CENTRO INTERNACIONAL DE PRODUCCIÓN LIMPIA</option></select>';
                }
                if(c=='NORTE DE SANTANDER'){
                    document.getElementById('muestra').innerHTML = '<select id="c18" name="centro"><option value="SANTANDER CENTRO ATENCION SECTOR AGROPECUARIO">SANTANDER CENTRO ATENCION SECTOR AGROPECUARIO</option><option value="SANTANDER CENTRO DE LA INDUSTRIA, LA EMPRESA Y LOS SERVICIOS">SANTANDER CENTRO DE LA INDUSTRIA, LA EMPRESA Y LOS SERVICIOS</option></select>';
                }
                if(c=='QUINDIO'){
                    document.getElementById('muestra').innerHTML = '<select id="c19" name="centro"><option value="CENTRO AGROINDUSTRIAL">CENTRO AGROINDUSTRIAL</option><option value="CENTRO PARA EL DESARROLLO TECNOLÓGICO DE LA CONSTRUCCIÓN">CENTRO PARA EL DESARROLLO TECNOLÓGICO DE LA CONSTRUCCIÓN</option><option value="CENTRO DE COMERCIO, INDUSTRIA Y TURISMO">CENTRO DE COMERCIO, INDUSTRIA Y TURISMO</option></select>';
}
                if(c=='RISARALDA'){
                    document.getElementById('muestra').innerHTML = '<select id="c20" name="centro"><option value="CENTRO ATENCION SECTOR AGROPECUARIO">CENTRO ATENCION SECTOR AGROPECUARIO</option><option value="CENTRO DE DISEÑO E INNOVACION TECNOLÓGICA INDUSTRIAL">CENTRO DE DISEÑO E INNOVACION TECNOLÓGICA INDUSTRIAL</option><option value="CENTRO DE COMERCIO Y SERVICIOS">CENTRO DE COMERCIO Y SERVICIOS</option></select>';
}
                if(c=='SANTANDER'){
                    document.getElementById('muestra').innerHTML = '<select id="c21" name="centro"><option value="CENTRO ATENCION SECTOR AGROPECUARIO">CENTRO ATENCION SECTOR AGROPECUARIO</option><option value="CENTRO INDUSTRIAL DE MANTENIMIENTO INTEGRAL">CENTRO INDUSTRIAL DE MANTENIMIENTO INTEGRAL </option><option value="CENTRO INDUSTRIAL DEL DISEÑO Y LA MANUFACTURA">CENTRO INDUSTRIAL DEL DISEÑO Y LA MANUFACTURA </option><option value="CENTRO DE SERVICIOS EMPRESARIALES Y TURISTICOS">CENTRO DE SERVICIOS EMPRESARIALES Y TURISTICOS</option><option value="CENTRO INDUSTRIAL Y DEL DESARROLLO TECNOLOGICO">CENTRO INDUSTRIAL Y DEL DESARROLLO TECNOLOGICO</option><option value="CENTRO AGROTURISTICO">CENTRO AGROTURISTICO</option><option value="CENTRO AGROEMPRESARIAL Y TURISTICO DE LOS ANDES">CENTRO AGROEMPRESARIAL Y TURISTICO DE LOS ANDES</option><option value="CENTRO DE GESTION AGROEMPRESARIAL DEL ORIENTE">CENTRO DE GESTION AGROEMPRESARIAL DEL ORIENTE</option></select>';
                }
                if(c=='SUCRE'){
                    document.getElementById('muestra').innerHTML = '<select id="c22" name="centro"><option value="CENTRO DE LA INNOVACION, LA TECNOLOGIA Y LOS SERVICIOS">CENTRO DE LA INNOVACION, LA TECNOLOGIA Y LOS SERVICIOS</option></select>';
                }
                if(c=='TOLIMA'){
                    document.getElementById('muestra').innerHTML = '<select id="c23" name="centro"><option value="CENTRO AGROPECUARIO LA GRANJA">CENTRO AGROPECUARIO LA GRANJA</option><option value="CENTRO DE INDUSTRIA Y CONSTRUCCION">CENTRO DE INDUSTRIA Y CONSTRUCCION </option><option value="CENTRO DE COMERCIO Y SERVICIOS">CENTRO DE COMERCIO Y SERVICIOS</option></select>';
                }
                if(c=='VALLE'){
                    document.getElementById('muestra').innerHTML = '<select id="c24" name="centro"><option value="CENTRO AGROPECUARIO DE BUGA">CENTRO AGROPECUARIO DE BUGA</option><option value="CENTRO LATINOAMERICANO DE ESPECIES MENORES">CENTRO LATINOAMERICANO DE ESPECIES MENORES</option><option value="CENTRO NAUTICO PESQUERO DE BUENAVENTURA">CENTRO NAUTICO PESQUERO DE BUENAVENTURA</option><option value="CENTRO DE ELECTRICIDAD Y AUTOMATIZACION INDUSTRIAL">CENTRO DE ELECTRICIDAD Y AUTOMATIZACION INDUSTRIAL</option><option value="CENTRO DE LA CONSTRUCCION">CENTRO DE LA CONSTRUCCION </option><option value="CENTRO NACIONAL DE ASISTENCIA TECNICA A LA INDUSTRIA">CENTRO NACIONAL DE ASISTENCIA TECNICA A LA INDUSTRIA</option><option value="CENTRO DE GESTION TECNOLÓGICA DE SERVICIOS">CENTRO DE GESTION TECNOLÓGICA DE SERVICIOS</option><option value="CENTRO DE TECNOLOGIAS AGROINDUSTRIALES">CENTRO DE TECNOLOGIAS AGROINDUSTRIALES</option><option value="CENTRO DE BIOTECNOLOGIA INDUSTRIAL">CENTRO DE BIOTECNOLOGIA INDUSTRIAL</option></select>';
                }
                if(c=='ARAUCA'){
                    document.getElementById('muestra').innerHTML = '<select id="c25" name="centro"><option value="CENTRO DE GESTION Y DESARROLLO AGROINDUSTRIAL DE ARAUCA">CENTRO DE GESTION Y DESARROLLO AGROINDUSTRIAL DE ARAUCA</option></select>';
}
                if(c=='CASANARE'){
                    document.getElementById('muestra').innerHTML = '<select id="c26" name="centro"><option value="CENTRO AGROINDUSTRIAL Y FORTALECIMIENTO EMPRESARIAL DE CASANARE">CENTRO AGROINDUSTRIAL Y FORTALECIMIENTO EMPRESARIAL DE CASANARE</option></select>';
                }
                if(c=='PUTUMAYO'){
                    document.getElementById('muestra').innerHTML = '<select id="c27" name="centro"><option value="CENTRO AGROFORESTAL Y ACUICOLA ARAPAIMA">CENTRO AGROFORESTAL Y ACUICOLA ARAPAIMA</option></select>';
                }
                if(c=='SAN ANDRES'){
                    document.getElementById('muestra').innerHTML = '<select id="c28" name="centro"><option value="CENTRO DE FORMACION TURISTICA, GENTE DE MAR Y DE SERVICIOS">CENTRO DE FORMACION TURISTICA, GENTE DE MAR Y DE SERVICIOS</option></select>';
}
                if(c=='AMAZONAS'){
                    document.getElementById('muestra').innerHTML = '<select id="c29" name="centro"><option value="CENTRO PARA LA BIODIVERSIDAD Y EL TURISMO DEL AMAZONAS">CENTRO PARA LA BIODIVERSIDAD Y EL TURISMO DEL AMAZONAS</option></select>';
}
                if(c=='GUAINIA'){
                    document.getElementById('muestra').innerHTML = '<select id="c30" name="centro"><option value="CENTRO AMBIENTAL Y ECOTURISTICO DEL NORORIENTE AMAZONICO">CENTRO AMBIENTAL Y ECOTURISTICO DEL NORORIENTE AMAZONICO</option></select>';
}
                if(c=='GUAVIARE'){
                    document.getElementById('muestra').innerHTML = '<select id="c31" name="centro"><option value="CENTRO DE DESARROLLO AGROINDUSTRIAL, TURISTICO Y TECNOLOGICO DEL GUAVIARE">CENTRO DE DESARROLLO AGROINDUSTRIAL, TURISTICO Y TECNOLOGICO DEL GUAVIARE</option></select>';
}
                if(c=='VAUPES'){
                    document.getElementById('muestra').innerHTML = '<select id="c32" name="centro"><option value="CENTRO AGROPECUARIO Y DE SERVICIOS AMBIENTALES">CENTRO AGROPECUARIO Y DE SERVICIOS AMBIENTALES </option></select>';
}
                if(c=='VICHADA'){
                    document.getElementById('muestra').innerHTML = '<select id="c33" name="centro"><option value="CENTRO DE PRODUCCIÓN Y TRANSFORMACION AGROINDUSTRIAL DE LA ORINOQUIA">CENTRO DE PRODUCCIÓN Y TRANSFORMACION AGROINDUSTRIAL DE LA ORINOQUIA</option></select>';
}
                }
        </script>
</head>
<body>
	<div class="container">
		<div class="row">
		  	<div class="col-md-4">
		  	<header>
			  		<h1 style="margin-top:4%; margin-left:6%; ">
						<span id="ttl">Sena</span><span id="ttl2">Juntos</span>
					</h1> 
			</header>
			</div>
		  	<div class="col-md-6 col-md-offset-7" style="margin-top:-10px;">
			 	<form method="POST"class="form-inline"style="width:100%;">
					  <div class="form-group">
					        <input type="text" name="email" placeholder="Email" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
					   </div>
					  <div class="form-group">
						    <input type="password" name="contraseña" class="form-control" placeholder="password" id="exampleInputEmail2" placeholder="jane.doe@example.com">
					  </div>
					  <input type="submit" name="enviar" value="Entrar" class="btn btn-default"/>
				</form>
			</div>
		</div>
		<div class="row">
		  <div class="col-md-7"style="margin-top:3%;">
			<img src="img/imgreg.jpg" class="img-responsive" alt="Responsive image">
		  </div>
		    <div class="col-md-4 col-md-offset-3" style="margin-left:40px;">
		    	<form method="post" id="formu" class="form-horizontal" style="width:100%; heigth:40%; position:absolute;">
	                <h1><center>Registrate</center></h1><br>
	        		<table class="table table-responsive table-bordered table-hover">
	            			<tr>
	        				<td>
	        				<p>Correo Misena:</p>
	        				 </td>
	        				<td> 
	        					<input type="text" class="input-default" id="correo" name="email" required="required"/>
	        				</td>
	        			</tr>
	        			<tr>
	        				<td>
	        				<p>Contraseña:</p>
	        				 </td>
	        				<td> 
	        					<input type="password" class="input-default" name="pass" required="required"/>
	        				</td>
	        			</tr>
	        			<tr>
	        				<td>
	        				<p>Repetir Contraseña:</p>
	        				 </td>
	        				<td> 
	        					<input type="password" class="input-default"name="rpass" required="required"/>
	        				</td>
	        			</tr>
	        			<tr>
	        				<td>
	        			<p>	Nombre:</p>
	        				 </td>
	        				<td> 
	        					<input type="name" class="input-default" name="nombre" required="required"/>
	        				</td>
	        			</tr>
	        			<tr>
	        				<td>
	        				<p> Apellidos:</p>
	        				 </td>
	        				<td> 
	        					<input type="text" class="input-default"name="apellidos" required="required"/>
	        				</td>
	        			</tr> 
	        			<tr>
	        				<td>
	        			<p>Tipo Documento:</p>
	        				 </td>
	        				<td> 
	        					<p><select name="tdoc" required="required"></p>
	        						<option >Seleccione</option>
	        						<option value="cedula">cedula de ciudadania</option>
	        						<option value="TI">tarjeta de identidad</option>
	        						<option value="cedex">cedula de extranjeria</option>
	        					</select>
	        				</td>
	        			</tr>
	        			<tr>
	        				<td>
	        			<p>	Numero De Documento:</p>
	        				 </td>
	        				<td> 
	        					<input type="text" name="ndoc" required="required"/>
	        				</td>
	        			</tr>
	        			<tr>
	        				<td>
	        				<p>Fecha De Nacimiento:</p>
	        				 </td>
	        				<td id="nac"> 
	        					<input type="text" class="btn-default" name="anyo" placeholder="Año" required="required"/><br><br>
	        					<input type="text" class="btn-default" name="mes" placeholder="Mes" required="required"/><br><br>
	        					<input type="text" class="btn-default" name="dia"  placeholder="Dia" required="required"/>
	        				</td>
	        			</tr>
	        			<tr>
	        				<td>
	        			<p>	Sexo:</p>
	        				 </td>
	        				<td> 
	        					<p><select  name="sexo" required="required"></p>
	        						<option>Seleccione</option>
	        						<option value="f">femenino</option>
	        						<option value="m">masculino</option>
	        					</select>
	        				</td>
	        			</tr>
	        			<tr>
	        				<td>
	        				<p>Rol en el sena:</p>
	        				 </td>
	        				<td> 
	        					<p><select id="rol" name="carg" required="required" onchange="agregar();"></p>
	        						<option>Seleccione</option>
	        						<option value="ap">Aprendiz</option>
	        						<option value="tu">Instructor</option>
	        						<option value="dir">Directivos</option>
	        					</select>
	        				</td>
	        			</tr>
	                    <tr id="ficha">
	        				<td>
	        				<p>Ficha: </p>
	        				 </td>
	        				<td> 
	        					<input type="text" name="ficha"/>
	        				</td>
	        			</tr>
	                    <tr id="programa">
	        				<td>
	        				<p>Programa: </p>
	        				 </td>
	        				<td> 
	        					<input type="text" name="programa"/>
	        				</td>
	                    </tr>
	                    <tr>
	        				<td>
	                            Regional:
	        				 </td>
	        				<td>
        <select id="regional" name="regional" onchange="aparece();">
	                            <option>Seleccione</option>
	                            <option value="ANTIOQUIA">ANTIOQUIA</option>
	                            <option value="ATLANTICO">ATLANTICO</option>
	                            <option value="BOGOTA">BOGOTA</option>
	                            <option value="BOLIVAR">BOLIVAR</option>
	                            <option value="BOYACA">BOYACA</option>
	                            <option value="CALDAS">CALDAS</option>
	                            <option value="CAQUETA">CAQUETA</option>
	                            <option value="CAUCA">CAUCA</option>
	                            <option value="CESAR">CESAR</option>
	                            <option value="CORDOBA">CORDOBA</option>
	                            <option value="CUNDINAMARCA">CUNDINAMARCA</option>
	                            <option value="CHOCO">CHOCO</option>
	                            <option value="HUILA">HUILA</option>
	                            <option value="GUAJIRA">GUAJIRA</option>
	                            <option value="MAGDALENA">MAGDALENA</option>
	                            <option value="META">META</option>
	                            <option value="NARIÑO">NARIÑO</option>
	                            <option value="NORTE DE SANTANDER">NORTE SANTANDER</option>
	                            <option value="QUINDIO">QUINDIO</option>
	                            <option value="RISARALDA">RISARALDA</option>
	                            <option value="SANTANDER">SANTANDER</option>
	                            <option value="SUCRE">SUCRE</option>
	                            <option value="TOLIMA">TOLIMA</option>
	                            <option value="VALLE">VALLE</option>
	                            <option value="ARAUCA">ARAUCA</option>
	                            <option value="CASANARE">CASANARE</option>
	                            <option value="PUTUMAYO">PUTUMAYO</option>
	                            <option value="SAN ANDRES">SAN ANDRES</option>
	                            <option value="AMAZONAS">AMAZONAS</option>
	                            <option value="GUINIA">GUAINIA</option>
	                            <option value="GUAVIARE">GUAVIARE</option>
	                            <option value="VAUPES">VAUPES</option>
	                            <option value="VICHADA">VICHADA</option>
	                        </select>
</td>

	        			</tr>
	                    <tr>
	        				<td>
	                            Centro:
	        				 </td>
	        				<td><div id="muestra"></div></td>

	        			</tr>
	        			
	        		</table>
	        		<div id="regis" style="margin-left:0%;">
	        		<input type="submit" name="submit" value="Registrarme" onclick="enviar();" class="input input-small"/>
	        		</div>
	        		<div id="limpiar" style="margin-left:30%; margin-top:-26px; position:absolute;">
	        		<input type="reset" name="reset" value="Limpiar" class="input input-small"/>
	        		</div>
               </form> 
		    </div>
		</div>
	</div>
</body>
</html>