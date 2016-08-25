<?php
include ('conexion.php');

$sql="insert into mascotas values(
'$_POST[idmascota]',
'$_POST[nombremascota]',
'$_POST[tipodemascota]',
'$_POST[raza]',
'$_POST[sexo]',
'$_POST[nombredueno]',
'$_POST[fechanac]')";

$result=mysqli_query($link,$sql);

if (!mysql_error()) {
?>
        <script>
          alert("¡Se registro con exito!");
        </script>
<?php } else {?>
        <script>
          alert("!No se registro (Problema Técnico)¡");
        </script>
<?php } ?>

<meta http-equiv="refresh" content="0;URL=insertar.php">
