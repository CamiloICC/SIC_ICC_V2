<?php
include '../bd/conexion.php';
?>
<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1, user-scalable=no, width=device-width">

<title>ICC Mobile</title>
<link rel="stylesheet" type="text/css" href="../libs/jquery.mobile-1.2.0/jquery.mobile-1.2.0.css">
<link href="../assets/css/estilo.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../libs/jquery.mobile-1.2.0/jquery.js"></script>



<script type="text/javascript" src="../libs/jquery.mobile-1.2.0/jquery.mobile-1.2.0.js"></script>

<script type="text/javascript">
	function campage(){
		$("#incluirPagina").load("index.html");
	}

	function abrir_face(){
		if(confirm("Abrir con Facebook APP"))
		document.location.href="fb://page/183681255003002";
		else
		document.location.href="https://www.facebook.com/Superintendenciadeindustriaycomercio/"; 
	}
	function getDepartamento() {
                var id = document.getElementById("especialidad").value;
                $.ajax({
                        type: "POST",
                        url: 'departamento.php',
                        dataType: 'json',
                        data: "id_esp=" + id, // appears as $_GET['id'] @ your backend side
                        beforeSend: function() {
                                //$('#summary111').html('checking');
                        },
                        complete: function() {},
                        success: function(html) {
                                var cadena="<option value='' selected></option>";
                                $.each(html, function(index,valor) {
                                        //alert("element at " + index + ": " + valor); // will alert each value
                                        cadena  = cadena +"<option value='"+index +"'>"+valor +"</option>";
                                });
				$('#departamento').val('').change();
				$('#ciudad').val('').change();
				$('#sede').val('').change();
				$('#especialista').val('').change();
				$('#hora').val('').change();
				$('#matencion').val('').change();
                                $('#departamento').find('option').remove().end();
                                $('#departamento').append(cadena);
                        }
                   });
        }
	function getCiudad() {
		var id = document.getElementById("departamento").value;
		$.ajax({
     			type: "POST",
			url: 'ciudad.php',
			dataType: 'json',
			data: "id_esp=" + id, // appears as $_GET['id'] @ your backend side
			beforeSend: function() {
        			//$('#summary111').html('checking');
    			},
    			complete: function() {},
    			success: function(html) {
				var cadena="<option value=''></option>";
				$.each(html, function(index,valor) {
			        	//alert("element at " + index + ": " + valor); // will alert each value
					cadena  = cadena +"<option value='"+index +"'>"+valor +"</option>";
				});
				$('#ciudad').val('').change();
				$('#sede').val('').change();
				$('#especialista').val('').change();
				$('#hora').val('').change();
				$('#matencion').val('').change();
				$('#ciudad').find('option').remove().end();
        			$('#ciudad').append(cadena);
			}
		   });
	}
	function getSede() {
                var id = document.getElementById("ciudad").value;
                $.ajax({
                        type: "POST",
                        url: 'sede.php',
                        dataType: 'json',
                        data: "id_esp=" + id, // appears as $_GET['id'] @ your backend side
                        beforeSend: function() {
                                //$('#summary111').html('checking');
                        },
                        complete: function() {},
                        success: function(html) {
                                var cadena="<option value=''></option>";
                                $.each(html, function(index,valor) {
                                        //alert("element at " + index + ": " + valor); // will alert each value
                                        cadena  = cadena +"<option value='"+index +"'>"+valor +"</option>";
                                });
				$('#sede').val('').change();
				$('#especialista').val('').change();
				$('#hora').val('').change();
				$('#matencion').val('').change();
                                $('#sede').find('option').remove().end();
                                $('#sede').append(cadena);
                        }
                   });
        }
	function getEspecialista() {
                var id = document.getElementById("sede").value;
                $.ajax({
                        type: "POST",
                        url: 'especialista.php',
                        dataType: 'json',
                        data: "id_esp=" + id, // appears as $_GET['id'] @ your backend side
                        beforeSend: function() {
                                //$('#summary111').html('checking');
                        },
                        complete: function() {},
                        success: function(html) {
                                var cadena="<option value=''></option>";
                                $.each(html, function(index,valor) {
                                        //alert("element at " + index + ": " + valor); // will alert each value
                                        cadena  = cadena +"<option value='"+index +"'>"+valor +"</option>";
                                });
				$('#especialista').val('').change();
				$('#hora').val('').change();
				$('#matencion').val('').change();
                                $('#especialista').find('option').remove().end();
                                $('#especialista').append(cadena);
                        }
                   });
        }
	function getHora_Matencion() {
                var id = document.getElementById("especialista").value;
                $.ajax({
                        type: "POST",
                        url: 'hora.php',
                        dataType: 'json',
                        data: "id_esp=" + id, // appears as $_GET['id'] @ your backend side
                        beforeSend: function() {
                                //$('#summary111').html('checking');
                        },
                        complete: function() {},
                        success: function(html) {
                                var cadena="<option value=''></option>";
                                $.each(html, function(index,valor) {
                                        //alert("element at " + index + ": " + valor); // will alert each value
                                        cadena  = cadena +"<option value='"+index +"'>"+valor +"</option>";
                                });
				$('#hora').val('').change();
                                $('#hora').find('option').remove().end();
                                $('#hora').append(cadena);
                        }
                   });
		   $.ajax({
                        type: "POST",
                        url: 'matencion.php',
                        dataType: 'json',
                        data: "id_esp=" + id, // appears as $_GET['id'] @ your backend side
                        beforeSend: function() {
                                //$('#summary111').html('checking');
                        },
                        complete: function() {},
                        success: function(html) {
                                var cadena="<option value=''></option>";
                                $.each(html, function(index,valor) {
                                        //alert("element at " + index + ": " + valor); // will alert each value
                                        cadena  = cadena +"<option value='"+index +"'>"+valor +"</option>";
                                });
				$('#matencion').val('').change();
                                $('#matencion').find('option').remove().end();
                                $('#matencion').append(cadena);
                        }
                   });
        }
	function consumirWS() {
alert();
		var parametros = {
			"id_aplicacion":"10442",
			"id_servicio":"10443",
			"numero_documento":"111111",
			"tipo_documento":"1",
			"nombres_cliente":"camilo",
			"apellidos_cliente":"diaz",
			"fecha_nacimiento":"30/06/1987",
			"telefono_fijo":"1234567",
			"telefono_celular":"3007093222",
			"correo_electronico":"camilo.diaz@interactivo.com.co",
			"pais_cliente":"1",
			"depto_cliente":"6606",
			"ciudad_cliente":"6606",
			"direccion":"Calle 164 ",
			"especialidad":"11182",
			"pais=1&depto":"6606",
			"ciudad":"6606",
			"sede":"11194",
			"especialista":"1565",
			"medio_atencion":"11170",
			"fecha_desde":"22/06/2017 09:00",
			"fecha_hasta":"22/06/2017 10:00",
			"asunto":"Cita de control",
			"motivo_cita":"11481",
			"descripcion":"descripcion"
        	};

                $.ajax({
                        type: "POST",
                        url: 'http://192.168.100.144/proyecto/agendamiento/api/eventos',
                        dataType: 'json',
                        data: parametros, // appears as $_GET['id'] @ your backend side
                        beforeSend: function() {
                                //$('#summary111').html('checking');
                        },
                        complete: function() {},
                        success: function(html) {
                                var cadena="<option value=''></option>";
                                $.each(html, function(index,valor) {
                                        //alert("element at " + index + ": " + valor); // will alert each value
                                        cadena  = cadena +"<option value='"+index +"'>"+valor +"</option>";
                                });
				$('#sede').val('').change();
				$('#especialista').val('').change();
				$('#hora').val('').change();
				$('#matencion').val('').change();
                                $('#sede').find('option').remove().end();
                                $('#sede').append(cadena);
                        }
                   });
        }
  </script>
</head>
<body >

<div data-role="page" data-theme="b">
	<div data-role="header">
    	<h1>SIC RESPONDE</h1>
        <!--  <a>Principal</a> -->                       
    </div>
    <div data-role="content" >
     <div align="center"><img src="../assets/img/sic.jpg" width="100%"/></div>
 	<div data-role="controlgroup" data-type="vertical" align="center " >



<form action="http://192.168.100.150/wsserver/REST/sic_agenda.php" method="post" data-ajax="false">
<label >Especialidad:</label>
	<select name="" id="especialidad" onchange="getDepartamento();">
		<option value=""></option>
		<?php
		$query = "SELECT * FROM ESPECIALIDAD WHERE ESTADO = 0";
		$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
		while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
			echo "<option value='".$line['ID_ESPECIALIDAD']."'>".$line['ESPECIALIDAD']."</option>";
		}		
		?>
	</select>
<label >Departamento:</label>
	<select id="departamento" name="departamento" onchange="getCiudad();"></select>
<label >Ciudad:</label>
	<select id="ciudad" name="ciudad" onchange="getSede();"></select>
<label >Sede:</label>
	<select id="sede" name="sede" onchange="getEspecialista();"></select>
<label >Especialista:</label>
	<select id="especialista" name="especialista" onchange="getHora_Matencion();"></select>
<label >Fecha cita:</label>
	<input type="text"  name="fechacita" id="" >
<label >Hora cita:</label>
	<select id="hora" name="horacita" ></select>
<label >Medio Atención:</label>
	<select id="matencion" name="matencion"></select>
<label >Asunto:</label>
	<input type="text" name="asunto" id="" value="">
<label >Motivo Cita:</label>
	<input type="text" name="motivocita" id="" value="">
<label >Descripción:</label>
	<textarea name="desc"></textarea>
<label >Numero de Documento:</label>
	<input type="text" name="ndoc" id="" value="">
<label >Tipo Documento:</label>
	<input type="text" name="tdoc" id="" value="">
<label >Nombres Cliente:</label>
	<input type="text" name="nomb_cl" id="" value="">
<label >Apellido Cliente:</label>
	<input type="text" name="apel_cl" id="" value="">
<label >Telefono Fijo:</label>
	<input type="text" name="tel_cl" id="" value="">
<label >Extensi&oacute;n:</label>
	<input type="text" name="ext_cl" id="" value="">
<label >Tel&eacute;fono Celular:</label>
	<input type="text" name="cel_cl" id="" value="">
<label >Fecha Nacimiento:</label>
	<input type="text" name="fecnac_cl" id="" value="">
<label >Correo Electronico:</label>
	<input type="text" name="email_cl" id="" value="">
<label >Dirección:</label>
	<input type="text" name="dir_cl" id="" value="">
<label >Departamento residencia:</label>
	<input type="text" name="depto_cl" id="" value="">
<label >Ciudad residencia:</label>
	<input type="text" name="ciud_cl" id="" value="">
<input type="submit" data-role="button" value="ENVIAR">
</form>
<button onclick="consumirWS();">Enviar WS</button>

        </div>
		<div align="center"><a href="http://www.sic.gov.co/sites/default/files/files/Politicas_Habeas_Data_0.pdf"><img src="../assets/img/politica.png" width="100%"/></a></div>		
    </div>
    <div data-role="footer" align="center" class="footer">
	<!--  &nbsp; -->

  		<p style="font-size:12px;">Copyright Procesos y soluciones Interactivo Contact Center 2017.</p> 
    </div>
</div>


</body>
</html>

