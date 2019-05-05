$(document).ready(function() {

  $("#Buscar").on("click", function(e) {
    Buscar();
  });


});

function nuevoLibro() {
  var enviar = {
    searchUser: document.getElementById("searchUser").value
  };
  console.log(enviar);
  $.ajax({
    type: 'POST',
    url: 'http://127.0.0.1/ShadiagramUfps/controllers/perfilController.php',
    data: {
      enviar: JSON.stringify(enviar),
      funcion: "buscar"
    },
    success: function(respuesta) {
      for (key in respuesta) {
            var user = respuesta[key];
            columnas5 += "<tr><td>" + user.cliente + "</td><td>" + user.fecha + "</td><td>" + user.descripcion + "</tr>";
          }
    }
  });
}
!-- **************************************************************** -->
                      <!--  MODAL PARA buscar -->
<!-- **************************************************************** -->

<!-- Button trigger modal -->
<button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button>

<!-- Modal -->
"<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">  <div class="modal-dialog modal-dialog-centered" role="document">    <div class="modal-content">      <div class="modal-header">        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>        <button type="button" class="close" data-dismiss="modal" aria-label="Close">          <span aria-hidden="true">&times;</span>        </button>      </div>      <div class="modal-body"> <!-- BUSQUEDA RESULTADO -->         <br>
        /*******************************/////
       <?php
         }
       ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>"

<!-- **************************************************************** -->
                      <!-- FIN MODAL PARA buscar -->
<!-- **************************************************************** -->








<div class="ih-item circle effect10 bottom_to_top">
    <a href="#">
      <div class="img">
         <img src="<?php echo constant('URL');?>PUBLIC/IMG/USERS/<?php echo $this->founds[$i]->getPhoto();?>" alt="img">
      </div>
   |  <div class="info">
         <h3><?php echo $this->founds[$i]->getNombre(); ?></h3>
         <p><?php echo $this->founds[$i]->getEmail(); ?></p>
   |  </div>
   </a>
</div>
