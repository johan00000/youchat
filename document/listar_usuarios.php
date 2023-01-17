<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ver usuarios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<thead>
  <table class="tabla">
    <th >user</th>
    <th>password</th>
  </table>

</thead>


</body>
</html>
<?php
session_start();
include('cnx.php');
$cxn->query("SET NAMES 'utf8'");
$rs = $cxn->query("select usuario as user,contraseña as password from reji.usuarios");

while ($row = mysqli_fetch_array($rs)) {
    echo '
    <table class="tabla">
    <th class="atributos" >' . $row["user"] . '</th>
    <th>' . $row["password"] . '</th>
  </table>';
  }



?>  