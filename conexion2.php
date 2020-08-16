<?php

/*
 * Código de conexión a una base de datos mediante sintaxis de mysqli
 */
include 'config.php';

$conexion = new mysqli($server,$username,$password,$database_name);

if ( $conexion->connect_error )
{
    die('Error de Conexión'. $conexion->connect_error);
}
else
{
    //echo 'Conexion OK';
}
