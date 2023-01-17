<?php
include("./cnx.php");
$cxn->query("SET NAMES 'utf8'");
$mensaje = 'hola que tal';
$envia =$_POST['envia'];
$recive = $_POST['recibe'];
$rs = $cxn->query("CALL xleer('$envia','$recive');");
$id=["recibe","envia"];

while($consulta = mysqli_fetch_array($rs))
{
    $consulta["usua_id"];
    if($envia!=$consulta["usua_id"]){


        echo '<span class="'. $id[0].'">'.$consulta["Mens_Mensaje"].'</span>';
      //  echo "<span class=" . $id = [1] . ">" . $consulta["Mens_Mensaje"] . "</span>";  
    }
    else{
        echo '<span class="'. $id[1].'">'.$consulta["Mens_Mensaje"].'</span>';

    }
    //echo "<span class="..$id=[0].">".$consulta["Mens_Mensaje"]."</span>";
}
?>
