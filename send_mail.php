<?php 

if(isset($_POST["data"])) {

   $data = $_POST["data"];

   $destination = $data[5]['value'];
   $subject = $data[0]['value'];


   $headers = "MIME-Version: 1.0\r\n";
   $headers .= "Content-type: text/html; charset=utf-8\r\n"; 

   $headers .= "From: Web Hotel Catamaran <mail@hotelcatamaran.com>\r\n"; 

   $headers .= "Reply-To: ".$data[2]["value"]."\r\n"; 

   $headers .= "Cc: ".$data[2]["value"]."\r\n"; 


   switch ($data[6]["value"]) {
      case 'es':

      $message = ' 
      <html>
      <body> 
         Nombre: '.$data[1]["value"].'
         <br>
         <br>
         <h2>'.$subject.'</h2>
         <p>'.$data[4]["value"].'</p>
         <br>
         <p>
            <strong>Email:</strong>
            <br>
            '.$data[2]["value"].'
            <br>
            <strong>Teléfono:</strong>
            <br>
            '.$data[3]["value"].'
         </p> 
      </body> 
      </html> 
      ';
         
      break;
      case 'en':
         
      $message = ' 
      <html> 
      <body> 
         Name: '.$data[1]["value"].'
         <br>
         <br>
         <h2>'.$subject.'</h2>
         <p>'.$data[4]["value"].'</p>
         <br>
         <p>
            <strong>Email:</strong>
            <br>
            '.$data[2]["value"].'
            <br>
            <strong>Phone:</strong>
            <br>
            '.$data[3]["value"].'
         </p> 
      </body> 
      </html> 
      ';
         
      break;
      default:
         
      break;
   }

   $mail = mail($destination, $subject, $message, $headers);
   

   if($mail) {

      echo json_encode("sent");
   }
   else {

      echo json_encode("error");

   }

}
else {

   echo json_encode("error");

}


?>