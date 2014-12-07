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
	background-color: #FFFFFF;
}
-->
</style></head>

<body>
<p>&nbsp;</p>
<p>
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="100" height="22">
    <param name="movie" value="button5.swf" />
    <param name="quality" value="high" /><param name="BGCOLOR" value="#0000FF" />
    <embed src="button5.swf" width="100" height="22" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" bgcolor="#0000FF" ></embed>
  </object>
</p>
<p>
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="100" height="22">
    <param name="movie" value="button6.swf" />
    <param name="quality" value="high" /><param name="BGCOLOR" value="#0000FF" />
    <embed src="button6.swf" width="100" height="22" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" bgcolor="#0000FF" ></embed>
  </object>
</p>
<p>
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="100" height="22">
    <param name="movie" value="button8.swf" />
    <param name="quality" value="high" /><param name="BGCOLOR" value="#0000FF" />
    <embed src="button8.swf" width="100" height="22" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" bgcolor="#0000FF" ></embed>
  </object>
</p>
<p>
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="100" height="22">
    <param name="movie" value="button13.swf" />
    <param name="quality" value="high" /><param name="BGCOLOR" value="#0000FF" />
    <embed src="button13.swf" width="100" height="22" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" bgcolor="#0000FF" ></embed>
  </object>
</p>
<p>&nbsp;</p>

</body>
</html>
<?php
	if(isset($_POST['btnCerrar'])) {
		session_destroy();
		?>
			<script language="javascript" type="text/javascript">
				alert('Cerrando Sesion');
				document.location.href = "index.php";
			</script>  
		<?php
	}
?>
