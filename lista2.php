<html lan="en">
<head>
	<meta charset="UTF-8">
</head>
<body>
	<select name="" id="">
<?php
require("conexion.php");
$con=conectar();
$myPDO="SELECT id, transferencia from metodo_pago";
$stmt =$con->prepare($myPDO);
$result=$stmt->execute();
$rows=$stmt->fetchALL(\PDO::FETCH_OBJ);
foreach ($rows as $row){
?>
<option value="<?php print($row->codigo); ?>"><?php print($row->id);?></option>
<?php	// code...
}

?>
</select>
</body>
</html>
