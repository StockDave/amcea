<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<frameset rows="112,*" cols="*" framespacing="0" frameborder="no" border="0">
  <frame src="titulo.php" name="topFrame" scrolling="No" noresize="noresize" id="topFrame" title="topFrame" />
  <frameset rows="*" cols="124,*" framespacing="0" frameborder="no" border="0">
		<frame src="botones.php" name="leftFrame" scrolling="No" noresize="noresize" id="leftFrame" title="leftFrame" />
		<frame src="principal.php" name="mainFrame" id="mainFrame" title="mainFrame" />
  </frameset>
</frameset>
<noframes><body>
<form method="post">
	<input type="submit" name="btnCerrar" value="Cerrar Sesion" />
</form>
</body>

</noframes></html>
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
