<?php
include 'conexion.php';

$sql="delete from mascotas where idmascota='$_GET[eli]'";
$result=mysqli_query($link,$sql);

print mysql_error();
if (!mysql_error()){

?>
    <script >
    alert ("Se Eliminó con total normalidad");
    </script>
<?php }else{ ?>
  <script>
  alert ("Estamos en Mantenimiento Preventivo");
  </script>
<?php } ?>


<meta http-equiv="refresh" content="0;URL=modificar.php">
