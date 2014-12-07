<?php require_once('conexion.php'); 
	mysql_select_db($database_conexion, $conexion);
	session_start();

	if (!isset($_SESSION["recupera"])) {
		header("Location: index.php");
	}

	$recUsuario = $_SESSION["recupera"];

?>
	

	
<?php
mysql_select_db($database_conexion, $conexion);
$query_Recordset1 = "SELECT * FROM registroalumnos";
$Recordset1 = mysql_query($query_Recordset1, $conexion) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
.Estilo1 {color: #FFFFFF}
.Estilo3 {color: #000000; }
.Estilo4 {
	color: #006600;
	font-family: Algerian;
	font-size: 36px;
}
.Estilo5 {color: #006600}
-->
</style></head>

<body>
<p align="center" class="Estilo4">Registros.</p>
<table border="1" align="center">
  <tr>
    <td class="Estilo3">matricula</td>
    <td class="Estilo3">nombre</td>
    <td class="Estilo3">apellidos</td>
    <td class="Estilo3">carrera</td>
    <td class="Estilo3">cuatrimestre</td>
    <td class="Estilo3">email</td>
    <td class="Estilo3">celular</td>
    <td class="Estilo3">password</td>
    <td class="Estilo3">saldo</td>
  </tr>
  <?php do { ?>
    <tr>
      <td class="Estilo1"><a href="detalles.php?recordID=<?php echo $row_Recordset1['matricula']; ?>" class="Estilo3"> <?php echo $row_Recordset1['matricula']; ?>&nbsp; </a> </td>
      <td class="Estilo3"><?php echo $row_Recordset1['nombre']; ?>&nbsp; </td>
      <td class="Estilo3"><?php echo $row_Recordset1['apellidos']; ?>&nbsp; </td>
      <td class="Estilo3"><?php echo $row_Recordset1['carrera']; ?>&nbsp; </td>
      <td class="Estilo1"><span class="Estilo3"><?php echo $row_Recordset1['cuatrimestre']; ?></span>&nbsp; </td>
      <td class="Estilo3"><?php echo $row_Recordset1['email']; ?>&nbsp; </td>
      <td class="Estilo3"><?php echo $row_Recordset1['celular']; ?>&nbsp; </td>
      <td class="Estilo1"><span class="Estilo3"><?php echo $row_Recordset1['password']; ?></span>&nbsp; </td>
      <td class="Estilo3"><?php echo $row_Recordset1['saldo']; ?>&nbsp; </td>
    </tr>
    <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
</table>
<span class="Estilo1 Estilo3"><br>
<span class="Estilo5">Registros Total:<?php echo $totalRows_Recordset1 ?></span></span>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
