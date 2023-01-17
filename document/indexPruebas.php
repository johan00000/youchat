<?php
use function CommonMark\Render\HTML;
echo "me llamo michael";
//para escribir codigo php lo escribimos tn estas etiquetas que dicen php.
echo "el echo es el print";
// para declarar constantes se utiliza la palabra define y enter parentecis el nombre mas el valor de la constante
define('saludo', 'hola mundo');
// las variables se declaran con 
$saludar ="hola mundo como estas";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
<table class="table table-bordered table-striped" style="width: 100%;">
      <thead>
        <tr>
          <th style="color: aqua;"><?php echo saludo?></th>
          <th class="sobre"><?php  echo $saludar?></th>
          <th>tipo</th>
          <th>diametro</th>
          <th>instalacion</th>
        </tr>
      </thead>
</table>
      <h1><?php echo "mi sistema operativo es ".PHP_OS?></h1>
      <h1><?php echo "mi vercion de php es ".PHP_VERSION?></h1>
      <h1><?php echo "mi vercion de php es ".__LINE__?></h1>
      <h1><?php echo "mi vercion de php es ".__file__?></h1>
    </body>
</html>