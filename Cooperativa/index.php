<?php  
   /* 
    include_once("class/class-conexion.php");
  $conexion = new Conexion();
  $conexion->establecerConexion();
  */

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/icon.ico">

    <title>Cooperativa La Mejor</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">
        <link href="css/hover.css" rel="stylesheet">
        <link href="css/ihover.css" rel="stylesheet">
         <link href="css/custom.css" rel="stylesheet">
        <link href="http://jillix.github.io/jQuery-sidebar/css/custom.css" rel="stylesheet">
        <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="src/jquery.sidebar.js"></script>
        <script src="http://jillix.github.io/jQuery-sidebar/js/handlers.js"></script>
        <style>
            .sidebar.right {
                width: 30%;
            }
        </style>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body style="background-image: url(img/fondo.jpg); background-position: top;">

    <div class="navbar-wrapper  ">
      <div  class="container" >

       <nav class="navbar navbar-light navbar-fixed-top" style="background-color:rgb(13,175,212);";>
	  <div class="container-fluid">
      <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">La Mejor Ltda.</a>
      </div>
    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
         
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sobre Nosotros <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a id="btn-accion" href="#">Afiliacion</a></li>
              <li><a href="#">Mision y Vision</a></li>
              <li><a id="btn-accion" href="#">Doctrina Cooperativista</a></li>
              <li><a href="#">Historia</a></li>
            </ul>
          </li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Servicios <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a id="btn-accion" href="#">Pagos Por Planillas</a></li>
              <li><a href="#">Remesas</a></li>
            </ul>
          </li>
          
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Productos <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a id="btn-accion" href="pg/afiliados.html">Prestamos</a></li>
              <li><a href="#">Cuentas de Ahorro</a></li>
            </ul>
          </li>

        </ul>

        <form class="navbar-form navbar-left">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button href="https://www.google.es/" type="submit" class="btn btn-default">buscar</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="https://www.google.es/">Link</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contactenos <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Nuestras Oficinas</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Cooperativa La Mejor online</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="https://www.facebook.com/">Facebok</a></li>
              <li role="separator" class="divider"></li>
              
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
    
	 <ul class="nav navbar-nav" >
	    <li>
	      <a href="pg/Iniciar-Sesion.php" class="navbar-brand" style="color: white; font-size: 28px; font-family: sans-serif; margin-top: 9px;">Cooperativa La Mejor</a>
	     </li>
   </ul>
   
   <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <form class="navbar-form navbar-left">
        <div class="input-group" style="max-width:8px;">
		      <div id="search" class="input-group stylish-input-group" style="margin-left: 50px;">
		        <span class="input-group-addon" style="border: none;">
			        <button type="submit"></button>
		       </span>
		      </div>
    	  </div>
     </form>
		  
   <ul class="nav navbar-nav" style="float: right;">	       
     </i></a></li>
	   <div id="panelapps" style="max-height: 271px;height: 496px;display: none;" class="panelapps ">
       
	        	

	        </div>
	        <li>
	          <a href="pg/Iniciar-Sesion.php" class="btn btn-primary" style="margin-top: 5%;">Iniciar Sesión</a>

	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img style="height: 500px z-index:-10" class="first-slide" src="img/prestamos3.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Prestamos</h1>
              <p style="font-family: cursive;">POO + es la primera incursión de la compañía en las redes sociales, a raíz de Google +, Lanzado en Febrero de 2017 por alumnos de la UNAH como parte de un proyecto de clase.</p>
              <p><a class="btn btn-lg btn-primary" href="pg/Registro-Usuarios.html" role="button">Registrate Hoy</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img style="z-index: -10" class="second-slide" src="img/logo1.png" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Cuentas de Ahorro</h1>
              <p style="font-family: cursive;"" >  Permite a los usuarios para "construir colecciones de contenido basado en temas e intereses</p>
              <p><a class="btn btn-lg btn-primary" href="pg/colecciones.html" role="button">Ver Mas</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img style="z-index: -1" class="third-slide" src="img/logo3.png" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>SUMERGETE EN EL MEJOR CONTENIDO</h1>
              <p style="font-family: cursive;">Explora el contenido que más te gusta en colecciones creadas por aficionados.</p>
              <p><a class="btn btn-lg btn-primary" href="pg/pagina-principal.html" role="button">Explorar</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing ">

      <!-- Three columns of text below the carousel -->
      


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider ">

      <div class="row featurette ">
        <div class="col-md-7">
          <h2 class="featurette-heading"><b> AFILIADOS</b> </h2>
          <p class="lead"> <b> REQUISITOS para afiliarse a Cooperativa LA MEJOR :</b> 
              <li><a id="" href="#">Ser mayor de 16 años.</a></li>
              <li><a href="#">Pagar Lps. 10.00 como cuota de ingreso y una aportación no menor de Lps. 30.00.</a></li>
              <li><a id="" href="#">Presentar tarjeta de identidad</a></li>
              <li><a href="#">Los menores de edad presentar la partida de nacimiento</a></li>
              <li><a href="#"> No es requisito que no tenga cuenta en otra cooperativa.</a></li>
          </p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="img/afiliacion.png" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Mision y Vision </h2><br><br>
          <p class="lead"> 
            <hr>MISIÓN</hr><br><br>

            Somos una cooperativa de ahorro y crédito líder, sin fines de lucro, que ofrece servicios financieros innovadores con excelencia , beneficiando a sus afiliados, ( as ), con proyección a la comunidad y al ambiente.<br><br><br>

            VISIÓN<br><br>

            Ser la cooperativa de ahorro y crédito con mayor posicionamiento financiero en el país, fortaleciendo la educación y formación cooperativa, para mejorar la calidad de vida de los afiliados ( as ), su familia y la comunidad.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="img/img3.png" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">PRESTAMOS </h2><br><br><br>
            <p class="lead"><hr>Son valores en dinero que un afiliado solicita por un monto igual o menor a lo que tiene ahorrado en su cuenta de aportaciones, no necesita avales.
            Se caracteriza por ser un préstamo rápido, sólo necesita presentar su tarjeta de identidad, su libreta de Aportaciones, brindar información sobre el préstamo que necesita y en un tiempo no mayor a 30 minutos se le entrega su préstamo; el monto mínimo del préstamo es de Lps. 500.00 y son una alternativa ante una emergencia, la que puede solucionar inmediatamente. En otras palabras la Cooperativa le presta para que no retire lo que usted ya tiene ahorrado, prestandole el 90% del saldo tiene en la cuenta de Aportaciones.</hr><br><br>

            <b>Requisitos:</b><br><br>

            Afiliado Asalariados:<br><br>

            Ser afiliado de la Cooperativa.<br><br>
            Abrir cuenta de ahorro.<br><br>
            Copia Identidad.<br><br>
            Libreta de Aportaciones.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="img/img4.png" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p style="color: white" class="pull-right"><a style="color: white" href="#">Regresar arriba</a></p>
        <p style="color: white">&copy; Copyright © 2017. Cooperativa LA MEJOR <br><br> &middot; <a style="color: white" href="#">Privacidad</a> &middot; <a style="color: white" href="#">Terminos</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
