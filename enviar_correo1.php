<?php

//var_dump($_POST);
echo "12";
//begin notificacion

include("libs/php_mail/class.phpmailer.php");

//Creamos una instancia en lugar usar mail()
$correo = new PHPMailer();

//Usamos el SetFrom para decirle al script quien envia el correo
$correo->SetFrom("desarrollo@interactivo.com.co", "Notificacion APP SIC");

//Usamos el AddReplyTo para decirle al script a quien tiene que responder el correo
$correo->AddReplyTo("camilo.diaz@interactivo.com.co","Notificacion APP SIC");

//Usamos el AddAddress para agregar un destinatario
$correo->AddAddress("camilo.diaz@interactivo.com.co", "Notificacion APP SIC");
//$correo->AddAddress($cc_ciudadano_email, "Notificacion APP SIC");

//Ponemos el asunto del mensaje
$correo->Subject = "Notificacion APP SIC";

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
                        <img src='http://190.66.6.221/MOBILE/SIC_ICC/assets/img/sicresponde.png' />
                </td>
        </tr>
        <tr>
                <td class='tdcorreo'>
                        <hr>
                        <strong>Asunto:</strong>
			
                </td>
        </tr>
        <tr>
                <td align='center' class='tdcorreo'>
                        <img src='http://190.66.6.221/MOBILE/SIC_ICC/assets/img/intro.png' />
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
  echo "Mensaje enviado con exito.";
}
//end notificacion






?>
