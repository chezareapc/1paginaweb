<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="stylesheet.css"/>
<title>Modificación de Datos de mascotas</title>
</head>
<body  style="background-color: #81BEF7">

<?php include 'menu.html'; include 'conexion.php'; ?>

 <div style="height:100px">&nbsp;</div>

 <table width="1000px" border="1" align="center"  id="tabla_modificar">
 <tr>
 <th>ID Mascota</th>
 <th>Nombre de la mascota</th>
 <th>Tipo de Mascota</th>
 <th>Raza</th>
 <th>Sexo</th>
 <th>Nombre del Dueño</th>
 <th>Fecha de Nacimiento</th>
 </tr>

 <?php
 $sql="SELECT * FROM mascotas";
 $result=mysqli_query($link,$sql);
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
   <td><a href="modificar2.php?modi=<?php print $ver[0]; ?>">Modificar</a></td>
   <td><a href="eliminar.php?eli=  <?php print $ver[0]; ?>">Eliminar</a></td>
 </tr>  <?php } ?>
    </table>
  </body>
</html>
