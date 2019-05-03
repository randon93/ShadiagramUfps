<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<script type="text/javascript" src="js/bootstrap.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<head>
	<title>Intercagram</title>
</head>
	<script>
window.addEventListener('load', iniciar, false);

function iniciar() {

  var imagen = document.getElementById('imagen');

  imagen.addEventListener('mouseover', cambiar, false);
  imagen.addEventListener('mouseout', restaurar, false);
  imagen.addEventListener('click', clickaso, false);
  imagen.addEventListener('dblclick', doclickaso, false);
}

function restaurar(){
  var imagen = document.getElementById('imagen').src = "<?php echo constant('URL'); ?>public/img/RECURSOS/corazonv.png";
}

function cambiar() {
  var imagen = document.getElementById('imagen').src = "<?php echo constant('URL'); ?>public/img/RECURSOS/corazon.png";
}

function clickaso() {
	var imagen = document.getElementById('imagen');
	imagen.addEventListener('mouseover', cambiar, false);
	imagen.addEventListener('mouseout', restaurar, false);
  var imagen = document.getElementById('imagen').src = "<?php echo constant('URL'); ?>public/img/RECURSOS/corazonv.png";
}
function doclickaso() {
	var imagen = document.getElementById('imagen');
	imagen.removeEventListener('mouseover', cambiar, false);
	imagen.removeEventListener('mouseout', restaurar, false);
  var imagen = document.getElementById('imagen').src = "<?php echo constant('URL'); ?>public/img/RECURSOS/corazon.png";
}

</script>
<body>

  <nav class="navbar navbar-expand-sm bg-mycolor">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="index.html"><img src="<?php echo constant('URL'); ?>public/img/RECURSOS/logo2.png"></a>
  <div class="mx-auto" >
  <form class="form-inline" action="/action_page.php">
    <input class="form-control mr-sm-5" type="text" placeholder="Buscar" style="width: 500px">
    <button class="btn" type="submit"><img src="<?php echo constant('URL'); ?>public/img/RECURSOS/lupa.png"></button>
  </form>
</div>
  <ul class="navbar-nav" >

        <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle"  href="#" id="navbardrop" data-toggle="dropdown">
         <img src="<?php echo constant('URL'); ?>public/img/RECURSOS/usuario.png" class="rounded-circle">
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Configuracion	</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Cerrar sesion</a>
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
 <div class="container-fluid bg-light"align="center"  >
<?php
foreach ($this->imagenes as $foto) {
 ?>
 <div class="card" style="width:750px;margin-bottom: 80px" >

  <div class="card-header" align="left"><img src="img/usuario2.png" style="font-weight: bold;">&nbsp&nbsp BrandomPerico15</div>
  <img  class="card-img" src="<?php echo constant('URL'); ?>public/img/users/<?php echo $foto['img'] ?>">
  <div class="card-body" align="left"><img src="<?php echo constant('URL'); ?>public/img/RECURSOS/corazonv.png" id="imagen">&nbsp&nbsp&nbsp&nbsp<img src="<?php echo constant('URL'); ?>public/img/RECURSOS/comentario.png">&nbsp&nbsp&nbsp&nbsp<img src="<?php echo constant('URL'); ?>public/img/RECURSOS/compartir.png"><p style="font-weight: bold;">1500 Me gusta</p><p><span style="font-weight: bold;">Brandomperico15</span>&nbsp&nbsp Este es el Fondo de mi Computadora Personal , tengo varias hijas por ahi regadas pero no respondi por ninguna por que soy negro</p> </div>

  <div class="card-footer">Aqui Van Los Dos comentarios mas relevantes en caso de existir</div>
</div>
<?php } ?>

<!-- <div class="card" style="width:750px ;margin-bottom: 80px" >

  <div class="card-header" align="left"><img src="img/usuario2.png" style="font-weight: bold;">&nbsp&nbsp Mamorro11</div>
  <img  class="card-img" src="img/foto2.jpg">
  <div class="card-body" align="left"><img src="img/corazonv.png" id="imagen">&nbsp&nbsp&nbsp&nbsp<img src="img/comentario.png">&nbsp&nbsp&nbsp&nbsp<img src="img/compartir.png"><p style="font-weight: bold;">1500 Me gusta</p><p><span style="font-weight: bold;">Brandomperico15</span>&nbsp&nbsp Este es el Fondo de mi Computadora Personal , tengo varias hijas por ahi regadas pero no respondi por ninguna por que soy gordo</p> </div>

  <div class="card-footer">Aqui Van Los Dos comentarios mas relevantes en caso de existir</div>
</div> -->


<footer><p>Copyright Intercagram © 2019</p></footer>

</div>



</body>

</html>
