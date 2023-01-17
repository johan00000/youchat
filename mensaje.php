<?php

function enviarMs($mensaje,$envia,$recive,$btn){
    if ($mensaje!="" && $envia!="" && $recive!="" && $btn=="true") {
        # code...
        include('cnx.php');
        $cxn->query("SET NAMES 'utf8'");
        return $rs= $cxn->query("CALL xenviar('$mensaje','$envia','$recive');");
    }
}
if (isset($_POST["amigo"])) {
    $amigo = $_POST["amigo"];
}
if (isset($_POST['botn'])) {
    enviarMs($_POST['mensaje'], $_POST['enviar'], $_POST['recivir'], $_POST['botn']);
    $amigo = $_POST["recivir"];
}

session_start();
ob_start();
$name = $_SESSION['id'];

include('cnx.php');
$cxn->query("SET NAMES 'utf8'");
?>
<?php

//ver mensajes
/*
$rs = $cxn->query("CALL recibir('$name','$amigo')");
while ($row = mysqli_fetch_array($rs)) {
    echo '
    <table class="tabla">
    <th class="atributos" >' . $row["mensaje"] . '</th>
  </table>';
  }
   */
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" media="(max-width: 500px)" href="./styles/mensajesMovil.css"/>
    <link rel="shortcut icon" href="./img/logo.png">
    <script src="./mensajes/js/jquery-3.4.1.min.js"></script>
    <title>chat <?= $amigo; ?></title>
</head>
<body>

    <form action="" method="POST" class="form">
        <div  class="divForm">

        <div id="mensajes">
            
        </div>
        <label for="mensaje">
            <div class="BotonesEnviar">
                <input type="text" name="mensaje" id="mensaje">
                <button type="submit" name="botn" value="true" class="boton">✔</button>
            </div>
            <div>
                <input type="text" name="enviar" id="enviar" value="<?php echo$name?>">
            </div>
                <input type="text" name="recivir" id="recivir" value="<?php echo$amigo?>">
        </label>
        </div>
    </form>
    
    <script src="./mensajes/js/index.js"></script>
</body>
</html>
