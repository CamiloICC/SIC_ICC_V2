<?php

//begin notificacion

$nombre=$_POST["nombre"];
$doc=$_POST["documento"];
$email=$_POST["correo"];
$tsoli=$_POST["tipo_solicitud"];
$text=$_POST["textarea"];
include("libs/php_mail/class.phpmailer.php");

//Creamos una instancia en lugar usar mail()
$correo = new PHPMailer();

//Usamos el SetFrom para decirle al script quien envia el correo
$correo->SetFrom("desarrollo@interactivo.com.co", "Notificacion APP SIC");

//Usamos el AddReplyTo para decirle al script a quien tiene que responder el correo
$correo->AddReplyTo("camilo.diaz@interactivo.com.co","Notificacion APP SIC");

//Usamos el AddAddress para agregar un destinatario
$correo->AddAddress("camilo.diaz@interactivo.com.co", "Notificacion APP SIC");
$correo->AddAddress($email, "Notificacion APP SIC");
$correo->AddAddress("contactenos@sic.gov.co", "Notificacion APP SIC");

//Ponemos el asunto del mensaje
$correo->Subject = "Notificaci&oacute;n APP SIC";

/*
 * Si deseamos enviar un correo con formato HTML utilizaremos MsgHTML:
 * $correo->MsgHTML("<strong>Mi Mensaje en HTML</strong>");
 * Si deseamos enviarlo en texto plano, haremos lo siguiente:
 * $correo->IsHTML(false);
 * $correo->Body = "Mi mensaje en Texto Plano";
 */

$correo->MsgHTML("
<table width='100%' style='border: 2px solid #000; background-color:#E3E8EC'>
        <tr>
                <td align='center' class='tdcorreo'>
                        <img src='http://190.66.6.221/MOBILE/SIC_ICC/assets/img/email_intro.png' width='300px'/>
			&nbsp;
                        <img src='http://190.66.6.221/MOBILE/SIC_ICC/assets/img/email_sicresponde.png' width='300px'/>
                </td>
        </tr>
        <tr>
                <td >
                        <hr>
                        <strong>Nombre y Apellido:</strong>".$nombre."<br />
                        <strong>Documento de Identidad:</strong>".$doc."<br />
                        <strong>Correo Electr&oacute;nico:</strong>".$email."<br />
                        <strong>Tipo de solicitud:</strong>".$tsoli."<br />
                        <strong>Obejto de la petici&oacute;n:".$text."</strong><br />
			
			
			<hr>
                </td>
        </tr>
        <tr>
                <td align='center' >
                </td>
        </tr>
</table>
        ");

                //Si deseamos agregar un archivo adjunto utilizamos AddAttachment
                //$correo->AddAttachment("images/phpmailer.gif");



//Enviamos el correo
if(!$correo->Send()) {
  echo "Hubo un error: " . $correo->ErrorInfo;
} else {
  echo "<script>alert('Mensaje enviado con exito.')</script>";
}
//end notificacion


echo "<script> window.history.back(); </script>";


?>
