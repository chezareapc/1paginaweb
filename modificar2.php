<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta charset="utf-8">
<title>modificar2.php</title>
<link type="text/css" rel="stylesheet" href="stylesheet.css" />
</head>
<body>
<?php
include("conexion.php");
$sql="SELECT * FROM mascotas where idmascota='$_GET[modi]'";
$result = mysqli_query($link, $sql);
$ver=mysqli_fetch_array($result);
?>

<div style="height:100px">&nbsp;</div>

<form id="formulario1" method="post" action="modificar3.php">
<table border="1"; align="center" style="margin: 0 auto">
    <th colspan="2"><strong>Modificación de Mascota</strong></th>

    <tr><td><label for="textfield1"> Nombre de la Mascota:</label></td>
        <td> <input type="text" name="nombremascota"  value="<?php print $ver [1]?>" />	<br></td></tr>

        <tr><td><label for="select">tipo_de_mascota:</label></td>

          <td><select name="tipodemascota">
                    <option value="<?php print $ver [2];?>">	<?php print $ver [2];?>	</option>
                                    <option value="Perro">Perro</option>
                                    <option value="Gato">Gato</option>
                                    <option value="Ave">Ave</option>

                </select></td> <!--Revisar donde cierra el label!-->

    <tr><td><label for="textfield2"> Raza:</label>
    </td><td> <input type="text" name="raza"  value="<?php print $ver [3]?>" />	<br></td></tr>

    <tr><td>
      Sexo:
    </td><td><?php if ($ver [4=='Masculino']) {?>
                      <input type="radio" name="sexo" value="Masculino" id="sexo_0" checked="Masculino"/>
          <?php } else { ?><input type="radio" name="sexo" value="Masculino" id="sexo_0" 			/>
                <?php }	?>Masculino <br>

      <?php if ($ver [4=='Femenino']) {?>
                      <input type="radio" name="sexo" value="Femenino" id="sexo_1" checked="Femenino"/>
          <?php } else{ ?><input type="radio" name="sexo" value="Femenino" id="sexo_1"				/>
                <?php }	?>Femenino</td></tr><br>

  <tr><td><label for="textfield3"> Nombre del Dueño:</label>
  </td><td> <input type="text" name="nombredueno"  value="<?php print $ver [5]?>" />	<br></td></tr>

  <tr><td><label for="textfield4"> Fecha de Nacimiento:</label>
  </td><td> <input type="text" name="fechanac"  value="<?php print $ver [6]?>" />	<br></td></tr>


    <input type="hidden" name="oculto"  id="oculto" value="<?php print $ver [0];?>"  />
        <tr><td><input type="submit"  id="registrar" value="Registrar"></td></tr>


  </table>
</form>

</body>
</html>
