<?php
//error_reporting(E_ALL ^ E_DEPRECATED);

//variables generales
//conexion
/*
$host = "localhost";
$user = "root";
$pass = "";
$db = "fr";
*/

$host = "localhost";
$user = "w1441008_av";
$pass = "Chicha00";
$db = "w1441008_altov";

//aplicacion
$titulo = "Union";
$modulos = array("jugadores","contratos","plantilla","torneos","estadisticas");
$modulos_desc = array("Jugadores","Contratos","Plantilla","Torneos","Estadisticas");
$modulo_def = "jugadores";
 
//conexion base de datos
//$link = mysql_connect($host, $user, $pass) or die('No se pudo conectar: ' . mysql_error());
//mysql_select_db($db) or die('No se pudo seleccionar la base de datos');

?>