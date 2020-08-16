







<head>
<meta charset="utf-8">
<title> Lista </title>
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
    <p>seleccion</p>
    <select class="form-control" id="select_usuario">
    <option value"">seleccione</option>



        <header id="header">
          <a href="index.php"><i class="fas fa-home fa-x"></i></button> </a>	<h1><a href="index.html">Productos</a></h1>

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
								<li><a href="elements.html">Elements</a></li>
								<li><a href="lista.php">Lista de productos</a></li>
								<li><a href="#">Sign Up</a></li>
							</ul>
							<a href="#" class="close">Close</a>
						</div>
					</nav>
          <section id="banner">
            <div class="inner">
              <div class="form-group">

            </div>
              <?php
                include("conexion.php");
              $sql_s=mysql_query("SELECT *from ciudad ");
              while ($row_s=mysql_fetch_array($sql_s)){
              $id=$row_s['codigo_ciudad'];
              $transferencia=$row_s['nombre_ciudad'];
              ?>


              <option value="<?php echo $id;?>"> <?php echo $transferencia?></option>
            <?php }

             ?>

            </div>
          </section>










    </ul>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>
  </body>
</html>
