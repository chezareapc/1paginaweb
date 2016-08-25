<?php include "conexion.php";

$sql="UPDATE mascotas SET
 nombremascota='$_POST[nombremascota]',
tipodemascota='$_POST[tipodemascota]',
           raza='$_POST[raza]',
           sexo='$_POST[sexo]',
   nombredueno='$_POST[nombredueno]',
      fechanac='$_POST[fechanac]' where idmascota='$_POST[oculto]'";



//print mysql_error();
$result=mysqli_query($link,$sql);

if (!mysql_error()) {
?>

        <script>
          alert("¡Se Modifico con exito!");
        </script>
<?php } else {?>
        <script>
          alert("!No se Modifico (Problema Técnico)¡");
        </script>
<?php } ?>

<meta http-equiv="refresh" content="0;URL=modificar.php">
