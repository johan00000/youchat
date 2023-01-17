<?php

include('cnx.php');
$cxn->query("SET NAMES 'utf8'");

$mensaje = $_POST['mensaje'];
$envia = $_POST['enviar'];
$recive = $_POST['recivir'];


$rs = $cxn->query("CALL xenviar('$mensaje','$envia','$recive');");
?>
   <form action="mensaje.php" method="POST">
        <label for="mensaje">
            <input type="text" name="amigo" id="enviar" value="<?php echo$recive?>">


        </label>
    </form>

<?php

?>