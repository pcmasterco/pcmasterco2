<?php
$dbHost='localhost';
$dbName='pcmaster';
$dbUser='postgres';
$dbPass='Pipo802701';


try {
$myPDO = new PDO("pgsql:host=$dbHost;dbname=$dbName",$dbUser,$dbPass);

} catch (PDOException $e) {
  echo $e -> getMessage();
}

?>
