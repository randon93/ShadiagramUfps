<!-- **************************************************************** -->
                        <!-- EMCABEZADO -->
  <!-- **************************************************************** -->
  <div class="contenedor">
    <!-- foto profile -->
    <div class="photoProfile">
      <div class="ih-item circle effect3 left_to_right "><a href="#">
          <div class="img"><img src="public/img/perfil-rene.jpg" alt="img"></div>
          <div class="info">
            <h3><?php session_start();echo $_SESSION['SESION']; ?></h3>
            <p>Profesor de la UFPS Programacion Web</p>
          </div>
        </a></div>
    </div>
    <!-- end photo profile -->
    <!-- Info profile -->
    <div class="informationProfile">
      <div class="">
        <button type="button" class="btn btn-outline-success">EDITAR PERFIL</button>
      </div>
      <div class="">
        <p>Informacion del Usuario</p>
      </div>

    </div>

    <!-- end Info profile -->

  </div>
  <!-- **************************************************************** -->
                        <!-- FIN EMCABEZADO -->
  <!-- **************************************************************** -->

  <!-- **************************************************************** -->
                        <!-- INFO AMISTAD -->
  <!-- **************************************************************** -->
  <div class="groupButonFriends">
    <div class="btn-group " role="group" aria-label="Basic example">
      <button type="button" class="btn btn-secondary">Left</button>
      <button type="button" class="btn btn-secondary">Middle</button>
      <button type="button" class="btn btn-secondary">Right</button>
    </div>
  </div>
  <!-- **************************************************************** -->
                        <!-- FIN INFO AMISTAD -->
  <!-- **************************************************************** -->

  <!-- **************************************************************** -->
                        <!-- PUBLICACIONES -->
  <!-- **************************************************************** -->
  <div class="publicaciones">
<?php
foreach ($this->imagenes as $foto) { ?>
    <div >
      <a class="thumbnail" href="#thumb">
        <img src="public/img/<?php echo $foto['img'] ?>" class="minia" />
        <span>
          <img src="public/img/<?php echo $foto['img'] ?>" class="expandir"/>
          <br />Descripción para la foto.
        </span>
      </a>
    </div>
<?php } ?>
  </div>
  <!-- **************************************************************** -->
                        <!-- FIN PUBLICACIONES -->
  <!-- **************************************************************** -->
