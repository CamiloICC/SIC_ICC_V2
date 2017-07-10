<?php
include '../bd/conexion.php';
$array = array();
$query = "select * from AGENDA A
inner join ESPECIALISTA B on A.SEDE_ID = B.SEDE_ID AND A.AGENDA = B.AGENDA
WHERE B.ID_ESPECIALISTA = ".$_POST[id_esp];
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
	$array[$line[FECHA_INICIO]." ".$line[FECHA_FIN]] = $line[FECHA_INICIO]." ".$line[FECHA_FIN];
}
echo json_encode($array);
exit();
?>
