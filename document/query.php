<?php
session_start();
include('cnx.php');
$cxn->query("SET NAMES 'utf8'");
$usuario = $_POST['texto'];
$contraseña = $_POST['contraseña'];

$rs = $cxn->query("insert into usuarios(usuario,contraseña) value('$usuario','$contraseña')");
$cxn->next_result();
echo "$usuario <br>";
echo "$contraseña";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>