<?php
if (!isset($_SESSION)) {
session_start();
} //Iniciar la Session.
$modulo = pathinfo(basename($_SERVER['SCRIPT_NAME']), PATHINFO_FILENAME);
require('mds.php');
modulo($modulo, $_SESSION['CC']); //Verifica que el Usuario tenga permiso a este módulo.
list($mdo, $cmd) = explode('_', $modulo);
$i = 0;
foreach ($_POST as $clave => $valor) {
  $datos[$i] = addslashes($valor);
  $i++;
}
unset($datos[0]);
$x = array_values($datos);
include('cnx.php');
$cxn->query("SET NAMES 'utf8'");
$rs = $cxn->query("CALL xwatermeter('R01','','$x[0]','','','','','')");
$cxn->next_result();
if (mysqli_num_rows($rs) > 0) {
  while ($row = mysqli_fetch_array($rs)) {

    $x[1] = $row['medidor'];
    $x[2] = $row['marca'];
    $x[3] = $row['tipo'];
    $x[4] = $row['diametro'];
   	$x[5] = $row['instalacion'];

  }
?>
  <form id="<?php echo $modulo; ?>-frm">
    <div class="form-label-group" style="display:flex; justify-content: space-around;">
      <input type="hidden" id="mdo" name="mdo" value="<?php echo $mdo; ?>" >
      <input type="hidden" id="x0" name="x0" value="U01">

      <input type="number" id="x1" name="Número de Contrato" class="form-control" placeholder="Número de Contrato" onKeyPress="tecla('t1', event);" value="<?php echo $x[0]; ?>"readonly style="width:50%" style="margin:50px">
      <label for="x1"><i class="fas fa-file-contract fa-lg"></i> Número de Contrato</label>
      
    <div class="form-label-group">
      <input type="text" id="x2" name="Cliente" class="form-control" placeholder="Cliente" onKeyPress="tecla('t2', event);" value="<?php echo $x[1]; ?>"readonly style="width:100%">
      <label for="x2"><i class="fas fa-weight fa-lg"></i>Serial del Medidor</label>
    </div>
    </div>

 
      
      
    <div class="form-label-group" style="display:flex; justify-content: space-around;">
      <input type="text" id="x3" name="Dirección" class="form-control" placeholder="Dirección" onKeyPress="tecla('t2', event);" value="<?php echo $x[2]; ?>"style="width:50%">
      <label for="x3"><i ></i> Marca</label>
      
     <div class="form-label-group">
      <input type="text" id="x4" name="Correo" class="form-control" placeholder="Zona" onKeyPress="tecla('t2', event);" value="<?php echo $x[3]; ?>"style="width:100%">
      <label for="x4"><i></i> Tipo</label>
    </div>
      
    </div>

      

      
      
    <div class="form-label-group">
      <input type="text" id="x5" name="diametro" class="form-control" placeholder="Zona" onKeyPress="tecla('t2', event);" value="<?php echo $x[4]; ?>" style="width:95%">
      <label for="x5"><i class="far fa-envelope fa-lg"></i> diametro</label>
    </div>
          
      
    </div>
     <div class="form-label-group" style="display:flex; justify-content: space-around;">

      <input type="date" id="x6" name="instalacion" class="form-control" placeholder="Zona" onKeyPress="tecla('t2', event);" value="<?php echo $x[5]; ?>"style="width:60%">
            <label for="x6"><i></i> FEC:Instalacion</label>
      <div>
      <label for="x7"><i class="fas fa-user-check"></i> Estado</label>
    <select id="x7" name="Estado">
  		<option value="ACTIVO"selected>ACTIVO</option>
  		<option value="INACTIVO">INACTIVO</option>
	</select>
    </div>
      
    </div>
   
 
    <div class="modal-footer justify-content-between">
      <div id="<?php echo $modulo; ?>-xmsj"></div>
        <div id="<?php echo $modulo; ?>-xmsj"></div>
      <button type="button" class="btn btn-outline-secondary" onclick="cmd('<?php echo $modulo; ?>',1,)"><i class="far fa-save fa-2x"></i></button>
    </div>
  </form>
<?php
} else { ?>
  <div class="alert alert-warning alert-dismissible">
    <i class="icon fas fa-exclamation-triangle"></i>Seleccionar un registro o digite Número de Contrato.
  </div>
  <form id="<?php echo $modulo; ?>-frm">
    <input type="hidden" id="mdo" name="mdo" value="<?php echo $mdo; ?>">
    <input type="hidden" id="x0" name="x0" value="U00">
    <input type="hidden" id="x1" name="x1" value="0">
    <div class="form-label-group">
      <input type="number" id="x2" name="medidor" class="form-control" placeholder="Número de Contrato" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');">
      <label for="x2"><i class="far fa-id-card fa-lg"></i> Número Del Medidor</label>
    </div>


    <input type="hidden" id="x3" name="x3" value="0">
    <input type="hidden" id="x4" name="x4" value="0">
    <input type="hidden" id="x5" name="x5" value="0">
    <input type="hidden" id="x6" name="x6" value="Activo">

    <div class="modal-footer justify-content-between">
      
      <div id="<?php echo $modulo; ?>-xmsj"></div>
     
      <button type="button" class="btn btn-outline-secondary" onclick="cmd('<?php echo $modulo; ?>',1,6)"><i class="far fa-save fa-2x"></i></button>
    </div>
  </form>
<?php } ?>