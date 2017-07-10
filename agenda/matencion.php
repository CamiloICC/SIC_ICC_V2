<?php
include '../bd/conexion.php';
$array = array();
$query = "SELECT * FROM ESPECIALISTA WHERE ESTADO = 0 AND ID_ESPECIALISTA=".$_POST[id_esp];
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
	$array[$line[MATENCION]] = $line[MATENCION];
}
echo json_encode($array);
exit();
?>
