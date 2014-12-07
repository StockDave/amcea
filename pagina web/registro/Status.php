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
.Estilo2 {color: #FFFFFF}
.Estilo4 {color: #006600}
-->
</style></head>

<body>
<div align="center"><span class="Estilo1">Estado.</span></div>
<p>&nbsp;</p>
<form id="form6" name="form6" method="post" action=""><div align="center">
  <table width="200" border="1" bordercolor="#FFFFCC">
      <tr>
        <th scope="row"><span class="Estilo2"><span class="Estilo4">Matricula:</span></span></th>
        <td><input type="text" name="matricula" />        </td>
      </tr>
      <tr>
        <th scope="row"><span class="Estilo4">Saldo:</span></th>
        <td><input type="text" name="saldo" />        </td>
      </tr>
      <tr>
        <th scope="row"><span class="Estilo4">Tramite:</span></th>
        <td><select name="select">
          </select>        </td>
      </tr>
      <tr>
        <th scope="row"><span class="Estilo4">Cantidad:</span></th>
        <td><select name="select2">
          </select>        </td>
      </tr>
      <tr>
        <th scope="row"><span class="Estilo4">Total:</span></th>
        <td><input type="text" name="textfield3" />        </td>
      </tr>
    </table>
    <br />
    <input type="submit" name="Submit" value="Cobrar" />
  </div>
  </label>
</form>
<div align="center"></div>
<form id="form9" name="form9" method="post" action="">
  <label>
  <div align="center">
    <table width="200" border="1" bordercolor="#FFFFCC">
      <tr>
        <th scope="row"><span class="Estilo4">Deuda:</span></th>
        <td><input type="text" name="textfield4" />        </td>
      </tr>
      <tr>
        <th scope="row"><span class="Estilo4">Deposito:</span></th>
        <td><input type="text" name="textfield5" />        </td>
      </tr>
    </table>
    <br />
    <input type="submit" name="Submit2" value="Depositar" />
  </div>
  </label>
</form>
<p align="center">&nbsp;</p>
</body>
</html>
