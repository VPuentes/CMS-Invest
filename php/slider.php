<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Authorization");

include 'db.php';

$json = array();
$sql = "SELECT idslider, ruta, activo FROM slider ORDER BY idslider DESC";
$query = mysql_query($sql);

while($q = mysql_fetch_object($query)){
    $json[] = array(
        "idslider"     => (int)$q->idslider,
        "ruta"          => $q->ruta,
        "activo"        => $q->activo
    );
}

echo json_encode($json);

?>
