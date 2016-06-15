<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Scrum Detail</title>
  <!-- Elementos CSS para el diseño -->
  <link rel="stylesheet" href="styles/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles/css/style.css">
</head>
<body>
  <!--
  ------------------------------------------------------------------------------
  BARRA DEL MENU PRINCIPAL -->
  <header>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <!-- Boton tipo Hamburguesa para tamaños de pantalla pequeños -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
            <span class="sr-only">MENU</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!--==================================================================
          Icono de nuestra barra de navegación -->
          <a href="index.php" class="navbar-brand">
            <span class="glyphicon glyphicon-blackboard"></span>
            <span class="title">SCRUM DETAIL</span>
          </a>
        </div>
        <!--====================================================================
        Elementos de nuestra barra de Navegación -->
        <div class="collapse navbar-collapse" id="navbar-1">
          <!--==================================================================
          Item para Busquedas -->
          <form action="" class="navbar-form navbar-right form-horizontal" role="search">
            <div class="form-group">
              <div class="col-xs-10">
                <input type="text" class="form-control" placeholder="Buscar">
              </div>
              <button type="button" class="btn btn-primary col-xs-2"><span class="glyphicon glyphicon-search"></span></button>
            </div>
          </form>
          <!--==================================================================
          Items principales de la Barra de Navegación -->
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">Inicio</a></li>
            <li><a href="#">Acerca</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!--
  ------------------------------------------------------------------------------
  ESQUEMA PRINCIPAL DE LA PAGINA WEB -->
  <div class="jumbotron">
    <div class="container">
      <h1>ADMINISTRA TUS PROYECTOS</h1>
      <h2>Traspasa todos tus limites</h2>
      <button type="button" id="btn_login" class="btn btn-success login-button btn-lg" data-toggle="modal" data-target="#mod-login">INGRESAR</button>
    </div>
  </div>
  <!--
  ------------------------------------------------------------------------------
  CONTENIDO INFORMATIVO DE LA PAGINA WEB -->


  <!--
  ------------------------------------------------------------------------------
  VENTANA PARA EL LOGIN DE LOS USUARIOS -->
  <div class="modal fade mod-contorn" id="mod-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content login-dialog">
        <!--====================================================================
        Cabecera de la ventana de Login-->
        <div class="modal-header login-header">
          <button type="button" class="close login-btn-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title login-title" id="myModalLabel">LOGIN</h4>
        </div>
        <!--====================================================================
        Cuerpo de la ventana de Login -->
        <div class="modal-body">
          <form class="login-form" action="php/login.php" method="post">
            <div class="form-group">
              <label for="txt-cod">Usuario: </label>
              <input type="text" id="txt-nusu" placeholder="Nombre de Usuario" class="form-control" name="txt-nusu">
            </div>
            <div class="form-group">
              <label for="txt-password">Contraseña: </label>
              <input type="password" id="txt-password" placeholder="Contraseña" class="form-control" name="txt-password">
            </div>
            <!--================================================================
            Footer de la ventana de Login -->
            <div class="modal-footer login-footer">
              <button type="submit" class="btn btn-primary">INGRESAR</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--
  ==============================================================================
  PIE DE PAGINA -->
  <footer class="container-fluid">
    <span>Copyright (c) 2015 Copyright Holder All Rights Reserved.</span>
  </footer>
  <!-- Elementos JavaScirpt para la interactividad-->
  <script src="styles/js/jquery.js" type="text/javascript"></script>
  <script src="styles/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
