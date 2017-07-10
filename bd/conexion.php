<?php

$con = mysql_connect("localhost","root","AlejaSiza2015");
if (!$con){
	die('Could not connect: ' . mysql_error());
}
mysql_select_db("APP_SIC", $con);
return($con);

?>

