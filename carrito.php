-->
<html>
	<head>
		<title>Carrito </title>
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
					  <a href="carrito.php"><i class="fas fa-shopping-cart"></i></button> </a>	<h1><a href="index.php">CARRITO DE COMPRAS</a></h1>

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
								<li><a href="#">Iniciar sesion</a></li>
							</ul>
							<a href="#" class="close">Close</a>
						</div>
					</nav>

				<!-- Wrapper -->
					<section id="wrapper">
						<header>
							<div class="inner">
								<h2>CARRITO DE COMPRAS</h2>
								<p>Porfavor diligencie los siguientes datos antes de finalizar su compra</p>
							</div>
						</header>

						<!-- Content -->
							<div class="wrapper">
								<div class="inner">


				<!-- Footer -->
					<section id="footer">
						<div class="inner">
							<h2 class="major">Carrito</h2>
							<p>Diligencie los datos</p>
							<form method="post" action="#">
								<div class="fields">
									<div class="field">


										<div class="col-12">
											<label for="demo-category">Producto</label>
											<select name="referencia_producto" id="referencia_producto">
												<option value="">-</option>
												<option value="10">10</option>
											<option value="20">20</option>
												<option value="30">30</option>
													<option value="40">40</option>
													<option value="50">50</option>
													<option value="60">60</option>
													<option value="70">70</option>
													<option value="80">80</option>
													<option value="90">90</option>
													<option value="100">100</option>
											</select>
										</div>
    <div class="form-group">
        <label for="usuario">Usuario </label>
        <input type="text" name="usuario" class="form-control" id="usuario">
    </div>
		<div class="col-12">
			<label for="demo-category">Producto</label>
			<select name="nombre_producto" id="nombre_producto">
				<option value="">-</option>
				<option value="Board asrock b450 steel legend">board asrock b450 steel legend</option>
			<option value="Board asus b450m-a">Board asus b450m-a</option>
				<option value="Procesador ryzen 5 3400g">Procesador ryzen 5 3400g</option>
					<option value="Procesador intel i3 9100f">Procesador intel i3 9100f</option>
					<option value="Tarjeta grafica sapphire rx 580 8gb">Tarjeta grafica sapphire rx 580 8gb</option>
					<option value="Tarjeta grafica pny 1030 2gb ddr5">Tarjeta grafica pny 1030 2gb ddr5</option>
					<option value="Memoria ram corsair 3000mhz">Memoria ram corsair 3000mhz</option>
					<option value="Memoria ram corsair 3200mhz">Memoria ram corsair 3200mhz</option>
					<option value="Audifonos corsair void pro">Audifonos corsair void pro</option>
					<option value="Audifonos msi ds 502">Audifonos msi ds 502</option>
			</select>
		</div>

    <div class="form-group">
        <label for="nombre_cliente">Nombre </label>
        <input type="text" name="nombre_cliente" class="form-control" id="nombre_cliente" >
    </div>

    <div class="form-group">
        <label for="apellido_cliente">Apellido </label>
        <input type="text" name="apellido_cliente" class="form-control" id="apellido_cliente" >
    </div>

    <div class="form-group">
        <label for="cedula">cedula </label>
        <input type="text" name="cedula" class="form-control" id="cedula">
    </div>

    <div class="form-group">
        <label for="direccion">Direccion </label>
        <input type="text" name="direccion" class="form-control" id="direccion">
    </div>
    <div class="form-group">
        <label for="telefono">Telefono</label>
        <input type="text" name="telefono" class="form-control" id="telefono">
    </div>
		<div class="col-12">
			<label for="demo-category">Ciudad</label>
			<select name="nombre_ciudad" id="nombre_ciudad">
				<option value="">-</option>
				<option value="Bogota">Bogota</option>
				<option value="Medellin">Medellin</option>
				<option value="Cali">Cali</option>
					<option value="Cartagena">Cartagena</option>
						<option value="Bucaramanga">Bucaramanga</option>
							<option value="Cucuta">Cucuta</option>
								<option value="Pasto">Pasto</option>
							</select>
								  </div>

    <div class="form-group">
        <label for="departamento">Departamento </label>
        <input type="text" name="departamento" class="form-control" id="departamento">
    </div>

		<div class="col-12">
			<label for="demo-category">Metodo de pago</label>
			<select name="metodo_pago" id="metodo_pago">
				<option value="">-</option>
				<option value="TARJETA DE CREDITO">Tarjeta de credito</option>
				<option value="PSE">Transaccion(pse)</option>
				<option value="PIN CODE">Pin Code</option>

			</select>
		</div>









    <div class="form-group">
        <label for="email">Email </label>
        <input type="text" name="email" class="form-control" id="email" >
    </div>

		<br>



		<input type="submit" value="Consultar" class="button small" name="btn_consultar">
		<input type="submit" value="Nuevo" class="button small" name="btn_nuevo">
		<input type="submit" value="Actualizar" class="button small" name="btn_actualizar">
		<input type="submit" value="Eliminar" class="button small" name="btn_eliminar">



		<?php
	include("conexion.php");

		$refe    ="";
		$nomb   ="";
		$apell  ="";
		$dire  ="";
		$tele  ="";
		$ciud  ="";
		$depa  ="";
		$email  ="";
		$prod  ="";
    $usua  ="";
    $pago  ="";
    $cedu  ="";



		if(isset($_POST['btn_consultar']))
		{
			$refe  = $_POST['referencia_producto'];
			$exit=0;
			 if ($refe =="")
			 {
				 echo '<div class= "alert alert-success">Se requiere el número de referencia_producto</div>';
			 }
				 else
				 {
					 $ver = $myPDO -> query ("SELECT * FROM carrito  WHERE referencia_producto = '$refe'");
						 WHILE ($row =$ver ->fetch())
						 {
								 echo $row['referencia_producto'].'<br>';
								 echo $row['nombre_cliente'].'<br>';
								 echo $row['apellido_cliente'].'<br>';
								 echo $row['direccion'].'<br>';
								 echo $row['nombre_ciudad'].'<br>';
								 echo $row['departamento'].'<br>';
								 echo $row['email'].'<br>';
								 echo $row['telefono'].'<br>';
								 echo $row['usuario'].'<br>';
                 echo $row['cedula'].'<br>';
                 echo $row['metodo_pago'].'<br>';
                 echo $row['nombre_producto'].'<br>';



								 $exit++;
				 }
				 if ($exit==0)
				 {
					 echo '<div class= "alert alert-success">La referencia_producto del producto no existe en la tabla</div>';
				 }
			}
		}

		if(isset($_POST['btn_nuevo']))
		{
			$refe  = $_POST['referencia_producto'];
			$nomb = $_POST ['nombre_cliente'];
			$apell = $_POST ['apellido_cliente'];
			$tele= $_POST ['telefono'];
			$dire= $_POST ['direccion'];
			$ciud= $_POST ['nombre_ciudad'];
			$depa= $_POST ['departamento'];
			$email= $_POST ['email'];
			$usua= $_POST ['usuario'];
      $cedu= $_POST ['cedula'];
      $pago= $_POST ['metodo_pago'];
     $prod= $_POST ['nombre_producto'];


			 if ($refe =="" || $nomb ==""  || $usua =="")
			 {
				 echo '<div class= "alert alert-success">Los campos: referencia_producto,
				 nombre, usuario son obligatorios</div>';
			 }
				 else
				 {
				 $sql_insert = "INSERT INTO carrito (referencia_producto,nombre_cliente,apellido_cliente,direccion,telefono,nombre_ciudad,departamento,email,usuario,cedula,metodo_pago,nombre_producto)
					VALUES ('$refe','$nomb','$apell','$dire','$tele','$ciud','$depa','$email','$usua','$cedu','$pago','$prod')";
				 $myPDO -> query($sql_insert);
				 }

		}

		if(isset($_POST['btn_actualizar']))
		{
			$refe  = $_POST['referencia_producto'];
			$nomb = $_POST ['nombre_cliente'];
			$apell = $_POST ['apellido_cliente'];
			$tele= $_POST ['telefono'];
				$dire= $_POST ['direccion'];
					$ciud= $_POST ['nombre_ciudad'];
						$depa= $_POST ['departamento'];
							$email= $_POST ['email'];
								$usua= $_POST ['usuario'];
                	$cedu= $_POST ['cedula'];
                  	$pago= $_POST ['metodo_pago'];
                    	$prod= $_POST ['nombre_producto'];


			 if ($refe =="" || $nomb ==""  || $usua =="")
			 {
				 echo '<div class= "alert alert-success">Los campos: referencia_producto,
				 nombre, usuario son obligatorios</div>';
			 }
				 else
				 {
					 $exit=0;
					 $ver = $myPDO -> query ("SELECT * FROM carrito  WHERE referencia_producto = '$refe'");
						 WHILE ($row =$ver ->fetch())
						 {
								 $exit++;
					 }
					 if ($exit==0)
					 {
					 echo '<div class= "alert alert-success">La referencia_producto del producto no existe en la tabla</div>';
					 }
						else
						{
							$sql_update = "UPDATE carrito SET
														 referencia_producto='$refe',
														 nombre_cliente ='$nomb',
														 apellido_cliente='$apell',
														 telefono='$tele',
															Direccion='$dire',
															 nombre_ciudad='$ciud',
																Departamento='$depa',
																 email='$email',
																	usuario='$usua',
                                  cedula='$cedu',
                                  metodo_pago='$pago',
                                  nombre_producto='$prod',
														 WHERE referencia_producto='$refe'";
							$myPDO -> query($sql_update);

							echo '<div class= "alert alert-success">Actualizacion relizada</div>';
						}
				 }

		}

		if(isset($_POST['btn_eliminar']))
		{
			$refe  = $_POST['referencia_producto'];
			$exit=0;
			 if ($refe =="")
			 {
				 echo '<div class= "alert alert-success">Se requiere el número de referencia_producto</div>';
			 }
				 else
				 {
					 $ver = $myPDO -> query ("SELECT * FROM carrito  WHERE referencia_producto = '$refe'");
						 WHILE ($row =$ver ->fetch())
						 {
								 $exit++;
				 }
				 if ($exit==0)
				 {
					 echo '<div class= "alert alert-success">La referencia_producto del producto no existe en la tabla</div>';
				 }
				 else
				 {
					 $sql = "DELETE FROM carrito WHERE referencia_producto='$refe'";
					 $myPDO ->query($sql);
					 echo '<div class= "alert alert-success">El registro de elimino</div>';



				 }
				 $sql_s=mysql_query("SELECT *from metodo_pago ORDER BY id ");
				 while ($row_s=mysql_fetch_array($sql_s)){
				 $id=$row_s['id'];
				 $transferencia=$row_s['transferencia'];
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
