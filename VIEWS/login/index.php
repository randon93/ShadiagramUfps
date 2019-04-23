
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
