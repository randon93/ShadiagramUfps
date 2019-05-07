<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="<?php echo constant('URL');?>PUBLIC/bootstrap4/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo constant('URL');?>PUBLIC/bootstrap4/css/mystyle.css">
<script type="text/javascript" src="<?php echo constant('URL');?>PUBLIC/bootstrap4/js/bootstrap.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script type="text/javascript" src="<?php echo constant('URL');?>PUBLIC/bootstrap4/js/bootstrap.min.js"></script>

<head>
	<title>@Nombredeusuario</title>
</head>

<body>
<?php var_dump($_SESSION['SEGUIDOS']); ?>

	<!--Inicio  Barra navegacion-->
	<nav class="navbar navbar-expand-sm  bg-mycolor" style="height: 80px">
		<!-- Brand/logo -->
		<a class="navbar-brand" href="index.html"><img src="<?php echo constant('URL');?>public/img/recursos/logo2.png"></a>
		<div class="mx-auto">
			<form class="form-inline" method="post" action="<?php echo constant('URL');?>perfil/buscarUsuarios">
				<input class="form-control mr-sm-5" type="text" placeholder="Buscar" style="width: 500px" name="searchUser" required>
				<button class="btn" type="submit"><img src="<?php echo constant('URL');?>public/img/recursos/lupa.png"></button>
			</form>
		</div>
		<ul class="navbar-nav">

			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="profile.html" id="navbardrop" data-toggle="dropdown">
					<img src="<?php echo constant('URL');?>public/img/recursos/usuario.png" class="rounded-circle" id="profile">
				</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="index.html">Inicio</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Configuracion</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="<?php echo constant('URL');?>login/cerrarSesion">Cerrar sesion</a>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#"></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#"></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#"></a>
			</li>
		</ul>
	</nav>

	<!--Inicio MODAL navbar -->
	</div>
	</div>
	</div>
</div>
	<!--Fin de Modal navbar-->

	<!--Fin  Barra navegacion-->
	<div class="container-fluid bg-light">
		<div class="container bg-light">
			<div class="row">
				<div class="col-sm-4"><img src="<?php echo constant('URL');?>public/img/users/<?php echo $_SESSION['USER']->getPhoto() ?>" class="rounded-circle" style="height: 200px; width: 200px;margin: 25px" align="right"></div>
				<div class="col-sm-8">
					<br>
					<br>
					<p><strong><?php echo "@".$_SESSION['USER']->getAlias(); ?> &nbsp&nbsp&nbsp</strong> <a href="<?php echo constant('URL');?>perfil/configProfile"><button type="button" class="btn btn-outline-secondary">Editar Perfil</button></a> <button type="button" class="btn" data-toggle="modal"
							data-target="#modalconf"><img src="<?php echo constant('URL');?>public/img/recursos/ajustes.png"></button><button type="button" class="btn" data-toggle="modal" data-target=".bd-example-modal-lg"><img
								src="<?php echo constant('URL');?>public/img/recursos/subir.png"></button></p>
					<p><strong><?php echo count($this->imagenes);?>&nbsp</strong>Publicaciones <a id="btn-seguidores" data-toggle="modal" data-target="#segui"><strong>&nbsp&nbsp18</strong>&nbspseguidores</a><a id="btn-siguiendo" data-toggle="modal"
							data-target="#sigui"><strong>&nbsp&nbsp&nbsp22</strong>&nbspseguidos</a></p>
					<p><strong><?php echo $_SESSION['USER']->getNombre(); ?></strong></p>
					<p><?php echo $_SESSION['USER']->getResena(); ?></p>
					<hr />
					<!--Inicio Modal seguidores -->
					<!-- The Modal -->
					<div class="modal" id="segui">
						<div class="modal-dialog">
							<div class="modal-content">

								<!-- Modal Header -->
								<div class="modal-header">
									<h4 class="modal-title">Seguidores</h4>
									<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>

								<!-- Modal body -->
								<div class="modal-body">

									<div><img src="<?php echo constant('URL');?>public/img/recursos/usuario2.png"><strong>&nbspMamorro11</strong>
										<div style="float: right;"><button type="button" class="btn btn-primary">Seguir</button></div>
									</div>
								</div>
								<div class="modal-body">
									<img src="<?php echo constant('URL');?>public/img/recursos/usuario2.png"><strong>&nbspBrandom15</strong>
									<div style="float: right;"><button type="button" class="btn btn-primary">Seguir</button></div>
								</div>

								<div class="modal-body">
									<img src="<?php echo constant('URL');?>public/img/recursos/usuario2.png"><strong>&nbspMessi10</strong>
									<div style="float: right;"><button type="button" class="btn btn-light">Siguiendo</button></div>
								</div>


							</div>
						</div>
					</div>
					<!--Fin Modal seguidores -->

					<!--Inicio MODAL SIGUIENDO -->

					<div class="modal" id="sigui">
						<div class="modal-dialog">
							<div class="modal-content">

								<!-- Modal Header -->
								<div class="modal-header">
									<h4 class="modal-title">Siguiendo</h4>
									<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>

								<!-- Modal body -->
								<div class="modal-body">

									<div><img src="<?php echo constant('URL');?>public/img/recursos/usuario2.png"><strong>&nbspMamorro11</strong>
										<div style="float: right;"><button type="button" class="btn btn-primary">Seguir</button></div>
									</div>
								</div>
								<div class="modal-body">
									<img src="<?php echo constant('URL');?>public/img/recursos/usuario2.png"><strong>&nbspBrandom15</strong>
									<div style="float: right;"><button type="button" class="btn btn-primary">Seguir</button></div>
								</div>

								<div class="modal-body">
									<img src="<?php echo constant('URL');?>public/img/recursos/usuario2.png"><strong>&nbspMessi10</strong>
									<div style="float: right;"><button type="button" class="btn btn-light">Siguiendo</button></div>
								</div>



							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	</div>
	<!--Fin MODAL SIGUIENDO -->

	<!-- The Modal CONFIGURACION -->
	<div class="modal" id="modalconf">
		<div class="modal-dialog modal-dialog-centered modal-sm">
			<div class="modal-content">



				<!-- Modal body -->
				<div class="modal-body">
					Cambiar Contrasena
				</div>
				<div class="dropdown-divider"></div>
				<!-- Modal body -->
				<div class="modal-body">
					Cambiar Email
				</div>
				<div class="dropdown-divider"></div>
				<!-- Modal body -->
				<div class="modal-body">
					Salir
				</div>
				<div class="dropdown-divider"></div>
				<div class="modal-body">
					Cancelar
				</div>
			</div>
		</div>
	</div>
	<!---Fin ModaL Configuracion-->

	<!-- The Modal perfil -->
	<div class="modal" id="modalpublicacion">
		<!-- MODAL FOTO COMENTARIOS -->
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<!-- Modal body -->
				<div class="modal-body">
					<div class="row" <div class="container">
						<div class="col-sm-7"><img src="<?php echo constant('URL');?>public/img/recursos/foto2.jpg" style="width: 100%;height: 100%"></div>

						<div class="col-sm-5"><img src="<?php echo constant('URL');?>public/img/recursos/usuario2.png"><strong> &nbsp&nbspBrandomperico15</strong><button type="button" class="close" data-dismiss="modal">&times;</button>
							<hr>

							<table class="table table-borderless">

								<tbody>
									<tr>
										<td><strong>Mamorro11</strong>&nbsp&nbsp PERRA</td>
									</tr>

									<tr>
										<td><strong>Brandomperico15</strong>&nbsp&nbspSoy negro muy estupido pero ladron jijiji</td>
									</tr>
									<tr>

								</tbody>
							</table>
							<footer>

								<textarea class="form-control" rows="2" placeholder="Escribe un Comentario..." id="comment"></textarea>

								<p></p>
								<button type="button" class="btn" style="width: 100% height:100%">Enviar</button>

							</footer>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	</div>


	<div class="container-fluid bg-light">
		<div class="container bg-light">
			<?php
				$r = 0;
				for ($i=0; $i < (count($this->imagenes)/3) ; $i++) {
				 ?>
			<div class="row">
				<?php
						 for ( $j=0; $j < 3 ; $j++) {
							 if ( $r < count($this->imagenes)) {
						 ?>
				<div class="col" style="margin: 10px;">
					<div class="containerssss" data-toggle="modal" data-target="#modalpublicacion">
						<img src="<?php echo constant('URL');?>public/img/users/<?php echo $this->imagenes[$r]['img']; $r++;?>" alt="Avatar" class="image" style="width:100%">
						<div class="middle">
							<div class="text">115&nbsp<img src="<?php echo constant('URL');?>public/img/recursos/corazonv.png">&nbsp&nbsp3
								<img src="<?php echo constant('URL');?>public/img/recursos/comentario.png">
							</div>
						</div>
					</div>
				</div>
				<?php
					 		}
						}	 ?>
			</div>
			<?php } ?>
		</div>
	</div>
	<!-- **************************************************************** -->
	<!-- MODAL PARA SUBIR PUBLICACION -->
	<!-- **************************************************************** -->
	<!-- Modal -->


	<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-body">
					<form action="<?php echo constant('URL');?>perfil/subirPublicacion" method="post" enctype="multipart/form-data">
						<input type="file" name="imagen">
						<br>
						<hr>
						<label for="">Descripcion de la publicacion</label>
						<br>
						<input type="text" name="descripcion">
						<br>
						<hr>
						<input type="submit" class="btn btn-primary" value="Save changes">
						<!--<input type="button" name="" value="Publicar"> -->
					</form>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>

		</div>
	</div>
	<!-- **************************************************************** -->
	<!-- FIN MODAL PARA SUBIR PUBLICACION -->
	<!-- **************************************************************** -->
</body>

</html>
