<!DOCTYPE HTML>
<!--
	Solid State by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Generic </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
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
								<li><a href="index.html">Home</a></li>
								<li><a href="generic.html">Contacto</a></li>
								<li><a href="elements.html">Elements</a></li>
								<li><a href="#">Log In</a></li>
								<li><a href="#">Sign Up</a></li>
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

									<h3 class="major">Lorem ipsum dolor</h3>
									<p>Morbi mattis mi consectetur tortor elementum, varius pellentesque velit convallis. Aenean tincidunt lectus auctor mauris maximus, ac scelerisque ipsum tempor. Duis vulputate ex et ex tincidunt, quis lacinia velit aliquet. Duis non efficitur nisi, id malesuada justo. Maecenas sagittis felis ac sagittis semper. Curabitur purus leo donec vel dolor at arcu tincidunt bibendum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce ut aliquet justo. Donec id neque ipsum. Integer eget ultricies odio. Nam vel ex a orci fringilla tincidunt. Aliquam eleifend ligula non velit accumsan cursus. Etiam ut gravida sapien.</p>

									<p>Vestibulum ultrices risus velit, sit amet blandit massa auctor sit amet. Sed eu lectus sem. Phasellus in odio at ipsum porttitor mollis id vel diam. Praesent sit amet posuere risus, eu faucibus lectus. Vivamus ex ligula, tempus pulvinar ipsum in, auctor porta quam. Proin nec commodo, vel scelerisque nisi scelerisque. Suspendisse id quam vel tortor tincidunt suscipit. Nullam auctor orci eu dolor consectetur, interdum ullamcorper ante tincidunt. Mauris felis nec felis elementum varius.</p>

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
							<p>Cras mattis ante fermentum, malesuada neque vitae, eleifend erat. Phasellus non pulvinar erat. Fusce tincidunt, nisl eget mattis egestas, purus ipsum consequat orci, sit amet lobortis lorem lacus in tellus. Sed ac elementum arcu. Quisque placerat auctor laoreet.</p>
							<form method="post" action="#">
								<div class="fields">
									<div class="field">
									

    <div class="form-group">
        <label for="nombre">Nombre </label>
        <input type="text" name="nombre_proveedor" class="form-control" id="nombre_proveedor" >
    </div>

    <div class="form-group">
        <label for="ciudad">Ciudad </label>
        <input type="text" name="ciudad_proveedor" class="form-control" id="ciudad_proveedor" >
    </div>

    <div class="form-group">
        <label for="Codigo">Codigo</label>
        <input type="text" name="codigo_proveedor" class="form-control" id="codigo_proveedor">
    </div>


    <div class="form-group">
        <label for="pais">Pais</label>
        <input type="text" name="pais_proveedor" class="form-control" id="pais_proveedor">
    </div>


    <div class="form-group">
        <label for="direccion">Direccion </label>
        <input type="text" name="direccion_proveedor" class="form-control" id="direccion_proveedor" >
    </div>

    <div class="form-group">
        <label for="email">Correo electronico </label>
        <input type="text" name="email_proveedor" class="form-control" id="email_proveedor" >
    </div>

    <div class="form-group">
        <label for="telefono_proveedor">Telefono </label>
        <input type="text" name="telefono_proveedor" class="form-control" id="telefono_proveedor">
    </div>

		<input type="submit" value="Consultar" class="btn btn-primary" name="btn_consultar">
		<input type="submit" value="Nuevo" class="btn btn-success" name="btn_nuevo">
		<input type="submit" value="Actualizar" class="btn btn-info" name="btn_actualizar">
		<input type="submit" value="Eliminar" class="btn btn-danger" name="btn_eliminar">
		<?php
	include("conexion.php");

		$codi    ="";
		$nomb   ="";
		$pais  ="";
		$dire  ="";
		$tele  ="";
		$ciud  ="";
		$email  ="";



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
								 echo $row['codigo_proveedor'].'<br>';
								 echo $row['nombre_proveedor'].'<br>';
								 echo $row['ciudad_proveedor'].'<br>';
								 echo $row['direccion_proveedor'].'<br>';
								 echo $row['pais_proveedor'].'<br>';
								 echo $row['email_proveedor'].'<br>';
								 echo $row['telefono_proveedor'].'<br>';


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
			$codi  = $_POST['codigo_proveedor'];
			$nomb = $_POST ['nombre_proveedor'];
			$pais = $_POST ['pais_proveedor'];
			$tele= $_POST ['telefono_proveedor'];
					$dire= $_POST ['direccion_proveedor'];
							$ciud= $_POST ['ciudad_proveedor'];
															$email= $_POST ['email'];



			 if ($cod =="" || $nomb ==""  || $email =="")
			 {
				 echo '<div class= "alert alert-success">Los campos: codigo,
				 nombre, email son obligatorios</div>';
			 }
				 else
				 {
				 $sql_insert = "INSERT INTO proveedor (codigo_proveedor,nombre_proveedor,pais_proveedor,direccion_proveedor,telefono_proveedor,ciudad_proveedor,email_proveedor)
					VALUES ('$codi', '$nomb','$pais','$dire','$tele','$ciud','$email')";
				 $myPDO -> query($sql_insert);
				 }

		}

		if(isset($_POST['btn_actualizar']))
		{
			$codi  = $_POST['codigo_proveedor'];
			$nomb = $_POST ['nombre_proveedor'];
			$pais = $_POST ['pais_proveedor'];
			$tele= $_POST ['telefono_proveedor'];
				$dire= $_POST ['direccion_proveedor'];
					$ciud= $_POST ['ciudad_proveedor'];
							$email= $_POST ['email_proveedor'];



			 if ($codi =="" || $nomb ==""  || $email =="")
			 {
				 echo '<div class= "alert alert-success">Los campos: codigo,
				 nombre e email son obligatorios</div>';
			 }
				 else
				 {
					 $exit=0;
					 $ver = $myPDO -> query ("SELECT * FROM proveedor  WHERE codigo = '$codi'");
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
							$sql_update = "UPDATE proveedor SET
														 codigo='$codi',
														 nombre ='$nomb',
														pais='$pais',
														 telefono='$tele',
															Direccion='$dire',
															 Ciudad='$ciud',
																 email='$email',

														 WHERE codigo='$codi'";
							$myPDO -> query($sql_update);

							echo '<div class= "alert alert-success">Actualizacion relizada</div>';
						}
				 }

		}

		if(isset($_POST['btn_eliminar']))
		{
			$ced  = $_POST['codigo'];
			$exit=0;
			 if ($codi =="")
			 {
				 echo '<div class= "alert alert-success">Se requiere el número de cedula</div>';
			 }
				 else
				 {
					 $ver = $myPDO -> query ("SELECT * FROM proveedor  WHERE codigo = '$codi'");
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
					 $sql = "DELETE FROM proveedor WHERE codigo='$codi'";
					 $myPDO ->query($sql);
					 echo '<div class= "alert alert-success">El registro de elimino</div>';
				 }
		}
	}

?>

								<ul class="actions">
									<li><input type="submit" value="Send Message" /></li>
								</ul>
							</form>
							<ul class="contact">
								<li class="icon solid fa-home">
									Untitled Inc<br />
									1234 Somewhere Road Suite #2894<br />
									Nashville, TN 00000-0000
								</li>
								<li class="icon solid fa-phone">(000) 000-0000</li>
								<li class="icon solid fa-envelope"><a href="#">information@untitled.tld</a></li>
								<li class="icon brands fa-twitter"><a href="#">twitter.com/untitled-tld</a></li>
								<li class="icon brands fa-facebook-f"><a href="#">facebook.com/untitled-tld</a></li>
								<li class="icon brands fa-instagram"><a href="#">instagram.com/untitled-tld</a></li>
							</ul>
							<ul class="copyright">
								<li>&copy; Untitled Inc. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
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
