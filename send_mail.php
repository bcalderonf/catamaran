<?php 

   $destinatario = "rogerthedeveloper@gmail.com";
   $asunto = "CONTACTO";
   
   $cuerpo = ' 
   <html> 
   <head> 
      <title>Prueba de correo</title> 
   </head> 
   <body> 
   <h1>Hola amigos!</h1> 
   </body> 
   </html> 
   '; 

   //para el envío en formato HTML 
   $headers = "MIME-Version: 1.0\r\n";
   $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

   //dirección del remitente 
   $headers .= "From: Web Hotel Catamaran <mail@hotelcatamaran.com>\r\n"; 

   //dirección de respuesta, si queremos que sea distinta que la del remitente 
   $headers .= "Reply-To: mail@hotelcatamaran.co\r\n"; 

   //direcciones que recibián copia 
   $headers .= "Cc: rogerthedeveloper@gmail.com\r\n"; 

   //direcciones que recibirán copia oculta 
   $headers .= "Bcc: rogerthedeveloper@gmail.com\r\n";

   mail($destinatario, $asunto, $cuerpo, $headers);

?>