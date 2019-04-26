  
      <?php require ('VIEWS/LOGIN/index.php') ; ?>

<div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
   <div class="modal-dialog">
     <div class="modal-content">
        <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
           <h3>ERROR</h3>
        </div>
        <div class="modal-body">
           <h4>El correo con el que se intenta crear su cuenta ya esta registrado.</h4>
           Intente con Olvide mi contraseña para recuperar su cuenta
    </div>
        <div class="modal-footer">
       <a href="<?php echo constant('URL');?>" class="btn btn-danger">Cerrar</a>
        </div>
   </div>
</div>
</div>
