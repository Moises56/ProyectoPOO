<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="img/icon.ico">
    <title>Iniciar Sesión - Cooperativa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="css/signin.css" rel="stylesheet">
    
    <style type="text/css">
    .form-signin
{
    max-width: 330px;
    padding: 15px;
    margin: 0 auto;
}
.form-signin .form-signin-heading, .form-signin .checkbox
{
    margin-bottom: 10px;
}
.form-signin .checkbox
{
    font-weight: normal;
}
.form-signin .form-control
{
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.form-signin .form-control:focus
{
    z-index: 2;
}
.form-signin input[type="text"]
{
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}
.form-signin input[type="password"]
{
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.account-wall
{
    margin-top: 20px;
    padding: 40px 0px 20px 0px;
    background-color: #f7f7f7;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}
.login-title
{
    color: #555;
    font-size: 18px;
    font-weight: 400;
    display: block;
}
.profile-img
{
    width: 96px;
    height: 96px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}
.need-help
{
    margin-top: 10px;
}
.new-account
{
    display: block;
    margin-top: 10px;
}
    </style>
   
</head>
<body>
  <div class="container">

       <div class="form-signin">
          <h2 class="text-center login-title" class="form-signin-heading" >Cooperativa La Mejor</h2>
          <h1 class="text-center login-title">Inicia sesión con tu cuenta de Afiliacion</h1>
          <div class="account-wall">
             <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120" alt="">
             <form class="form-signin">
                 <label for="inputEmail" class="sr-only">Email address</label>
                  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                   <label for="inputPassword" class="sr-only">Password</label>
                   <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                   <button id="btn-login" class="btn btn-lg btn-primary btn-block" type="submit"> Iniciar Sesión</button>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" value="remember-me"> Recordar Cuenta
                    </label>
                    <a href="#" class="pull-right need-help">Ayuda? </a><span class="clearfix"></span>
                    </form>
                </div>
                <a href="Registro-Usuarios.php" class="text-center new-account">Afiliate</a>
                    </div>
                    
          </div>
          <div id="resultado"></div>
        </div>
    

</div>
  
  <script src="../js/jquery.js"></script>
  <script src="../js/login.js"></script>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/controlador.js"></script>
</body>
</html>
