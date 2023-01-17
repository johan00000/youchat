<?php 
$cxn = new mysqli("127.0.0.1", "root", "admin", "reji");
if ($cxn->connect_errno) {echo "Fallo al contenctar a la Base de Datos:";}
return $cxn;?>