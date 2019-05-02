<!-- **************************************************************** -->
                        <!-- EMCABEZADO -->
  <!-- **************************************************************** -->
  <div class="contenedor">
    <!-- foto profile -->
    <div class="photoProfile">
      <div class="ih-item circle effect3 left_to_right "><a href="#">
          <div class="img"><img src="<?php echo constant('URL');?>public/img/users/perfil-rene.jpg" alt="img"></div>
          <div class="info">
            <h3><?php
               echo $_SESSION['USER']->getNombre();
             ?></h3>
            <p><?php
              echo  $_SESSION['USER'] ->getNombre().'<br />'. $_SESSION['USER'] ->getEmail();
             ?></p>
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
        <p>
            <?php
            echo( $_SESSION['USER']->getResena() );
            ?>
        </p>
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
      <button type="button" class="btn btn-secondary"><a href="<?php echo constant('URL');?>login/cerrarSesion">CERRAR</a></button>
      <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>
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
        <img src="<?php echo constant('URL'); ?>public/img/users/<?php echo $foto['img'] ?>" class="minia" />
        <span>
          <img src="<?php echo constant('URL'); ?>public/img/users/<?php echo $foto['img'] ?>" class="expandir"/>
          <br />Descripción para la foto.
        </span>
      </a>
    </div>
<?php } ?>
  </div>
  <!-- **************************************************************** -->
                        <!-- FIN PUBLICACIONES -->
  <!-- **************************************************************** -->

  <!-- **************************************************************** -->
                        <!-- MODAL PARA SUBIR PUBLICACION -->
  <!-- **************************************************************** -->
<!-- Modal -->


<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div id="divInputLoad">
        <h1>Test it uploading your own image</h1>
        <div id="divFileUpload">
            <input id="file-upload" type="file" accept="image/*" />
        </div>
        <div id="file-preview-zone" class="divMain">
        </div>
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-primary">Save changes</button>
       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
     </div>
    </div>

  </div>
</div>
<!-- **************************************************************** -->
                      <!-- FIN MODAL PARA SUBIR PUBLICACION -->
<!-- **************************************************************** -->
