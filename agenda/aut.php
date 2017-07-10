<? 
echo "<h3>Prueba de consulta LDAP</h3>"; 
echo "Conectando ..."; 
$ds=ldap_connect("192.168.100.11");  // Debe ser un servidor LDAP valido! 
echo "El resultado de la conexion es ".$ds."<br />"; 

if ($ds) {  
   echo "Autentificandose  ...";  
   $r=ldap_bind($ds);    // Autentificacion anonima, habitual de los 
                           // accesos de solo lectura 
   echo "El resultado de la autentificacion es ".$r."<br />"; 
}
?>
