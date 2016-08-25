<!DOCTYPE html>
<html>
<head>
<title>Buscar Usuario</title>
</head>
<body  style="background-color: #81BEF7">

<?php
include ("menu.html");
include ("conexion.php");
?>
<div style="height:100px">&nbsp;</div>
<form method="post" name="formulario1">


<table align="center" height="60px" width="200px">
<tr>
<th style="font-family:Arial, Helvetica, sans-serif; font-weight: bold">ID Mascota</th>
<th><input type="text" name="buscar"></th>
<th><input type="submit" name="bus" value="Buscar"></th>
</tr>
</table>

<p>&nbsp;</p>
</form>

<?php  if (isset ($_POST["buscar"]) ){ ?>

  <table border="1" id="tabla_reporte" align="center">
    &nbsp;
  <tr>
  <th>ID Mascota</th>
  <th>Nombre de la mascota</th>
  <th>Tipo de Mascota</th>
  <th>Raza</th>
  <th>Sexo</th>
  <th>Nombre del Dueño</th>
  <th>Fecha de Nacimiento</th>

  </tr>
  <br>
  <?php


  $sql="SELECT * FROM mascotas where idmascota='$_POST[buscar]'";
  $result=(mysqli_query($link,$sql));
  while ($ver=mysqli_fetch_array($result)){

  ?>
  <tr>
  <td><?php print $ver[0]; ?></td>
  <td><?php print $ver[1]; ?></td>
  <td><?php print $ver[2]; ?></td>
  <td><?php print $ver[3]; ?></td>
  <td><?php print $ver[4]; ?></td>
  <td><?php print $ver[5]; ?></td>
  <td><?php print $ver[6]; ?></td>

  </tr>
  <?php } ?>
</table>
<?php } ?>

   </body>
 </html>
