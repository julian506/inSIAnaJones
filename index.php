<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<title>InSIAna Jones</title>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="images/favicon.ico" width="18" height="27" class="d-inline-block align-top" alt="">&nbsp;InSIAna Jones</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#inicio">Inicio<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#novedades">Novedades</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contacto">Contacto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index2.php">Sitio Antiguo</a>
      </li>
    </ul>
  </div>
</nav>

<div class="card pt-3" id="inicio">
  <div class="card-body mx-auto">
   <div class="form-group">
   	<form id="formulario" method="post" action="index.php">
   		<div class="row">
   			<div class="col">
   				<label for"porcentaje">Ingrese su porcentaje de avance en el SIA</label>
   			</div>
   			<div class="col">
   				<input type="number" name="porcentaje" class="form-control" id="porcentaje" min="0" max="100" step=".01" width="40" placeholder="Ingrese aquí su porcentaje">
   				<small class="form-text text-muted">Ingresar unidades decimales separadas por un punto o una coma.</small>
   			</div>
   		</div>
		<center><button type="submit" class="btn btn-primary m-2">Enviar</button></center>
	</form>
   </div>
  </div>
</div>

<script type="text/javascript">
	function comprobar(valor, campo) {

	  var mensaje = "";

	  // comprobar los posibles errores
	  if (this.value == "") {
		mensaje = "El porcentaje no puede estar vacío >:v";
	  } else if (this.value<0) {
		mensaje = "¿No ha empezado con la universidad, crack? :v";
	  } else if (this.value>100) {
		mensaje = "No pues, qué le decimos al que tiene un porcentaje mayor a 100 >:v";
	  } 

	  // mostrar/resetear mensaje (el mensaje se resetea poniendolo a "")
	  this.setCustomValidity(mensaje);
	}

	var porc = document.querySelector("#porcentaje");

	// cuando se cambie el valor del campo o sea incorrecto, mostrar/resetear mensaje
	porc.addEventListener("invalid", comprobar);
	porc.addEventListener("input", comprobar);
</script>

<div class="card">
  	<div class="card-body mx-auto">
		<div class="grafico">

			<?php
				if (empty($_POST))
				{
					echo "<img src='images/fondo.jpg'  border='1' width='344' height='226'>";

				}
				else{
					echo "<div class='imagen'>";
					include('cargar.php');
					echo "</div>";
				}
			?>
		</div>
		<div class="progress mt-3" style="height: 25px;">
	 	<?php
			$image=$_POST['porcentaje'];
		 	echo "<div class='progress-bar progress-bar-striped progress-bar-animated' role='progressbar' style='width: $image%;' aria-valuenow='$image'' aria-valuemin='0' aria-valuemax='100'>$image%</div>";
		?>
		</div>
	</div>
</div>


<div class="card" id="novedades">
  	<div class="card-body mx-auto">
		<h4><center>Novedades</center></h4>
		<ul>
			<li>Rediseño total a la página haciendo uso de bootstrap. Ahora <b>estrenando vista móvil</b></li>
			<li>Ahora solo se aceptan números entre 0 y 100, si meten un número fuera de esos rangos no me hago responsable :v</li>
			<li>Ahora las unidades decimales se pueden ingresar usando <b>un punto o una coma</b> para separar la parte entera de la decimal.</li>
			<li>Si hay alguna inquietud, sugerencia o corrección pueden dirigirse a mis redes sociales y hacérmelo saber. Mis redes quedan en el pie de página.</li>
		</ul>
	</div>
</div>

<div class="card" id="contacto">
  	<div class="card-body mx-auto">
		<h4><center>Contacto</center></h4>
		<p class="text-center">Hecho por: Julián Pachón Castrillón - Universidad Nacional de Colombia - Sede Manizales</p>
		<p class="text-center">Estudiante de Administración de Sistemas Informáticos</p>
		<center><a href="https://www.facebook.com/Julian506"><img src="images/facebook.ico" height="25px"></a>&nbsp;&nbsp;
		<a href="https://twitter.com/JulianPachonC"><img src="images/twitter.ico" height="25px"></a></center>
		<p class="text-center">Actualizado: 09/11/2019</p>
	</div>
</div>


</body>
</html>
