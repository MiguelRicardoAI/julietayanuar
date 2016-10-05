  <!DOCTYPE html>
  <html>
  <head>
    <script type="text/javascript">
      window.smartlook||(function(d) {
        var o=smartlook=function(){ o.api.push(arguments)},h=d.getElementsByTagName('head')[0];
        var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';
        c.charset='utf-8';c.src='//rec.getsmartlook.com/recorder.js';h.appendChild(c);
      })(document);
      smartlook('init', '44b87d60b535f49dec1a6ffbb2668f214f33e390');
    </script>
    <title>Julieta & Anuar</title>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <!--Import Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet"> 
    <!--Import materialize.css-->
    <link href="css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />
    <link href="css/animate.css" media="all" rel="stylesheet" type="text/css" />
    <link href="css/materialize.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
      .parallax-container {
        height: 500px;
      }
      .nav-wrapper{
        margin-top: 20px;
      }
      .custom-container{
        width: 100%;
        min-height: 10em;
      }
      .caption{
        margin-top: 20%;
      }
      .brand-logo{
        margin-left: 10%;
        font-family: 'Lato', sans-serif;
        font-weight: 400;
      }
      h3{
        font-size: 3em;
        font-weight: 300;
      }
      .userView{
        height: 200px;
      }
      body{
        font-family: 'Lato', sans-serif;
        font-weight: 300;
      }
      .hid{
        background-color:rgba(52, 74, 81, 0.42); 
        width:100%; 
        height:100%;
      }
      .cloud{
        width: 100%;
        height: 30;
        border: 0;
        visibility: hidden;
      }
    </style>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body>

    <div class="hid">   
      <!--begin_nav-->
      <div class="parallax-container">

        <nav>
          <div class="nav-wrapper white lighten-5">
            <!--logo-->
            <a href="index.html" class="brand-logo left white grey-text text-darken-1">JULIETA & ANUAR</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse black-text right"><i class="material-icons">menu</i></a>
            <!--right-->
            <ul class="right hide-on-med-and-down">
              <li><a href="index" class="black-text"><i class="small material-icons left">home</i>INICIO</a></li>
              <li><a href="history" class="black-text"><i class="small material-icons left">favorite</i>HISTORIA</a></li>
              <li><a href="wedding" class="black-text"><i class="small material-icons left">event</i>BODA</a></li>
              <li><a href="oaxaca" class="black-text"><i class="small material-icons left">explore</i>OAXACA</a></li>
              <li><a href="travel" class="black-text"><i class="small material-icons left">flight_land</i>VIAJE</a></li>
              <li><a href="#modal1" class="black-text modal-trigger"><i class="small material-icons left">card_giftcard</i>REGALOS</a></li>
              <li><a href="#" class="red-text text-darken-2"><i class="small material-icons left animated pulse infinite">note</i>RSVP</a></li>
            </ul>
            <!--begin_mobile-->
            <ul id="mobile-demo" class="side-nav">
              <li>
                <div class="userView">
                  <img alt="side" class="background responsive-img" src="http://res.cloudinary.com/dfocrv7tg/image/upload/v1471324097/story/image00.jpg" />
                </div>
              </li>
              <li><a href="index">INICIO</a></li>
              <li><a href="history">HISTORIA</a></li>
              <li><a href="wedding">BODA</a></li>
              <li><a href="oaxaca">OAXACA</a></li>
              <li><a href="travel">VIAJE</a></li>
              <li><a href="#modal1" class="black-text modal-trigger">REGALOS</a></li>
              <li><a href="#" class="red-text text-darken-2">RSVP</a></li>
              <li><a href="mailto:julietayanuar@gmail.com" class="waves-effect waves-light btn center grey darken-2">julietayanuar@gmail.com</a></li>
            </ul>
            <!--end_mobile-->
          </div>
        </nav>
        <!--end_nav-->

        <div class="parallax">
          <img alt="encuentro" src="http://res.cloudinary.com/dfocrv7tg/image/upload/v1474466783/home/menu.jpg" /></div>
        </div>
      </div>

      <div class="custom-container center">
          <b>Ceremonia Religiosa:</b> Templo de Santo Domingo de Guzmán
          <p><b>Hora: </b>17:30 hrs</p>
          <p><b>Recepción: </b>Jardín Casa Don Luis.</p>
          <p><b>Hora: </b>19:30 hrs.</p>
        CONFIRMA TU ASISTENCIA, ESTAREMOS FELICES DE PODER CELEBRAR CONTIGO
      
      <div class="col hide " id="message">
        <div class="card-panel teal z-depth-1 white-text">
            GRACIAS POR TU MENSAJE!
        </div>
      </div>

        <div class="row">
          <div class="col s12 m12">
            <div class="col s12 m10 offset-m1">
              <div class="card-panel z-depth-4 center">
               <form name="contactform" method="post" action="rsvp.php">
                <div class="input-field col s12 m8 l4">
                      <i class="material-icons prefix">account_circle</i>
                      <input name="Nombre" id="Nombre" type="text" class="validate">
                      <label for="Nombre">Nombre</label>
                </div>
                <div class="input-field col s12 m8 l4">
                      <input name="Apellido" id="Apellido" type="text" class="validate">
                      <label for="Apellido">Apellidos</label>
                </div>
                <div class="input-field col s12 m8 l4">
                      <i class="material-icons prefix">email</i>
                      <input name="email" id="email" type="email" class="validate">
                      <label for="email" data-error="FALTA @ o . " data-success="Correcto">Email</label>
                </div>
                <div class="row">
                  <div class="input-field col s12 m10 l6">
                      <i class="material-icons prefix">hotel</i>
                      <input name="hotel" id="hotel" type="text" class="validate">
                      <label for="hotel">¿En que hotel te hospedaras?</label>
                    </div>
                <div class="input-field col s12 m10 l6">
                      <i class="material-icons prefix">date_range</i>
                      <input name="fecha" id="fecha" type="date" class="datepicker">
                      <label for="fecha">¿Que día te recibimos?</label>
                </div>
                </div>
                <div class="row">
                  <div class="input-field col s12 m12 l12">
                      <i class="material-icons prefix">music_note</i>
                      <input name="cancion" id="cancion" type="text" class="validate">
                      <label for="cancion">¿Que canción te gustaría bailar con nosotros?</label>
                </div>
                </div>
                <div class="row">
                  <div class="input-field col s12 m12 l12">
                      <i class="material-icons prefix">text_format</i>
                      <textarea name="comments" id="comments" class="materialize-textarea" length="120"></textarea>
                      <label for="comments">Comentarios o preguntas</label>
                    </div>
                </div>
          <input class="waves-effect waves-light btn" type="submit" value="Enviar"></input>
  </form>
</div>

</div>
</div>
</div>

</div>



<!-- Modal Structure -->
<div id="modal1" class="modal">
  <div class="modal-content">
    <div class="center">
      <a href="">
        <img alt="palacio" src="http://res.cloudinary.com/dfocrv7tg/image/upload/c_scale,w_591/v1472595753/travel/pal.jpg" class="responsive-img"/>
      </a>
      <p>
        SI DESEAS HACERNOS UN OBSEQUIO PONEMOS A TU DISPOSICIÓN NUESTRAS OPCIONES PARA MESA DE REGALOS:
      </p>
      <span class="btn tooltipped  amber " data-position="bottom" data-delay="50" data-tooltip="NUMERO DE EVENTO: 309129"> 
        <a href="http://www.elpalaciodehierro.com/celebra/view/index/id/309129/#results" class="black-text">www.elpalaciodehierro.com</a>
      </span>
      <p>
        O EN EFECTIVO EL DÍA DEL EVENTO
        !GRACIAS¡
      </p>
    </div>
    <div class="right">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">x</a>
    </div>
  </div>
</div>

<!--footer-->
<footer class="page-footer grey lighten-4">
  <div class="footer-copyright grey lighten-4">
    <div class="container grey lighten-4">
      © 2017 Copyright
      <a class="grey-text text-lighten-4 right" href="#!">Miguel Altamirano</a>
    </div>
  </div>
</footer>


<div class="fixed-action-btn" style="bottom: 5px; left: 50%;">
  <a class="btn-floating btn-large white">
    <i class="large material-icons black-text">arrow_upward</i>
  </a>
</div>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.js"></script>
<script>
  $( document ).ready(function(){
    $('.datepicker').pickadate({
      selectMonths: true, // Creates a dropdown to control month
      selectYears: 2 // Creates a dropdown of 15 years to control year
    });

    $(".button-collapse").sideNav();
    $('.modal-trigger').leanModal();
    $('.parallax').parallax();

    $('.fixed-action-btn').click(function(){
      $('body, html').animate({
        scrollTop: '0px'
      }, 300);
    });
    $(window).scroll(function(){
      if( $(this).scrollTop() > 0 ){
        $('.fixed-action-btn').slideDown(300);
      } else {
        $('.fixed-action-btn').slideUp(300);
      }
    });
  })
</script>
</body>

</html>

<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "julietayanuar@gmail.com";
 
    $email_subject = "Confirmación Boda Julieta y Anuar 2017";
 
     
 
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
 
    $comments = $_POST['comments']; // not required
 
     
 
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
 
<script type="text/javascript">
  document.getElementById("message").classList.remove('hide');
  var $toastContent = $('<span>EL MENSAJE SE HA ENVIADO CON EXITO </span>');
  Materialize.toast($toastContent, 5000);
</script> 

 
 
 
<?php
 
}
 
?>

