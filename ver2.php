
<?php
include 'conexion.php';
$ver=$myPDO->query("SELECT *FROM proveedor")
?>
<html lang="e" dir="lrt">
<head>
  <title> PROVEEDORES</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <link rel="stylesheet" href="assets/css/main.css" />
  <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
  <script src="https://kit.fontawesome.com/0f71a9d38d.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="2container">
    <a href="index.php"><i class="fas fa-home fa-x"></i></button> </a>

    <center><h2> LISTA DE PROVEEDORES</h2></center>
    <br><br>
    <div class="table-wrapper">
<table class="alt">
  <thead>
  <tr>
        <th>Codigo</th>
          <th>Nombre</th>
            <th>Ciudad</th>
              <th>Pais</th>
                <th>Telefono</th>
                  <th>Direccion</th>
                  <th>Email</th>

                </tr>
                </thead>

<?php
WHILE ($row=$ver->fetCh()){
echo '<td>'.$row['codigo_proveedor'].'</td>';
echo '<td>'.$row['nombre_proveedor'].'</td>';
echo '<td>'.$row['ciudad_proveedor'].'</td>';
echo '<td>'.$row['pais_proveedor'].'</td>';
echo '<td>'.$row['telefono_proveedor'].'</td>';
echo '<td>'.$row['direccion_proveedor'].'</td>';
echo '<td>'.$row['email_proveedor'].'</td>';

echo '<td> <a href="eliminar.php?cedula='.$row['codigo_proveedor'].'"><i class="fas fa-trash-alt"></i></a></td>';
echo '</tr>';
}

 ?>

            </table>

</div>
  </body>
</html
