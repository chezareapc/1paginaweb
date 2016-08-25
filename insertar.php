<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registrar Mascota</title>
    <link type="text/css" href="stylesheet.css" rel="stylesheet"/>
  </head>
  <body style="background-color: #81BEF7">
    <?php include ('menu.html'); ?>
    <!-- 2.- Según lo estudiado en el curso, debe crear una tabla llamada mascota,
     la cual tendrá los siguiente atributos: id_mascota, nombre de la mascota,
      tipo de mascota(perro, gato, ave), raza, sexo, nombre del dueño, fecha de nacimiento.

Después de crear la tabla debe realizar el proceso de todas las operaciones básicas a la base de datos
 (insertar, consultar, modificar, buscar, eliminar), y enviar todos los script y el archivo .sql
  con la creación de la base de datos  -->
<div style="height:100px">&nbsp;</div>

  <form id="formal" name="formal" action="insertar1.php" method="post">
  <table class="tabla_insertar" border="3px" style="margin: 0 auto" >

    <th colspan="2" style="background-color: olive">Mascota</th>
    <tr><td>ID Mascota</td>   <td><input type="text" name="idmascota" id="idmascota"></td></tr>
    <tr><td>Nombre de la Mascota</td>   <td><input type="text" name="nombremascota" id="nombremascota"></td></tr>

    <tr><td>
     <label for="SELECT">Tipo de Mascota</label>
   </td><td><select name="tipodemascota">
                             <option value="Perro">Perro</option>
                             <option value="Gato">Gato</option>
                             <option value="Ave">Ave</option></select>
   <br></td></tr>

    <tr><td>Raza</td> <td><input type="text" name="raza" id="raza"></td></tr>

    <tr><td>Sexo</td><td>
                                  <input type="radio" name="sexo" value="Masculino">Masculino<br>
                                  <input type="radio" name="sexo" value="Femenino">Femenino
                                </td></tr>

    <tr><td>Nombre del dueño</td> <td><input type="text" name="nombredueno" id="nombredueno"></td></tr>
    <tr><td>Fecha de Nacimiento(mascota)</td>   <td><input type="text" name="fechanac" id="fechanac"></td></tr>
    <tr><td><input type="reset" name="limpiar" value="Limpiar"></td>
    <td><input type="submit" name="enviar" value="Guardar"></td></tr>

  </table>
</form>
  </body>
</html>
