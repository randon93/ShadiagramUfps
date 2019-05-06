
    <!DOCTYPE html>
    <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/bootstrap4\css\myStilo.css">
      <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/bootstrap4\css\ihover.css" />
      <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/bootstrap4\css\ihover.min.css" />
      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular-route.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular-route.min.js"></script>
      <script src="<?php echo constant('URL'); ?>public/bootstrap4/js/app.js"></script>

      <title>Perfil de Usuario</title>
    </head>
    <body>


          <div class="contenedor-form">
              <div class="toggle">
                  <span>Crear Cuenta</span>
              </div>

              <div class="formulario">
                  <h1>Iniciar Sesión</h1>
                  <form method="post" action="<?php echo constant('URL');?>login/iniciar">
                      <input type="text" name="email"  placeholder="Usuario" required>
                      <input type="password" name="password" placeholder="Contraseña" required>
                      <input type="submit" value="Iniciar Sesión">
                  </form>
                  <br>
                  <div class="reset-password">
                      <a href="#">Olvide mi contraseña</a>
                  </div>
              </div>

              <div class="formulario">
                  <h1>Crea tu Cuenta</h1>
                  <form method="post" action="<?php echo constant('URL'); ?>login/registrar">
                  	<input type="text" name="nombre" placeholder="Nombres" required>
                  	<input type="text" name="alias" placeholder="Usuario" required>
                    <input type="password" name="password" placeholder="Contraseña" required>
                    <input type="email" name="email" placeholder="Correo Electrónico" required>

                    <input type="submit" value="Registrarse">
                  </form>
              </div>

          </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script type="text/javascript">  $('#mostrarmodal').modal('show');  </script>
        <script src="<?php echo constant('URL');?>public/bootstrap4/js/jquery-3.1.1.min.js"></script>
        <script src="<?php echo constant('URL');?>public/bootstrap4/js/main.js"></script>


    </body>

    </html>
