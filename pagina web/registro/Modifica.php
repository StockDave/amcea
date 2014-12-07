<?php
	require_once('conexion.php');
	mysql_select_db($database_conexion, $conexion);
	session_start();

	if (!isset($_SESSION["recupera"])) {
		header("Location: index.php");
	}

	$recUsuario = $_SESSION["recupera"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
body {
	background-image: url();
	background-color: #FFFFCC;
}
.Estilo1 {
	color: #006600;
	font-size: 36px;
	font-family: Algerian;
}
.Estilo6 {color: #006600}
.style2 {color: #0000FF; font-size: 36px; font-family: Algerian; }
.style3 {color: #0000FF}
-->
</style></head>

<body>
<?php

if(isset ($_POST['Actualizar']))
{
if($dbc = @mysql_connect (DB_HOST, DB_USER))
{
if (!@mysql_select_db('aplicacion_movil'))
{ 
die('<p> NO EXISTE CONECCION CON LA BASE DE DATOS:<b>'.mysl_error() . 
'</b></p>');
}
}
else
{
die('<p> NO SE PUDO CONECTAR CON MYSQL:<b>'.mysql_error() . '</b></p>');
}
//****************se crea la coneccion a la base de datos***********
$que2 = "update registroalumnos set nombre ='{$_POST['nombre']}', apellidos='{$_POST['apellidos']}', carrera='{$_POST['carrera']}', cuatrimestre='{$_POST['cuatrimestre']}', email='{$_POST['email']}', celular='{$_POST['celular']}',password='{$_POST['password']}' where matricula='{$_POST['matricula']}'";
if(@mysql_query($que2))
{
print '<p> Registro eliminado.</p>';
}
else
{
print '<p>NO SE PUDO ELIMINAR LOS DATOS: <b>'.mysql_error().'</b> LA 
CONSULTA FUE $query.</p>';
}
mysql_close();
}
?>
<?php

if(isset ($_POST['Borrar']))
{
if($dbc = @mysql_connect (DB_HOST, DB_USER))
{
if (!@mysql_select_db('aplicacion_movil'))
{ 
die('<p> NO EXISTE CONECCION CON LA BASE DE DATOS:<b>'.mysl_error() . 
'</b></p>');
}
}
else
{
die('<p> NO SE PUDO CONECTAR CON MYSQL:<b>'.mysql_error() . '</b></p>');
}
//****************se crea la coneccion a la base de datos***********
$que = "delete from registroalumnos where matricula ='{$_POST['matricula']}'";
if(@mysql_query($que))
{
print '<p> Registro eliminado.</p>';
}
else
{
print '<p>NO SE PUDO ELIMINAR LOS DATOS: <b>'.mysql_error().'</b> LA 
CONSULTA FUE $query.</p>';
}
mysql_close();
}
?>
<div align="center"><span class="style2">Actualizar Registro.</span></div>

<div align="center">
  <form id="form9" name="form9" method="post" action="">
    <table width="200" border="1" bordercolor="#FFFFCC">
      <tr>
        <th scope="row"><span class="style3">Matricula:</span></th>
        <td><span class="Estilo6">
          <label>
          <input type="int" name="matricula" />
          </label>
        </span> </td>
      </tr>
      <tr>
        <th scope="row"><span class="style3">Nombre:</span></th>
        <td><span class="Estilo6">
          <label>
          <input type="text" name="nombre" />
          </label>
        </span> </td>
      </tr>
      <tr>
        <th scope="row"><span class="style3">Apellidos:</span></th>
        <td><span class="Estilo6">
          <label>
          <input type="text" name="apellidos" />
          </label>
        </span> </td>
      </tr>
      <tr>
        <th scope="row"><span class="style3">Carrera:</span></th>
        <td><span class="Estilo6">
          <label>
          <select name="carrera">
            <option selected="selected">Seleciones una opcion</option>
            <option>Ing. Sistemas Computacionales</option>
            <option>Ing. Finaciera</option>
            <option>Ing. Agroindustrial</option>
            <option>Ing. Agrotecnologia</option>
            <option>Ing. Civil</option>
            <option>Ing. Dise&ntilde;o Industrial</option>
          </select>
          </label>
        </span></td>
      </tr>
      <tr>
        <th scope="row"><span class="style3">Cuatrimestre:</span></th>
        <td><span class="Estilo6">
          <label>
          <select name="cuatrimestre">
            <option selected="selected">Seleccione una opcion</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
          </select>
          </label>
        </span> </td>
      </tr>
      <tr>
        <th scope="row"><span class="style3">Email:</span></th>
        <td><span class="Estilo6">
          <label>
          <input type="text" name="email" />
          </label>
        </span> </td>
      </tr>
      <tr>
        <th scope="row"><span class="style3">Celular:</span></th>
        <td><span class="Estilo6">
          <label>
          <input type="text" name="celular" />
          </label>
        </span> </td>
      </tr>
      <tr>
        <th scope="row"><span class="style3">Password:</span></th>
        <td><span class="Estilo6">
          <label>
          <input type="text" name="password" />
          </label>
        </span> </td>
      </tr>
    </table>
    <p>&nbsp;</p>
    
    <input type="submit" name="Actualizar" value="Actualizar" />
    <input type="submit" name="Borrar" value="Borrar" />
  </form>
</div>
</body>
</html>
