<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "julietayanuar@gmail.com";
 
    $email_subject = "Confirmación!";
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Por favor regresa y arregla los errores.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['Nombre']) ||
 
        !isset($_POST['Apellido']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['hotel']) ||
        
        !isset($_POST['fecha']) ||

        !isset($_POST['cancion']) ||
 
        !isset($_POST['comments'])) {
 
        died('Lo sentimos pero algo mal ha sucedido.');       
 
    }
 
     
 
    $Nombre = $_POST['Nombre']; // required
 
    $Apellido = $_POST['Apellido']; // required
 
    $email_from = $_POST['email']; // required
 
    $hotel = $_POST['hotel']; // not required
    
    $fecha = $_POST['fecha']; // not required

    $cancion = $_POST['cancion']; // not required
 
    $comments = $_POST['comments']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= '<h1>EL correo que has escrito no es válido.</h1><br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$Nombre)) {
 
    $error_message .= 'El primer nombre no es válido.<br />';
 
  }
 
  if(!preg_match($string_exp,$Apellido)) {
 
    $error_message .= 'El apellido no es válido.<br />';
 
  }
 
  if(strlen($comments) < 2) {
 
    $error_message .= 'Los comentarios que has agregados no son válidos.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Respuestas más abajo.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Nombre:".clean_string($Nombre)."";
 
    $email_message .= " ".clean_string($Apellido)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Hotel: ".clean_string($hotel)."\n";

    $email_message .= "Fecha de llegada: ".clean_string($fecha)."\n";

    $email_message .= "Cancion que deseamos bailar con ustedes: ".clean_string($cancion)."\n";
 
    $email_message .= "Comentarios: ".clean_string($comments)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->
 
 
 
Gracias por tu asistencia, nos contactaremos lo más pronto posible!
 
 
 
<?php
 
}
 
?>