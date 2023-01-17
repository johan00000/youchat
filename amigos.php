<?php

session_start();
ob_start();
$name = $_SESSION['id'];
include('cnx.php');
$i = 1;

$cxn->query("SET NAMES 'utf8'");
$rs = $cxn->query("CALL xamigos('$name');");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/amigos.css">
    <link rel="shortcut icon" href="./img/logo.png">
    <title>personas</title>

</head>
<body>
    <header>

    </header>
    <main>
        <div class="divForm">
     
          <?php while($row = mysqli_fetch_array($rs)):?>
            <form class="formAmigos" action="./mensaje.php" method="POST">
                
                    <h1 class="nombrePersonas"><?= $row["nombre"]?></h1>
                    <img src="./img/portada.jpg" alt="" id="imagenUsuario">

                    <input id="noseve"  type="text" name="amigo" value="<?= $row["id"] ?>">
                    <button class="hablar" type="submit"> hablar</button>
                     
                
            
            </form>
            <?php endwhile;?>

          </div>
    </main>

</body>
</html>
<?PHP 
            while ($row = mysqli_fetch_array($rs))
            {
                echo '
            <form action="./mensaje.php" method="POST">
            <label class"nombrePersonas"' . "$i" . '">' . $row["nombre"]. '</label>
        
            <input id="noseve" type="text" name="amigo" value="'.$row["id"].'"> 
                <button type="submit"> chatear</button>
            </form>
                '
                ;
                $i++;
              }
            ?>