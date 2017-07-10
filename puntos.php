	<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1, user-scalable=no, width=device-width">
<title>ICC Mobile</title>
<link rel="stylesheet" type="text/css" href="libs/jquery.mobile-1.2.0/jquery.mobile-1.2.0.css">
<link href="assets/css/estilo.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="libs/jquery.mobile-1.2.0/jquery.js"></script>


<script type="text/javascript" src="libs/jquery.mobile-1.2.0/jquery.mobile-1.2.0.js"></script>

<script type="text/javascript">
  

    function campage(){

      //$("#incluirPagina").load("index.html");
  }
  </script>
</head>
<body onload="campage()">
<div data-role="page" id="puntos1" data-add-back-btn="true" data-theme="b">
	<div data-role="header">
    	<h1>SIC MOBILE</h1>
        <!--  <a>Principal</a> -->                       
    </div>
    <div data-role="content" style=" ">
  
 	<div data-role="controlgroup" data-type="vertical" align="center" >
			
  <img src="assets/img/sicresponde.png" width="100%"/>	 
<div align="left">
	<hr>
<?php

switch ($_GET[idpunto]){
case 0:

                echo "<strong>Departamento:</strong><br />
		Valle<br />
                <strong>Ciudad:</strong><br />
		Cali <br />
                <strong>Dirección:</strong><br />
 		Calle 10 # 4 -40. Oficina 201 <br />
                <strong>Sede:</strong><br />
		Supersociedades <br />
                <strong>Horario:</strong><br />
		8-12 y 1-5 pm<br />";

                break;
case 1:

                echo "<strong>Departamento:</strong><br />
		Antioquia<br />
                <strong>Ciudad:</strong><br />
		Medellin<br />
                <strong>Dirección:</strong><br />
		Carrera 49 # 53-19 piso 3 Edificio Bancoquia <br />
                <strong>Sede:</strong><br />
		Supersociedades<br />
                <strong>Horario:</strong><br />
		8-12 y 1-5 pm<br />";

                break;
case 2:

                echo "<strong>Departamento:</strong><br />
		Norte de Santander <br />
                <strong>Ciudad:</strong><br/>
		Cúcuta<br />
                <strong>Dirección:</strong><br />
		Av. 0(CERO) A # 21 - 14<br />
                <strong>Sede:</strong><br />
		Supersociedades <br />
                <strong>Horario:</strong><br />
		8-12 y 1-5 pm<br />";

                break;
case 3:

		echo "<strong>Departamento:</strong><br />
		San Andrés Islas<br />
		<strong>Ciudad:</strong><br />
		San Andres<br />
		<strong>Dirección:</strong><br />
		Avenida Colón # 2-20 Edificio BreadFruit Sede Centro de Servicios del Sector Comercio, Industria y Turismo en la Colombia Insular, San Andrés<br />
		<strong>Sede:</strong><br />
		MINCIT<br />
		<strong>Horario:</strong><br />
		8-12 y 2-6 pm<br />";
		break;
case 4:

                echo "<strong>Departamento:</strong><br />
		Caldas<br />
                <strong>Ciudad:</strong><br />
		Manizales<br />
                <strong>Dirección:</strong><br />
		MINCIT - Calle 19 # 21 -44 Torre A Oficina 1201 - Edificio Alcaldía de Manizales<br />
                <strong>Sede:</strong><br />
		MINCIT<br />
                <strong>Horario:</strong><br />
		8-12 y 1-5 pm<br />";
                break;
case 5:

                echo "<strong>Departamento:</strong><br />
		Atlantico<br />
                <strong>Ciudad:</strong><br />
		Barranquilla<br />
                <strong>Dirección:</strong><br />
		Calle 38 # 45 - 53 Piso 2<br />
                <strong>Sede:</strong><br />
		Casa del Consumidor<br />
                <strong>Horario:</strong><br />
		8-12 y 1-5 pm<br />";
                break;
case 6:

                echo "<strong>Departamento:</strong><br />
		Cauca<br />
                <strong>Ciudad:</strong><br />
		Popayan<br />
                <strong>Dirección:</strong><br />
		Calle 5 # 5 - 68 Segundo Piso<br />
                <strong>Sede:</strong><br />
		Casa del Consumidor<br />
                <strong>Horario:</strong><br />
		8-12 y 1-5 pm<br />";

                break;
case 7:

                echo "<strong>Departamento:</strong><br />
		Risaralda<br />
                <strong>Ciudad:</strong><br />
		Pereira<br />
                <strong>Dirección:</strong><br />
		Calle 14 # 5 - 20 Tercer piso<br />
                <strong>Sede:</strong><br />
		Casa del Consumidor<br />
                <strong>Horario:</strong><br />
		8-12 y 1-5 pm<br />";
                break;
case 8:

                echo "<strong>Departamento:</strong><br />
		Quindio<br />
                <strong>Ciudad:</strong><br />
		Armenia<br />
                <strong>Dirección:</strong><br />
		Carrera 16 # 14 - 30<br />
                <strong>Sede:</strong><br />
		Casa del Consumidor<br />
                <strong>Horario:</strong><br />
		8-12 y 1-5 pm<br />";
                break;
case 9:

                echo "<strong>Departamento:</strong><br /> 
		Córdoba<br />
                <strong>Ciudad:</strong><br />
		Monteria<br />
                <strong>Dirección:</strong><br />
		Carrera 3 # 23 - 32 Centro<br />
                <strong>Sede:</strong><br />
		Casa del Consumidor<br />
                <strong>Horario:</strong><br />
		8-12 y 1-5 pm<br />";
                break;
case 10:

                echo "<strong>Departamento:</strong><br />
		Tolima<br />
                <strong>Ciudad:</strong><br />
		Ibague<br />
                <strong>Dirección:</strong><br />
		Carrera 3 calle 19 esquina - Ctro Ccial Andres Lopez de Galarza. Locales 1,2 y 4.<br />
                <strong>Sede:</strong><br />
		Casa del Consumidor<br />
                <strong>Horario:</strong><br />
		8-12 y 1-5 pm<br />";
                break;

case 11:

                echo "<strong>Departamento:</strong><br />
		Huila<br />
                <strong>Ciudad:</strong><br />
		Neiva<br />
                <strong>Dirección:</strong><br />
		Cr 2 # 8 - 05 LC/OFC 4038 Centro Comercial Popular Los Comuneros<br />
                <strong>Sede:</strong><br />
                Casa del Consumidor<br />
                <strong>Horario:</strong><br />
                8-12 y 1-5 pm<br />";
                break;

case 12:

                echo "<strong>Departamento:</strong><br />
		Meta<br />
                <strong>Ciudad:</strong><br />
		Villavicencio<br />
                <strong>Dirección:</strong><br />
		Cr 30 # 41 b - 04 P2 Barrio La Grama<br />
                <strong>Sede:</strong><br />
                Casa del Consumidor<br />
                <strong>Horario:</strong><br />
                8-12 y 1-5 pm<br />";
                break;

case 13:

                echo "<strong>Departamento:</strong><br />
		Santander<br />
                <strong>Ciudad:</strong><br />
		Bucaramanga<br />
                <strong>Dirección:</strong><br />
		Carrera 15 # 31 59/67 Piso 3 Centro Comercial Feghaly<br />
                <strong>Sede:</strong><br />
                Casa del Consumidor<br />
                <strong>Horario:</strong><br />
                8-12 y 1-5 pm<br />";
                break;

case 14:

                echo "<strong>Departamento:</strong><br />
		Bolivar<br />
                <strong>Ciudad:</strong><br />
		Cartagena<br />
                <strong>Dirección:</strong><br />
		Cr 4 # 26 - 171 Plaza la Merced (Frente al nuevo Teatro Heredia)<br />
                <strong>Sede:</strong><br />
                Casa del Consumidor<br />
                <strong>Horario:</strong><br />
                8-12 y 1-5 pm<br />";
                break;

case 15:

                echo "<strong>Departamento:</strong><br />
		Nariño<br />
                <strong>Ciudad:</strong><br />
		Pasto<br />
                <strong>Dirección:</strong><br />
		Calle 16 entre carrera 28 y 29 Casa San Andrés<br />
                <strong>Sede:</strong><br />
                Casa del Consumidor<br />
                <strong>Horario:</strong><br />
                8-12 y 1-5 pm<br />";
                break;

case 16:

                echo "<strong>Departamento:</strong><br />
		Sucre<br />
                <strong>Ciudad:</strong><br />
		Sincelejo<br />
                <strong>Dirección:</strong><br />
		Carrera 18 # 21 - 46 Piso 2<br />
                <strong>Sede:</strong><br />
                Casa del Consumidor<br />
                <strong>Horario:</strong><br />
                8-12 y 1-5 pm<br />";
                break;


default :
		break;
}
?>

	<hr>
</div>
<br />   
  <img src="assets/img/intro.png" width="100%"/>	    
        </div>
		
    </div>
    <div data-role="footer" align="center" class="footer">
	<!--  &nbsp; -->
  		<p style="font-size:12px;">Copyright Procesos y soluciones Interactivo Contact Center 2017.</p> 
    </div>
</div>
</body>
</html>

