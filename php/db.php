<?php
date_default_timezone_set("America/Monterrey");

# DATOS DE CONEXION AL A BASE DE DATOS
$servidorMysql = "localhost";
$usuarioMysql  = "root";
$passwordMysql = "";
$basededatos   = "nldgobmx_invest";

######################################

mysql_connect($servidorMysql, $usuarioMysql, $passwordMysql) or die(mysql_Error());
mysql_select_db($basededatos) or die(mysql_error());

$clave     = "Cu1tur4";
$fecha  = date("Y-m-d");
$hora   = date("H:i:s");

$app = "/CMS-Invest/";
$carpeta_galeria = "img/galeria/";
$carpeta_noticias = "img/noticias/";
?>
