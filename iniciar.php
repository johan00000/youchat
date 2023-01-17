
<?php
include('cnx.php');
$cxn->query("SET NAMES 'utf8'");
session_start();
ob_start();

$usuario = $_POST['nombre'];
$contraseña = $_POST['contraseña'];


$rs = $cxn->query("CALL xiniciar('$usuario','$contraseña');");
$row = mysqli_fetch_array($rs);
echo "$usuario<br>";
echo "$contraseña";
session_start();
ob_start();
$_SESSION['name']=$row[0];
$_SESSION['id'] = $usuario;
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
    <form action="inicio.php" method="POST">
        <input type="text" name="nombre" id="nombre" value="stiven")>
    </form>
</body>
</html>

<?php

if($row[0]!="INCORRECTO")
{
    header("Status: 301 Moved Permanently");
    header("Location: inicio.php");
exit;
} else {
    header("Status: 301 Moved Permanently");
    header("Location: index.php");
}
?>

