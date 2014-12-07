<?php require_once('conexion.php'); ?><?php
mysql_select_db($database_conexion, $conexion);
$recordID = $_GET['recordID'];
$query_DetailRS1 = "SELECT * FROM registroalumnos WHERE matricula = $recordID";
$DetailRS1 = mysql_query($query_DetailRS1, $conexion) or die(mysql_error());
$row_DetailRS1 = mysql_fetch_assoc($DetailRS1);
$totalRows_DetailRS1 = mysql_num_rows($DetailRS1);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
		
<table border="1" align="center">
  
  <tr>
    <td>matricula</td>
    <td><?php echo $row_DetailRS1['matricula']; ?> </td>
  </tr>
  <tr>
    <td>nombre</td>
    <td><?php echo $row_DetailRS1['nombre']; ?> </td>
  </tr>
  <tr>
    <td>apellidos</td>
    <td><?php echo $row_DetailRS1['apellidos']; ?> </td>
  </tr>
  <tr>
    <td>carrera</td>
    <td><?php echo $row_DetailRS1['carrera']; ?> </td>
  </tr>
  <tr>
    <td>cuatrimestre</td>
    <td><?php echo $row_DetailRS1['cuatrimestre']; ?> </td>
  </tr>
  <tr>
    <td>email</td>
    <td><?php echo $row_DetailRS1['email']; ?> </td>
  </tr>
  <tr>
    <td>celular</td>
    <td><?php echo $row_DetailRS1['celular']; ?> </td>
  </tr>
  <tr>
    <td>password</td>
    <td><?php echo $row_DetailRS1['password']; ?> </td>
  </tr>
  <tr>
    <td>saldo</td>
    <td><?php echo $row_DetailRS1['saldo']; ?> </td>
  </tr>
  
  
</table>

</body>
</html><?php
mysql_free_result($DetailRS1);
?>
