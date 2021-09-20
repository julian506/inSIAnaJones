<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
<link rel="icon" href="images/favicon.ico">
<title>InSIAna Jones</title>
</head>

<div class="titulo">
<h2><center>InSIAna Jones</center></h2>
<h4><center>En memoria del muñequito del SIA</center></h4>
</div>



<div class="principal">
<body>

<div class="novedades">
<center><h4>Novedades</h4></center>
	<ul>
		<li>Rediseños menores a la página estéticamente. Ahora <b>estrenando vista móvil</b></li>
		<li>Ahora solo se aceptan números entre 0 y 100, si meten un número fuera de esos rangos no me hago responsable :v</li>
		<li>Ahora las unidades decimales se pueden ingresar usando <b>un punto o una coma</b> para separar la parte entera de la decimal.</li>
		<li>Si hay alguna inquietud, sugerencia o corrección pueden dirigirse a mis redes sociales y hacérmelo saber. Mis redes quedan en el pie de página.</li>
	</ul>
</div>

<form id="formulario" method="post" action="index2.php">
	<p>Ingrese su porcentaje de avance en el SIA: <input type="number" name="porcentaje" id="porcentaje" min="0" max="100" step=".01"> %</p>
	<input type="submit"></button>
</form>



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

<div class="grafico">

	<?php
		if (empty($_POST))
		{
			echo "<img src='/inSIAnaJones/images/fondo.jpg'  border='1' width='344' height='226'>";

		}
		else{
			echo "<div class='imagen'>";
			include('cargar.php');
			echo "</div>";
		}
	?>

</div>


<style type="text/css">


	
	.novedades{
		
		border:solid 2px #ccc;
		width: auto;
		margin-left: auto;
		margin-right: auto;
		padding-right: 10px;
		margin-top: 10px;
		margin-bottom: 10px;
		padding-top: 10px;
		padding-bottom: 10px;
		text-align: justify;
	}
	
	.grafico{
		border: 2px solid #ccc;
		margin-top: 10px;
		margin-bottom: 10px;
		padding-top: 10px;
		padding-bottom: 10px;
		width: inherit;
		margin-left: auto;
  		margin-right: auto;
	}
	
	@media only screen and (max-width: 768px){
		.imagen img
		{
			 width: 100%;
    		height: auto;
		}
		.outer{
			height:25px;
			width:100%;
			border:solid 1px #000;
			text-align: center;
		}
		.inner{
			height:25px;
			width: <?php echo $actual?>%;
			border-right:solid 1px #000;
			background-color: orangered;
		t	ext-align: center;
		}
	}
	
	.outter{
		height:25px;
		width:344px;
		border:solid 1px #000;
		text-align: center;
	}
	.inner{
		height:25px;
		width: <?php echo $actual?>%;
		border-right:solid 1px #000;
		background-color: orangered;
		text-align: center;
		
	}
	
	.principal {
	  background-color: #fafafa;
	  margin: 1rem;
	  padding: 1rem;
	  border: 2px solid #ccc;
	  /* IMPORTANTE */
	  text-align: center;
		width: auto;
	}
	.titulo {
	  background-color: lightgray;
	  margin: 1rem;
		margin-top: 0;
		padding-bottom: 10px;
	  border: 2px solid #ccc;
	  text-align: center;
		vertical-align: middle;
		height: 80px;
	}
	
	.pie{
		border: 2px solid #ccc;
		margin: 1rem;
		text-align: center;
		
	}
}
</style>

	<center>
		<div class="outter">
			<div class="inner"><?php echo "$actual%"?></div>
		</div>
	</center>
</div>

<div class="pie">
	<p>Hecho por: Julián Pachón Castrillón - UNAL Manizales - Admin. Sistemas Informáticos. &nbsp;
	<a href="https://www.facebook.com/Julian506"><img src="images/facebook.ico" height="25px"></a>&nbsp;&nbsp;
	<a href="https://twitter.com/JulianPachonC"><img src="images/twitter.ico" height="25px"></a>
		</br>
		<center>Actualizado: 5/11/2019</center>
		</p>
</div>
</body>
</html>