<!DOCTYPE html>
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<html>

<?php
          require_once('../conexion.php');
        
              
            $link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
            if(!$link) {
              die('Failed to connect to server: ' . mysql_error());   
              }
            
            //Select database
            $db = mysqli_select_db($link,DB_DATABASE);
            if(!$db) {
              die("Unable to select database");
            }
        
          
?>

<!-- Mirrored from csmthemes.com/themes/archer/variant/variant-6/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Feb 2017 03:45:54 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic,800,800italic,300italic,300" rel="stylesheet">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Crear Tu Publicidad</title>
<meta name="description" content="Archer - Responsive Landing Page">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!--Favicon-->
<!--
<link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/favicons/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="img/favicons/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/favicons/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="img/favicons/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="img/favicons/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="img/favicons/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="img/favicons/android-chrome-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="img/favicons/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="img/favicons/manifest.json">
<link rel="shortcut icon" href="img/favicons/favicon.ico">
<meta name="msapplication-TileColor" content="#2b5797">
<meta name="msapplication-TileImage" content="img/favicons/mstile-144x144.png">
<meta name="msapplication-config" content="img/favicons/browserconfig.xml">
<meta name="theme-color" content="#ffffff">
-->
<!--Favicon end-->

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/magnific-popup.css" rel="stylesheet">
<link href="css/owl.carousel.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
</head>
<?php 

  $qry=mysqli_query($link,"SELECT * FROM landing");
         

  while($row = mysqli_fetch_array($qry))
                
  {

  echo "<body background='../landingpage/imagenes/".$row["imagen"]."'>"?>

<!--hero section-->

<header class="hero-section"> 
  
  <!--navigation-->

  
  <!--navigation end--> 
  
  <!--mobile navigation-->
  
 
  
  <!--mobile navigation end--> 
  
  <!--welcome message-->

  
  <section class="container text-center welcome-message">
  <style>
    .row{margin-left:-15px;margin-right:-15px;margin-top:-50px;}
  </style>
    <div class="row">
      <div class="col-md-11 center-block">
        <div class="row">
          <div class="col-md-6">
<?php 
                  

    print '
      <h1>'.$row["titulo"].'</h1>
       <h2>'.$row["descripcion"].'</h2> 
       <p>'.$row['contenido'].'</p>

';}?>
            
                      
          </div>
          
          <!--cta signup form-->
          
          <div class="col-md-6">
            <section class="cta-form cta-light">
              <form id="cta-signup-form" class="cta-signup-form">
                <h2  class="text-center">Para tener mas información, Ingresa tus datos</h2>
                <div id="mc-error-cta"><i class="fa fa-exclamation-triangle"></i> Please enter a value</div>
                <div id="mc-success-cta"><i class="fa fa-envelope"></i> Awesome! We have sent you a confirmation email</div>
                <div class="form-group"> <i class="fa fa-user"></i>
                  <input type="text" value="" name="FNAME" class="form-control input-lg" id="input-name" placeholder="Nombre" required>
                </div>
                <div class="form-group"> <i class="fa fa-envelope-o"></i>
                  <input type="email" value="" name="EMAIL" class="form-control input-lg" id="input-email" placeholder="Email" required>
                </div>
				<div class="form-group"> <i class="fa fa-map"></i>
                  <input type="text" value="" name="FNAME" class="form-control input-lg" id="input-name" placeholder="Ciudad" required>
                </div>
                <div class="form-btn">
                  <button type="submit" class="btn">ENVIAR</button>                  
                </div>
              </form>
            </section>
          </div>
          
          <!--cta signup form end--> 
          
        </div>
      </div>
    </div>
  </section>
  
  <!--welcome message end--> 
  
</header>


<!--contact form modal end--> 

<script src="js/jquery-2.2.1.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.magnific-popup.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/jquery.waypoints.min.js"></script> 
<script src="js/jquery.animateNumber.min.js"></script> 
<script src="js/jquery.ajaxchimp.min.js"></script> 
<script src="js/tweetie.min.js"></script> 
<!--[if IE 9]>
<script src="js/placeholders.min.js"></script>
<![endif]--> 
<script src="js/main.js"></script> 
<script async src="../../../../../platform.twitter.com/widgets.js"></script> 
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script> 
<script src="js/gmap.js"></script> 
<script src="js/retina.min.js"></script>
</body>

<!-- Mirrored from csmthemes.com/themes/archer/variant/variant-6/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Feb 2017 03:46:37 GMT -->
</html>
