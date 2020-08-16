
<html>
	<head>
		<title>Generic </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    <script src="https://kit.fontawesome.com/0f71a9d38d.js" crossorigin="anonymous"></script>
	</head>
	<body class="is-preload">

		<!-- Page Wrapper -->

			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						  <a href="index.php"><i class="fas fa-home fa-x"></i></button> </a>
						<h1><a href="index.html">Registro de clientes</a></h1>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>



				<!-- Menu -->
					<nav id="menu">
						<div class="inner">
							<h2>Menu</h2>
							<ul class="links">
								<li><a href="index.php">Inicio</a></li>
								<li><a href="generic.php">Contacto</a></li>
								<li><a href="lista.php">Lista de precios</a></li>
								<li><a href="#">Inicio de sesion</a></li>
							</ul>
							<a href="#" class="close">Close</a>
						</div>
					</nav>

				<!-- Wrapper -->
					<section id="wrapper">
						<header>
							<div class="inner">
								<h2>Contacto</h2>
								<p>Pc master estara encantado de tenerlo como cliente, entrando en nuestra lista de clientes podemos informarle de descuentos, nuevos productos y mas</p>
							</div>
						</header>

						<!-- Content -->
							<div class="wrapper">
								<div class="inner">



									<h3 class="major">Visitanos</h3>

										<center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.9364150035926!2d-74.06756309164436!3d4.605407262447998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f99a2c10d2d01%3A0xbef005cbe58ecba8!2sTorres%20de%20Fenicia!5e0!3m2!1ses!2sco!4v1591429339063!5m2!1ses!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></center>

<br>
									<h3 class="major">Vitae phasellus</h3>
									<p>Cras mattis ante fermentum, malesuada neque vitae, eleifend erat. Phasellus non pulvinar erat. Fusce tincidunt, nisl eget mattis egestas, purus ipsum consequat orci, sit amet lobortis lorem lacus in tellus. Sed ac elementum arcu. Quisque placerat auctor laoreet.</p>

									<section class="features">
										<article>
											<a href="#" class="image"><img src="images/pic04.jpg" alt="" /></a>
											<h3 class="major">Sed feugiat lorem</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
											<a href="#" class="special">Learn more</a>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic05.jpg" alt="" /></a>
											<h3 class="major">Nisl placerat</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
											<a href="#" class="special">Learn more</a>
										</article>
									</section>

								</div>
							</div>

					</section>

				<!-- Footer -->
					<section id="footer">
						<div class="inner">
							<h2 class="major">Registrate</h2>
							<p>Unete para mas informacion articulos, promociones y mas del fantastico mundo del PC MASTER RACE</p>
							<form method="post" action="#">
								<div class="fields">
									<div class="field">



			<div class="form-group">
      <label for="cedula">Cedula</label>
      <input type="text" name="cedula" class="form-control" id="cedula">
    </div>
    <div class="form-group">
        <label for="nombre">Nombre </label>
        <input type="text" name="nombre_cliente" class="form-control" id="nombre_cliente" >
    </div>
    <div class="form-group">
        <label for="apellido">Apellido </label>
        <input type="text" name="apellido_cliente" class="form-control" id="apellido_cliente" >
    </div>
    <div class="form-group">
        <label for="direccion">Direccion </label>
        <input type="text" name="direccion" class="form-control" id="direccion">
    </div>

    <div class="form-group">
        <label for="telefono">Telefono</label>
        <input type="text" name="telefono" class="form-control" id="telefono">
    </div>
    <div class="form-group">
        <label for="nombre_ciudad">Ciudad </label>
        <input type="text" name="nombre_ciudad" class="form-control" id="nombre_ciudad">
    </div>
    <div class="form-group">
        <label for="departamento">Departamento </label>
        <input type="text" name="departamento" class="form-control" id="departamento">
    </div>
    <div class="form-group">
        <label for="email">Correo electronico </label>
        <input type="text" name="email" class="form-control" id="email">
    </div>
    <div class="form-group">
        <label for="nombre_usuario">Usuario </label>
        <input type="text" name="nombre_usuario" class="form-control" id="nombre_usuario">
    </div>
		<br>

		<input type="submit" value="Consultar" class="button small" name="btn_consultar">
		<input type="submit" value="Nuevo" class="button small" name="btn_nuevo">
		<input type="submit" value="Actualizar" class="button small" name="btn_actualizar">
		<input type="submit" value="Eliminar" class="button small" name="btn_eliminar">
		<p>  <a href="ver.php"><button><i class="fas fa-address-book"></i>lista de clientes</button> </a></p>



		<?php
	include("conexion.php");

		$ced    ="";
		$nomb   ="";
		$apell  ="";
		$dire  ="";
		$tele  ="";
		$ciud  ="";
		$depa  ="";
		$email  ="";
		$usua  ="";


		if(isset($_POST['btn_consultar']))
		{
			$ced  = $_POST['cedula'];
			$exit=0;
			 if ($ced =="")
			 {
				 echo '<div class= "alert alert-success">Se requiere el número de cedula</div>';
			 }
				 else
				 {
					 $ver = $myPDO -> query ("SELECT * FROM cliente  WHERE cedula = '$ced'");
						 WHILE ($row =$ver ->fetch())
						 {
								 echo $row['cedula'].'<br>';
								 echo $row['nombre_cliente'].'<br>';
								 echo $row['apellido_cliente'].'<br>';
								 echo $row['direccion'].'<br>';
								 echo $row['nombre_ciudad'].'<br>';
								 echo $row['departamento'].'<br>';
								 echo $row['email'].'<br>';
								 echo $row['telefono'].'<br>';
								 echo $row['nombre_usuario'].'<br>';

								 $exit++;
				 }
				 if ($exit==0)
				 {
					 echo '<div class= "alert alert-success">La cedula del autor no existe en la tabla</div>';
				 }
			}
		}

		if(isset($_POST['btn_nuevo']))
		{
			$ced  = $_POST['cedula'];
			$nomb = $_POST ['nombre_cliente'];
			$apell = $_POST ['apellido_cliente'];
			$tele= $_POST ['telefono'];
					$dire= $_POST ['direccion'];
							$ciud= $_POST ['nombre_ciudad'];
									$depa= $_POST ['departamento'];
											$email= $_POST ['email'];
													$usua= $_POST ['nombre_usuario'];


			 if ($ced =="" || $nomb ==""  || $apell =="")
			 {
				 echo '<div class= "alert alert-success">Los campos: cedula,
				 nombre, apellido son obligatorios</div>';
			 }
				 else
				 {
				 $sql_insert = "INSERT INTO cliente (cedula,nombre_cliente,apellido_cliente,direccion,telefono,nombre_ciudad,departamento,email,nombre_usuario)
					VALUES ('$ced', '$nomb','$apell','$dire','$tele','$ciud','$depa','$email','$usua')";
				 $myPDO -> query($sql_insert);
				 }

		}

		if(isset($_POST['btn_actualizar']))
		{
			$ced  = $_POST['cedula'];
			$nomb = $_POST ['nombre_cliente'];
			$apell = $_POST ['apellido_cliente'];
			$tele= $_POST ['telefono'];
				$dire= $_POST ['direccion'];
					$ciud= $_POST ['nombre_ciudad'];
						$depa= $_POST ['departamento'];
							$email= $_POST ['email'];
								$usua= $_POST ['nombre_usuario'];


			 if ($ced =="" || $nomb ==""  || $apell =="")
			 {
				 echo '<div class= "alert alert-success">Los campos: cedula,
				 nombre, apellido son obligatorios</div>';
			 }
				 else
				 {
					 $exit=0;
					 $ver = $myPDO -> query ("SELECT * FROM cliente  WHERE cedula = '$ced'");
						 WHILE ($row =$ver ->fetch())
						 {
								 $exit++;
					 }
					 if ($exit==0)
					 {
					 echo '<div class= "alert alert-success">La cedula del autor no existe en la tabla</div>';
					 }
						else
						{
							$sql_update = "UPDATE cliente SET
														 cedula='$ced',
														 nombre ='$nomb',
														 apellido='$apell',
														 telefono='$tele',
															Direccion='$dire',
															 Ciudad='$ciud',
																Departamento='$depa',
																 email='$email',
																	Usuario='$usua',
														 WHERE cedula='$ced'";
							$myPDO -> query($sql_update);

							echo '<div class= "alert alert-success">Actualizacion relizada</div>';
						}
				 }

		}

		if(isset($_POST['btn_eliminar']))
		{
			$ced  = $_POST['cedula'];
			$exit=0;
			 if ($ced =="")
			 {
				 echo '<div class= "alert alert-success">Se requiere el número de cedula</div>';
			 }
				 else
				 {
					 $ver = $myPDO -> query ("SELECT * FROM cliente  WHERE cedula = '$ced'");
						 WHILE ($row =$ver ->fetch())
						 {
								 $exit++;
				 }
				 if ($exit==0)
				 {
					 echo '<div class= "alert alert-success">La cedula del autor no existe en la tabla</div>';
				 }
				 else
				 {
					 $sql = "DELETE FROM cliente WHERE cedula='$ced'";
					 $myPDO ->query($sql);
					 echo '<div class= "alert alert-success">El registro de elimino</div>';
				 }
		}
	}

?>





								<ul class="actions">
								</ul>
							</form>
							<ul class="contact">
								<li class="icon solid fa-home">
									Pc master<br />
									Calle 21 n 1-83<br />
									Bogota, Colombia
								</li>
								<li class="icon solid fa-phone">(301) 6722837</li>
								<li class="icon solid fa-envelope"><a href="#">asesorpcmaster@gmail.com</a></li>
								<li class="icon brands fa-twitter"><a href="#">twitter.com/pcmaster</a></li>
								<li class="icon brands fa-facebook-f"><a href="https://www.facebook.com/pcmasterco">facebook.com/pcmasterco</a></li>
								<li class="icon brands fa-instagram"><a href="#">instagram.com/pcmasterco</a></li>

							</ul>
							<ul class="copyright">
								<li>&copy; PC MASTER. All rights reserved.</li><li>
						</div>
					</section>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
