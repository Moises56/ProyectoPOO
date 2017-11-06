<?php  
    
  include_once("../class/class-conexion.php");
  include_once("class/class-usuario.php");
  $conexion = new Conexion();
  $conexion->establecerConexion();
  
   
?>
<DOCTYPE html>
<html>
		<head>
		<meta charset="utf-8">
		<title>POO-PLUS</title>
		<link rel="../shortcut icon" href="img/Entypo.ico" type="image/ico" />
		<link href="../css/bootstrap.css" rel="stylesheet">
        <link href="../css/estilos.css" rel="stylesheet">
        <link href="../css/hover.css" rel="stylesheet">
        <link href="../css/ihover.css" rel="stylesheet">
         <link href="../css/custom.css" rel="stylesheet">
        
		</head>
	<body style="background-color: #eee" onload="separar();">
	<nav class="navbar navbar-light navbar-fixed-top" style="background-color:green";>
	  <div class="container-fluid">
    
	    
	      
	       <ul class="nav navbar-nav" >
	        <a id="sidebar" onclick="separar()" href="#" class="btn" style="color: yellow; margin-top: 9px; float: left; ,margin: 0px;" data-action="toggle" data-side="left">
	        	<span style="margin-top: 8px;" class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
	        </a>
	        <li>
	          <a class="navbar-brand" style="color: yellow; font-size: 28px; font-family: sans-serif; margin-top: 9px;">POO</a>
	        </li>
	      </ul>
	        
	   
	    
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <form class="navbar-form navbar-left">
	        <div class="input-group" style="max-width:8px;">
				<div id="search" class="input-group stylish-input-group" style="margin-left: 50px;">
				    <input type="text" class="form-control barra-busqueda" placeholder="Buscar..."  style="width: 500px; height: 50px; font-size: 20px; background-color: rgba(4, 236, 0, 0.24); border-color: rgba(222, 215, 2, 0.47); border-radius: 15px; color: white ">
				    <span class="input-group-addon" style="border: none;">
					<button type="submit">
					<span class="glyphicon glyphicon-search" style="color: #d6ff00;  background: transparent; border: none;"></span>
					</button>
				    </span>
				</div>
			</div>
	      </form>
		<ul class="nav navbar-nav" style="float: right;">
	        <li onclick="mostrarPanelapps()"><a href="#" style="color: yellow; margin-top: 15%;"><i class="glyphicon glyphicon-th" style="font-size: 18px;"></i></a></li>
          <li>
            <a href="#" style="color: yellow; margin-top: 15%;"><i class="glyphicon glyphicon-bell" style="font-size: 18px;"></i></a>
          </li>
           <li style="margin: 15px;">
              <img src="../img/fondo2.jpg" class="img-circle" style="width: 35px;height: 35px
              ;">
            </li>
            
	        <div id="panelapps" style="max-height: 271px;height: 496px;display: none;" class="panelapps ">
	        	<ul class="panelinterno"  >
	        		<li class="apps"><a class="app" href="#">
	        			 <img class="card-img-top img-fluid" src="img/icono5.png" alt="Card image cap" style="width: 60%; height: auto;">
	        			 <span class="nombreapp">APP</span>
	        		</a></li>
	        		
	        		<li class="apps"><a class="app" href="#">
	        			 <img class="card-img-top img-fluid" src="img/icono5.png" alt="Card image cap" style="width: 60%; height: auto;">
	        			 <span class="nombreapp">APP</span>
	        		</a></li>
	        		<li class="apps"><a class="app" href="#">
	        			 <img class="card-img-top img-fluid" src="img/icono5.png" alt="Card image cap" style="width: 60%; height: auto;">
	        			 <span class="nombreapp">APP</span>
	        		</a></li>
	        		<li class="apps"><a class="app" href="#">
	        			 <img class="card-img-top img-fluid" src="img/icono5.png" alt="Card image cap" style="width: 60%; height: auto;">
	        			 <span class="nombreapp">APP</span>
	        		</a></li>
	        		<li class="apps"><a class="app" href="#">
	        			 <img class="card-img-top img-fluid" src="img/icono5.png" alt="Card image cap" style="width: 60%; height: auto;">
	        			 <span class="nombreapp">APP</span>
	        		</a></li>
	        		<li class="apps"><a class="app" href="#">
	        			 <img class="card-img-top img-fluid" src="img/icono5.png" alt="Card image cap" style="width: 60%; height: auto;">
	        			 <span class="nombreapp">APP</span>
	        		</a></li>
	        		<li class="apps"><a class="app" href="#">
	        			 <img class="card-img-top img-fluid" src="img/icono5.png" alt="Card image cap" style="width: 60%; height: auto;">
	        			 <span class="nombreapp">APP</span>
	        		</a></li>
	        		<li class="apps"><a class="app" href="#">
	        			 <img class="card-img-top img-fluid" src="img/icono5.png" alt="Card image cap" style="width: 60%; height: auto;">
	        			 <span class="nombreapp">APP</span>
	        		</a></li>
	        		<li class="apps"><a class="app" href="#">
	        			 <img class="card-img-top img-fluid" src="img/icono5.png" alt="Card image cap" style="width: 60%; height: auto;">
	        			 <span class="nombreapp">APP</span>
	        		</a></li>

	        		<a style="    display: block;line-height: 40px;text-align: center;width: 320px;    background: #f5f5f5;cursor: pointer;height: 40px;overflow: hidden;=" href="#">Mas</a>

	        	</ul>
	        	

	        </div>
	        
	      </ul>
	    </div>
	  </div>
	</nav>
	
  

	<div class="container"  style="margin-top: 5%;float: right;width: 100%;height: 100%;">
 <div class="modal fade" tabindex="-1" role="dialog" id="modal-registrar-usuario">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Nueva Publicacion</h4>
        </div>
        <div class="modal-body">
          <p style="float: left;">
            
              <img src="../img/fondo2.jpg" class="img-circle" style="width: 35px;height: 35px
              ;">
              <h3 style="margin: 5px;margin-left: 50px;">Nombre Usuario</h3>
            
           
        <input class="form-control" type="text" name="titulo" placeholder="Escribe tu titulo">
        <br />
        <input class="form-control" type="text" name="text" placeholder="Tienes algo nuevo que contar">
        <br />

      
    
    <div id="mensaje"></div>
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary"  data-loading-text="Guardando..."
           onclick="GuardarColeccion(1)">Guardar</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
    

        

          <div class="sidebars" style="font-size: 10px;">
          
        
            <div class="sidebar left" style="left: -330px; margin: 1px;background-color: rgba(162, 162, 162, 0.24);color: black;text-align: left;overflow: overlay;">
            <div style="margin-top: 23%;">
               <em>
              <a href="pagina-principal.html" aria-hidden="true"  style="color: #595b5d ;text-decoration: none;"><span class="glyphicon glyphicon-home"></span> Inicio</a><br><br>
            </em>
             <em>
              <a href="colecciones.html" aria-hidden="true"  style="color: #595b5d ;text-decoration: none;"><span class="glyphicon glyphicon-th-large"></span> Colecciones</a><br><br>
            </em>
             <em>
              <a href="pagina-comunidades.html" aria-hidden="true"  style="color: #595b5d ;text-decoration: none;"><span class="glyphicon glyphicon-globe"></span> Comunidades</a><br><br>
            </em>
             <em>
              <a href="pagina-usuario.html" aria-hidden="true"  style="color: #595b5d ;text-decoration: none;"><span class="glyphicon glyphicon-user"></span> Perfil</a><br><br>
            </em>
             <em>
              <a href="pagina-persona.html" aria-hidden="true"  style="color: #595b5d ;text-decoration: none;"><span class="glyphicon glyphicon-random"></span> Personas</a><br><br>
            </em>
             <em>
              <a href="pagina-principal.html" aria-hidden="true"  style="color: #595b5d ;text-decoration: none;"><span class="glyphicon glyphicon-tag"></span> Eventos</a><br><br>
            </em>
             <em>
              <a href="pagina-principal.html" aria-hidden="true"  style="color: #595b5d ;text-decoration: none;"><span class="glyphicon glyphicon-tag"></span> Notificaciones</a><br><br>
            </em>
            <em>
              <a href="Registro-Usuarios.php" aria-hidden="true"  style="color: #595b5d;text-decoration: none;"><span class="glyphicon glyphicon-cog" ></span> Configuracion</a><br><br>
            </em>
            <em>
              <a href="#" aria-hidden="true"  style="color: #595b5d;text-decoration: none;"><span class="glyphicon glyphicon-comment" ></span> Enviar Comentarios</a><br><br>
            </em>
            <em>
              <a href="#" aria-hidden="true"  style="color: #595b5d;text-decoration: none;"><span class="glyphicon glyphicon-question-sign" ></span> Ayuda</a><br><br>
            </em>
            </div>
            <div style="float: left;margin-top: 63%;font-size: initial;">
              <p>
              <a style="color: #848080">Región</a>
              </p>
              <p>
                <a style="color: #848080">Polísa de privacida</a>
              </p>
              <p>
                <a style="color: #848080">Condiciones del servicio</a>
              </p>
              <p>
                <a style="color: #848080">Condiciones de Maps</a>
              </p>
              <p>
                <a style="color: #848080">2017 PooPlus</a>
              </p>
              </div>
              </div>
            </div>

        
        <div id="separar" style="display:  none; width:285px;height: inherit;float: left;"></div>
          
    <div class="div-large" style="padding-left: 40px;">
    
        <div class="ih-item square effect4" style="margin: 1.3%;width: 213px;border: 0px solid #fff;float: left;height: 264px;background-color: yellowgreen;">
        <a href="#">
            <span  role="button" class="glyphicon glyphicon-plus" aria-hidden="true" style="font-size: 106px;margin: 54px" data-toggle="modal" data-target="#modal-registrar-usuario" id="imagen" class="form-control"></span>
            
            </a>
            </div>
            <div id="div-lista-colecciones">
              
            </div>



           
            


          
      </div>
        
   
  </div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
        <script src="../src/jquery.sidebar.js"></script>
        <script src="../js/handlers.js"></script>
        <script src="js/controlador_publicaciones.js"></script>
        <style>
            .sidebar.right {
                width: 30%;
            }
        </style>
  
      	<script type="text/javascript">
        $(document).ready(function(){
          $(".sidebar").trigger("sidebar:toggle");
        });
      		function separar(){
			$("#separar").toggle('slow');
       
      
		}

		function mostrarPanelapps(){
			$("#panelapps").toggle('slow');
		}


      	</script>


	</body>


</html>
<?php
  $conexion->cerrarConexion();
?>