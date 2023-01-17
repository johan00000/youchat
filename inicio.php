<?php
session_start();
ob_start();
$name = $_SESSION['name'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/inicio.css">
    <link rel="shortcut icon" href="./img/logo.png">
    <title>perfil</title>
</head>
<body>
    <header>
        <h1 class="perfil">BIENVENIDO <?=  $name; ?></h1>
        
    <div>


    </div>

    </header>
    <main>
        <div id="modulos">
        <form action="amigos.php">
        <button class="botonChat">
            PERSONAS
        </button>
        </form>
        <form action="amigos.php">
        <button class="botonChat">
            POST
        </button>
        </form>
        <form action="amigos.php">
        <button class="botonChat">
            CHATS
        </button>
        </form>
        </div>
    </main>
</body>
</html>
