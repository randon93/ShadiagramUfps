<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="<?php echo constant('URL');?>PUBLIC/bootstrap4/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo constant('URL');?>PUBLIC/bootstrap4/css/mystyle.css">
<script type="text/javascript" src="<?php echo constant('URL');?>PUBLIC/bootstrap4/js/bootstrap.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script type="text/javascript" src="<?php echo constant('URL');?>PUBLIC/bootstrap4/js/bootstrap.min.js"></script>
<head>
	<title>Configuracion</title>
</head>

<script>
		window.addEventListener('load', iniciar, false);

		function iniciar() {

		  var pwdb1 = document.getElementById('pwdb1');
		  var pwdb2= document.getElementById('pwdb2');

		  pwdb1.addEventListener('click', clickaso, false);
		  pwdb2.addEventListener('click', dosclickaso, false);

		}

		function clickaso() {
			var pro = document.getElementById('pwd').type = "text";
		}
		function dosclickaso() {

		  var pro2 = document.getElementById('pwd2').type = "text";
		}


		 function habilitar()

		    {

		        var camp1= document.getElementById('pwd');
		        var camp2= document.getElementById('pwd2');
		        var boton= document.getElementById('cmdcontra');

		        if (camp1.value != camp2.value) {
		            boton.disabled = true;
		        }else {
		            boton.disabled = false;
		        }
		    }

</script>

<body class="bg-light" >

	<!--Inicio  Barra navegacion-->
<nav class="navbar navbar-expand-sm  bg-mycolor " style="height: 80px">
			  <!-- Brand/logo -->
			  <a class="navbar-brand" href="index.html"><img src="<?php echo constant('URL');?>PUBLIC/IMG/recursos/logo2.png"></a>
			  <div class="mx-auto" >
				  <form class="form-inline" action="#">
				    <input class="form-control mr-sm-5" type="text" placeholder="Buscar" style="width: 500px">
				    <button class="btn" type="submit" data-toggle="modal" data-target="#navbb"><img src="<?php echo constant('URL');?>PUBLIC/IMG/recursos/lupa.png"></button>
				  </form>
				</div>
			  <ul class="navbar-nav" >
			      <li class="nav-item dropdown">
				      <a class="nav-link dropdown-toggle"  href="profile.html" id="navbardrop" data-toggle="dropdown">
				        <img src="<?php echo constant('URL');?>PUBLIC/IMG/RECURSOS/usuario.png"  class="rounded-circle" id="profile">
				      </a>
				      <div class="dropdown-menu">
				        <a class="dropdown-item" href="index.html">Inicio</a>
				        <div class="dropdown-divider"></div>
				        <a class="dropdown-item" href="configuracion.html">Configuracion</a>
				        <div class="dropdown-divider"></div>
				        <a class="dropdown-item" href="#">Cerrar sesion</a>
				      </div>
			    </li>
				</ul>
</nav>

<!--Inicio MODAL navbar -->

   <div class="modal" id="navbb">
		    <div class="modal-dialog modal-dialog-centered modal-sm">
			      <div class="modal-content">
			        <!-- Modal Header -->
			        <div class="modal-header">
			          <h4 class="modal-title" >Resultados</h4>
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			        </div>

			        <!-- Modal body -->
			        <div class="modal-body">
				         <div>
									 <img src="<?php echo constant('URL');?>PUBLIC/IMG/RECURSOS/usuario.png">&nbsp&nbsp&nbsp&nbsp
									 <a href="#">
										 <strong>Mamorro11</strong>
									 </a>
								 </div>
			        </div>

			        <div class="modal-body">
				          <img src="<?php echo constant('URL');?>PUBLIC/IMG/RECURSOS/usuario.png">&nbsp&nbsp&nbsp&nbsp
									<a href="#">
										<strong>Brandom15</strong>
									</a>
							</div>

			        <div class="modal-body">
				          <img src="<?php echo constant('URL');?>PUBLIC/IMG/RECURSOS/usuario.png">&nbsp&nbsp&nbsp&nbsp
									<a href="#">
										<strong>Messi10</strong>
									</a>
							</div>
			      </div>
		    </div>
  </div>

</div>
  </div>
</div>
  </div>

</div>
<!--Fin de Modal navbar-->
<!--Fin  Barra navegacion-->
<br>
<br>
<div class="container bg-light">
			<div class="row">
					  <div class="col-sm-3 media border p-3">
						  <div class="container">
								  <ul class=" nav nav-tabs nav-justified" role="tablist">
									    <li class="nav-item">
										      <a class="nav-link active" data-toggle="tab" href="#foto">Cambiar Foto de Perfil</a>
										      <hr>
										      <a class="nav-link" data-toggle="tab" href="#contra">Cambiar Contraseña</a>
										    	<hr>
										      <a class="nav-link" data-toggle="tab" href="#cmbnom">Cambiar Nombre</a>
										      <hr>
										      <a class="nav-link" data-toggle="tab" href="#cmbbio">Cambiar Descripcion</a>
									    </li>
								  </ul>
						</div>
					</div>

					<div class="col-sm-7 media border p-3">
								<div class="container bg-white">
										  <!-- Tab panes -->
										  <div class="tab-content">
												<!-- CAMBIO DE FOTO  -->
											    <div id="foto" class="container tab-pane active"><br>
														<form action="<?php echo constant('URL');?>perfil/subirPhotoProfile" method="post" enctype="multipart/form-data">
															<input type="file" name="imagen">
															<br>
															<hr>
															<input type="submit" class="btn btn-primary" value="Save changes">
															<!--<input type="button" name="" value="Publicar"> -->
														</form>
											    </div>

											    <div id="contra" class="container tab-pane fade"><br>
															<form action="<?php echo constant('URL');?>PERFIL/upDatePassword" method="post">
													      <h3>Cambiar Contraseña</h3>
																<div class="form-group">
													  			<label for="pwd">Contraseña Nueva</label>
																</div>
																<div class="form-inline">
													  			<input type="password" class="form-control" id="pwd" placeholder="Contraseña Nueva" name="passwordNewU" style="width: 70%"><button type="button" class="btn" id="pwdb1"><img src="<?php echo constant('URL');?>PUBLIC/IMG/recursos/ojo.png"></button>
																</div>
																<div class="form-group">
														  			<label for="pwd">Confirmar Contraseña</label>
														  		<div class="form-inline">
														  			<input type="password" class="form-control" id="pwd2" placeholder="Confirmar Contraseña Nueva" name="passwordNewD" style="width: 70%" onKeyUp="habilitar()"><button type="button" class="btn" id="pwdb2" ><img src="<?php echo constant('URL');?>PUBLIC/IMG/recursos/ojo.png"></button>
																	</div>
																</div>
													 			<br>
													     	<p align="right"><input type="submit" class="btn btn-success" id="cmdcontra" value="Cambiar"></p>
															</form>
													</div>

											    <div id="cmbnom" class="container tab-pane fade"><br>
												      <h3>Cambiar Nombre</h3>
												      <br>
												      <div class="form-group">
														    <label >Nuevo Nombre :</label>
														    <br>
														    <input type="txt" class="form-control" style="width: 65%" placeholder="Este sera tu nombre para los demas usuarios">
												  		</div>
												  		<p align="right"><button type="button" class="btn btn-success" id="cmdcontra">Guardar</button></p>
											    </div>
											   	<div id="cmbbio" class="container tab-pane fade"><br>
												      <h3>Cambiar Descripcion</h3>
												      <br>
												      <div class="form-group">
														    <br>
														    <textarea class="form-control" rows="3" id="comment" placeholder="Cuentale a los Demas Sobre ti"></textarea>
												  		</div>
												  		<p align="right"><button type="button" class="btn btn-success" id="cmdcontra">Guardar</button></p>
											    </div>
										  </div>
								</div>
					  </div>
			</div>
</div>

</body>
</html>
