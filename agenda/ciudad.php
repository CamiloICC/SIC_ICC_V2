<?php
include '../bd/conexion.php';
$array = array();
$query = "SELECT * FROM CIUDAD WHERE ESTADO = 0 AND DEPARTAMENTO_ID=".$_POST[id_esp];
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
	$array[$line[ID_CIUDAD]] = $line[CIUDAD];
}
echo json_encode($array);
exit();
?>
