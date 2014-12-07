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
<title>UPFIM movil</title>
<style type="text/css">
<!--
.Estilo1 {
	font-size: 24px;
	color: #FFFFFF;
}
body {
	background-image: url();
	background-color: #FFFFFF;
}
.Estilo5 {font-size: 24px; color: #000000; }
.Estilo6 {
	color: #006600;
	font-size: 36px;
	font-family: Algerian;
}
.Estilo7 {color: #006600}
.style1 {color: #0000FF}
-->
</style>
</head>




<body>

<p align="center" class="Estilo5 Estilo6 style1">Registro alumnos</p>
<form action="registroalumnos.php" method="POST">
<div align="center">
  <table width="200" border="1" align="center" bordercolor="#FFFFCC">
    <tr>
      <th scope="row"><span class="style1">Matricula : </span></th>
      <td>
        <div align="left">
          <p>
            <input type="int" name="matricula" />
          </p>
        </div></td>
    </tr>
    <tr>
      <th scope="row"><span class="style1">Nombre : </span></th>
      <td>
        <div align="left">
          <p>
            <input type="text" size="30" name="nombre" />
          </p>
        </div></td>
    </tr>
    <tr>
      <th scope="row"><span class="style1">
        <label>Apellidos : </label>
      </span></th>
      <td><p>
        <input type="text" size="50" name="apellidos" />
      </p>      </td>
    </tr>
    <tr>
      <th scope="row"><span class="style1">
        <label>Carrera: </label>
      </span></th>
      <td><p>
        <select name="carrera">
          <option selected="selected">Seleciones una opcion</option>
          <option>Ing. Sistemas Computacionales</option>
          <option>Ing. Finaciera</option>
          <option>Ing. Agroindustrial</option>
          <option>Ing. Agrotecnologia</option>
          <option>Ing. Civil</option>
          <option>Ing. Dise&ntilde;o Industrial</option>
	  <option>Ing. Energia</option>
        </select>
      </p>      </td>
    </tr>
    <tr>
      <th scope="row"><span class="style1">
        <label>Cuatrimestre: </label>
      </span></th>
      <td><select name="cuatrimestre" >
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
		<option>10</option>
      </select></td>
    </tr>
    <tr>
      <th scope="row"><span class="style1">
        <label>Email: </label>
      </span></th>
      <td><p>
        <input type="email" size="40" name="email" />
      </p>      </td>
    </tr>
    <tr>
      <th scope="row"><span class="style1">
        <label>Celular: </label>
      </span></th>
      <td><p>
        <input type="int" name="celular" />
      </p>      </td>
    </tr>
    <tr>
      <th colspan="2" scope="row"><span class="style1">El password sera para uso exclusivo de la aplicaci&oacute;n m&oacute;vil.</span></th>
    </tr>
    <tr>
      <th scope="row"><span class="style1">
        <label>Password: </label>
      </span></th>
      <td><p>
        <input type="text" name="password" />
      </p>      </td>
    </tr>
    <tr>
      <th scope="row"><span class="Estilo7">Saldo:</span></th>
      <td><label>
        <input type="text" name="saldo" />
      </label></td>
    </tr>
  </table>
  <p><span class="Estilo1">
    <input type="submit" name="Guardar" value="Guardar" />
  </span></p>
</div>
<p align="center" class="Estilo1">&nbsp;</p>
<p>
 
</p>
<p>&nbsp;</p>
</form>
</body>
</html>
<?PHP
define ('DB_HOST', 'localhost');
define ('DB_USER', 'root');

if(isset ($_POST['Guardar']))
{
if($dbc = @mysql_connect (DB_HOST, DB_USER))
{
if (!@mysql_select_db('aplicacion_movil'))
{ 
die('<p> NO EXISTE CONECCION CON LA BASE DE DATOS:<b>'.mysql_error() . 
'</b></p>');
}
}
else
{
die('<p> NO SE PUDO CONECTAR CON MYSQL:<b>'.mysql_error() . '</b></p>');
}
//****************se crea la coneccion a la base de datos***********
$query2 = "insert into 
registroalumnos(matricula,nombre,apellidos,carrera,cuatrimestre,email,celular,password,saldo) 
values('{$_POST['matricula']}','{$_POST['nombre']}','{$_POST['apellidos']}','{$_POST['carrera']}','{$_POST['cuatrimestre']}','{$_POST['email']}','{$_POST['celular']}','{$_POST['password']}','{$_POST['saldo']}')";
if(@mysql_query($query2))
{
print '<p> Datos Guardados.</p>';
}
else
{
print '<p>NO SE PUDO ALMACENAR LOS DATOS.</p>';
}
}
?>
