
<?php
include 'conexion.php';
$ver=$myPDO->query("SELECT *FROM producto")
?>
<html lang="e" dir="lrt">
<head>
  <title>PRODUCTOS </title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <link rel="stylesheet" href="assets/css/main.css" />
  <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
  <script src="https://kit.fontawesome.com/0f71a9d38d.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="2container">
    <a href="index.php"><i class="fas fa-home fa-x"></i></button> </a>

    <center><h2> LISTA DE PRECIOS</h2></center>
    <br><br>
    <div class="table-wrapper">
<table class="alt">
  <thead>
  <tr>
        <th>Referencia</th>
          <th>producto</th>
            <th>stock</th>
              <th>Precio COP</th>
            </tr>
            </thead>

<?php
WHILE ($row=$ver->fetCh()){
echo '<td>'.$row['referencia_producto_ven'].'</td>';
echo '<td>'.$row['nombre_producto'].'</td>';
echo '<td>'.$row['stock'].'</td>';
echo '<td>'.$row['precio'].'</td>';
echo '<td> <a href="eliminar.php?cedula='.$row['referencia_producto_ven'].'"><i class="fas fa-trash-alt"></i></a></td>';
echo '</tr>';
}


 ?>

            </table>

</div>
  </body>
</html
