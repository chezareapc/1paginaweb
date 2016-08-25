<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Consulta de Mascotas</title>
    <link rel="stylesheet" href="stylesheet.css"/>
  </head>
  <body  style="background-color: #81BEF7"  >


<?php
include ("menu.html");
include ("conexion.php");
 ?>
 <div style="height:100px">&nbsp;</div>
 <!-- 2.- Según lo estudiado en el curso, debe crear una tabla llamada mascota,
  la cual tendrá los siguiente atributos: id_mascota, nombre de la mascota,
   tipo de mascota(perro, gato, ave), raza, sexo, nombre del dueño, fecha de nacimiento.

Después de crear la tabla debe realizar el proceso de todas las operaciones básicas a la base de datos
(insertar, consultar, modificar, buscar, eliminar), y enviar todos los script y el archivo .sql
con la creación de la base de datos  -->
 <table border="1" id="tabla_reporte" align="center" width="800px">
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
$sql="select * from mascotas";
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
</tr> <?php } ?>




 </table>
</body>
</html>
