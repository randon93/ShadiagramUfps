
    <div class="contenedor-form">
        <div class="toggle">
            <span>Crear Cuenta</span>
        </div>

        <div class="formulario">
            <h1>Iniciar Sesión</h1>
            <form action="#">
                <input type="text" placeholder="Usuario" required>
                <input type="password" placeholder="Contraseña" required>
                <input type="submit" value="Iniciar Sesión">
            </form>
        </div>

        <div class="formulario">
            <h1>Crea tu Cuenta</h1>
            	  <input type="text" placeholder="Nombres" ng-model="newUsuario.nombre" required>
            	  <input type="text" placeholder="Apellidos" ng-model="newUsuario.apellido" required>
                <input type="text" placeholder="Usuario" ng-model="newUsuario.usuario" required>
                <input type="password" placeholder="Contraseña" ng-model="newUsuario.contrasenia" required>
                <input type="email" placeholder="Correo Electrónico" ng-model="newUsuario.email" required>
                <input type="text" placeholder="Teléfono" ng-model="newUsuario.relefono" required>
                <input type="submit" value="Registrarse" ng-click="registrar()">
        </div>
        <div class="reset-password">
            <a href="#">Olvide mi contraseña</a>
        </div>
    </div>
