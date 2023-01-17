<?php 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/login.css">
    <link rel="stylesheet" media="(max-width: 800px)" href="./styles/stylemovil.css" />
    <link rel="shortcut icon" href="./img/logo.png">
    <title>Iniciar</title>
</head>
<body>
    <main class="bodyMain">
        <div class="divFormulario">
        <form action="iniciar.php" method="POST" class="formulario">
            <h1 class="titulo">Iniciar sesión</h1>
            <img src="./img/logo.png" alt="" id="logoImagen">
            <section id="iniciarNombre">
                <label for="name" class="sesioniniciar" id="nombre">
                    <input type="text" name="nombre" id="name" class="input" placeholder="User">
                </label>
                <input type="button" value="Continuar" onclick="sigientes();" id="continuar" class="botones">
            </section>
            <section id="iniciarContraseña">
                <label for="password" class="sesioniniciar" id="contraseña">
                    <input type="password" name="contraseña" id="sigiente" class="input" placeholder="pass">
                </label>
                <button type="submit" id="iniciarSecion" class="botones"> Iniciar Sesion</button>
            </section>
        </form>
        </div>
    </main>
    <script src="./login.js"></script>
</body>
</html>


