<?php

include('cnx.php');
$cxn->query("SET NAMES 'utf8'");

$mensaje = $_POST['mensaje'];
$envia = $_POST['envia'];
$recive = $_POST['recibe'];


$rs = $cxn->query("CALL xenviar('$mensaje','$envia','$recive');");
?>