<?php
include '../bd/conexion.php';
$array = array();
$query = "SELECT * FROM SEDE WHERE ESTADO = 0 AND CIUDAD_ID=".$_POST[id_esp];
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
	$array[$line[ID_SEDE]] = $line[SEDE];
}
echo json_encode($array);
exit();
?>
