
<?php
include 'conexion.php';
$ver=$myPDO->query("SELECT *FROM cliente")
?>
<html lang="e" dir="lrt">
<head>
  <title>cLIENTES </title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <link rel="stylesheet" href="assets/css/main.css" />
  <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
  <script src="https://kit.fontawesome.com/0f71a9d38d.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="2container">
    <a href="index.php"><i class="fas fa-home fa-x"></i></button> </a>	<h1><a href="generic.PHP">VOLVER A CONTACTO</a></h1>

    <center><h2> LISTA DE CLIENTES</h2></center>
    <br><br>
    <div class="table-wrapper">
<table class="alt">
	<thead>
	<tr>


        <th>Cedula</th>
          <th>Nombre</th>
            <th>Apellido</th>
              <th>Direccion</th>
                <th>Telefono</th>
                  <th>Ciudad</th>
                  <th>Departamento</th>
                  <th>Email</th>
                  <th>Uuario</th>

              </tr>
              </thead>

<?php
WHILE ($row=$ver->fetCh()){
echo '<td>'.$row['cedula'].'</td>';
echo '<td>'.$row['nombre_cliente'].'</td>';
echo '<td>'.$row['apellido_cliente'].'</td>';
echo '<td>'.$row['direccion'].'</td>';
echo '<td>'.$row['telefono'].'</td>';
echo '<td>'.$row['nombre_ciudad'].'</td>';
echo '<td>'.$row['departamento'].'</td>';
echo '<td>'.$row['email'].'</td>';
echo '<td>'.$row['nombre_usuario'].'</td>';

echo '<td> <a href="eliminar.php?cedula='.$row['cedula'].'"><i class="fas fa-trash-alt"></i></a></td>';
echo '</tr>';
}

 ?>

            </table>

</div>
  </body>
</html>
