<!DOCTYPE html
<html lang="es-MX">
  <head>
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Restaurante</title>
    
    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('dataTables/css/jquery.dataTables.css')!!}
    {!!Html::style('dataTables/css/dataTables.bootstrap.css')!!}
    {!!Html::style('css/sweetalert.css')!!}

    {!!Html::script('js/jquery-3.2.1.min.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
    {!!Html::script('dataTables/js/jquery.dataTables.min.js')!!}
    {!!Html::script('dataTables/js/dataTables.bootstrap.min.js')!!}
    {!!Html::script('js/sweetalert.min.js')!!}
  </head>

  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <!--clase que hace que el menu se coloque arriba y este siempre arriba-->
        <div class="container-fluid">
            <!--contenido del navbar-->
            <div class="navbar-header">
                <!--boton para ser responsivo-->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!--clase para desplegar los botones del menu y el menu en si-->
            <div id="navbar" class="navbar-collapse collapse">
                <!--primera seccion del menu-->
                <ul class='nav navbar-nav navbar-right'>
                    <!--botones que se desplegarán del dropdown-->
                    <li><a><span class='glyphicon glyphicon-user'> Usuarios</span> </a></li>
                </ul><!--cierre contenido cuenta-->
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav><!--cierre del menu navbar-->
  </body>
</html>
