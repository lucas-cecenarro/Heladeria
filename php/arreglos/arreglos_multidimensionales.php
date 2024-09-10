<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../css/base.css">
	<title>Arreglos</title>
</head>

<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WF462BJ" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<div id="barraSuperior">
		<nav>
			<div class="contenedorNav">
				<div class="cajaLogoJauja">
					<div class="logoJauja">
						<a href="/">
							<div id="logoGrande"><img src="/img/LogoClubJauja.png" alt="ClubJauja" style="height: 80px; padding: 5px;" /></div>
							<div id="logoChico"><img src="/img/logoClubJaujaChico.png" alt="ClubJauja" /></div>
						</a>
					</div>
				</div>
				<ul class="menuIngreso menuRight">
					<li><a title="Ingresá a ClubJauja" href="/socio/ingreso"><i class="fa fa-sign-in fa-lg"></i> Ingresá</a></li>
				</ul>
				<div id="cajaMenu">
					<div class="iconoMenu">
						<div><i class="fa fa-bars"></i></div>
					</div>
					<ul class="menuSuperior">
						<li><a href="../Principal.php">Inicio</a></li>
						<li><a href="../Constantes.php">Constantes</a></li>
						<li><a href="../ArchivoPDF.php">Articulo</a></li>
						<li><a href="../arreglos.php">Arreglos</a></li>
						<li><a target="_blank" href="http://www.jauja.com.ar">Visitá<br />nuestra web</a></li>
					</ul>
				</div>

			</div>
		</nav>
	</div>

	<div class="espacio"></div>

	<?php

	# Los arreglos multidimensionales nos permiten tener arreglos dentro de otros arreglos.

	$amigos = array(
		array('Alejandro', 20),
		array('Cesar', 21),
		array('Manuel', 18)
	);

	# En este ejemplo accedemos primero al arreglo amigos y luego al primer elemento dentro de amigos, despues accedemos al primer valor del arreglo.

	# Puedes llegar a tener cuantos niveles quieras.
	echo $amigos[0][0] . '<br />';
	echo $amigos[1][0] . '<br />';
	echo $amigos[2][0] . '<br />';

	?>

	<style>
		body {
			background-color: bisque;
		}

		.espacio {
			height: 80px;
		}
	</style>
</body>

</html>