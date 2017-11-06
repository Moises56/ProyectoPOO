<?php  
/*
    
  include_once("../class/class-conexion.php");
  $conexion = new Conexion();
  $conexion->establecerConexion();
  $resultadoGeneros = $conexion->ejecutarInstruccion("SELECT CODIGO_GENERO, NOMBRE_GENERO FROM tbl_generos");
  


     include_once("class/class-pais.php");

      $pais="";

      if (isset($_GET["slc-pais"]))
          $pais = $_GET["slc-pais"];




        $paises = array();
          $paises[] = new Pais(1, "Honduras");
          $paises[] = new Pais(2, "Nicaragua");
          $paises[] = new Pais(3, "El Salvador");
          $paises[] = new Pais(4, "Panama");
          $paises[] = new Pais(5, "Guatemala");
          $paises[] = new Pais(6, "Belice");
          $paises[] = new Pais(7, "Mexico");
          $paises[] = new Pais(8, "Brasil");
          $paises[] = new Pais(9, "Argentina");
          $paises[] = new Pais(10, "Colombia");
          $paises[] = new Pais(11, "Japon");
          $paises[] = new Pais(12, "Rusia");
          $paises[] = new Pais(13, "Estados Unidos");
          $paises[] = new Pais(14, "Alemania");
          $paises[] = new Pais(15, "España");
        

*/
?>





<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Registro de Afiliados</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div id="div-resultado-guardar"></div>
   
        <h2 align="center" class="text-primary" style="margin-left: 40%;">Afiliaciones</h2>

       <table class="table table-striped" style="width: 50%;float: right;margin: 50px;" >
            <tr>
            <td>
                <p>Nombre:</p>
                
                    <input class="form-control input-sm" type="text" name="txt-nombre" id="txt-nombre" placeholder="Nombre">
                    <input class="form-control input-sm" type="text" name="txt-apellido" id="txt-apellido" placeholder="Apellido">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <p>Nombre de Usuario:</p>
                    <input class="form-control input-sm" type="text" name="txt-nombre-usuario" id="txt-correo" placeholder="@pmail.com" size="45">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <p>Contraseña:</p>
                    <input class="form-control input-sm" type="password" name="txt-contraseña" id="password" size="45">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <p>Confirmar Contraseña:</p>
                    <input class="form-control input-sm" type="password" name="txt-confirmar-contraseña" id="password-confirm" size="45">
                </td>
            </tr>
            <tr>
                <td>
                    <p>Fecha de Nacimiento:</p>
                    <input class="form-control input-sm" type="date" name="fecha" id="fecha" size="9" placeholder="Dia">
                   
                </td>
            </tr>
            <tr>
                <td>
                    <p>Genero:</p>
                    <select id="slc-genero" class="form-control input-sm">
                        <option center>--Seleccione un Genero--</option>
                         <?php/*
                while($fila=$conexion->obtenerRegistro($resultadoGeneros)){
                   echo '<option value="'.$fila["CODIGO_GENERO"].'">'.$fila["NOMBRE_GENERO"].'</option>';
                }*/
              ?>
                    </select>    
                </td>
            </tr>
            <tr>
                <td>
                    <p>Telefono:</p>
                    <input class="form-control input-sm" type="text" name="txt-telefono" id="txt-telefono" size="45"> 
                </td>
            </tr>
            <tr>
                <td>
                    <p>Prestamo:</p>
                    <select id="slc-pais" class="form-control input-sm">
                        <option center>--Seleccione un Pais--</option>
                        <?php/*
                            for ($i=0; $i <sizeof($paises) ; $i++) {
                                echo '<option '. (($paises[$i]->getCodigoPais()==$pais)?"selected":"") .' value="'.$paises[$i]->getCodigoPais().'">'.$paises[$i]->getNombrePais().'</option>';
                            }*/

                         ?>
                    </select> 
                </td>
                <td>
                    <p>Fecha de Prestamo:</p>
                    <input class="form-control input-sm" type="date" name="fecha" id="fecha" size="9" placeholder="Dia">
                   
                </td>
            </tr>
            <tr>
                <td>
                    <br><br>
                    <button id="btn-registrar" class="btn btn-primary" style="width: 250px;" data-loading-text="Guardando..." autocomplete="off" onclick="AgregarUsuario();">Registrar</button>
                </td>
            </tr>
        </table>

        <div style="float: right;width: 500px;">
        <img src="img/icon.png" style="float: left; width: 90%;">
    </div>

    <script src="../js/jquery.js"></script>
    <script src="js/controlador_registro_usuario.js"></script>    
</body>
</html>
<?php
  /*$conexion->cerrarConexion();*/
?>