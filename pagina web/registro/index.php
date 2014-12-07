<?PHP
 require_once('conexion.php');
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
	background-color: #FFFFFF;
}
.Estilo1 {color: #FFFFFF}
body,td,th {
	color: #000000;
}
.Estilo2 {color: #000000}
.Estilo4 {color: #00FF00}
.Estilo5 {font-size: 36px}
.Estilo8 {color: #006600; }
.Estilo9 {
	color: #006600;
	font-family: Algerian;
	font-size: 36px;
}
.Estilo12 {color: #000000; font-family: Algerian; font-size: 36px; }
.style1 {color: #0000FF}
-->
</style></head>

<body>
<form id="form1" name="form1" method="post" action="">
  <p align="center">
    <label class="Estilo9">
    <div align="center">
    <p>&nbsp;</p>
    <div align="center"></div>
    <div align="center"><span class="Estilo9"><br />
        <span class="style1">BIENvENIDOS</span></span>.</div>
  <p align="center">&nbsp;</p>
  
  
  <div align="center">
    <table width="200" border="1" bordercolor="#000000">
      <tr>
        <th scope="row"><span class="Estilo8">Usuario:</span></th>
        <td><label>
          <input type="text" name="txtUser" />
        </label></td>
      </tr>
      <tr>
        <th scope="row"><span class="Estilo2"><span class="Estilo1"><span class="Estilo4"><span class="Estilo8">Password:</span></span></span></span></th>
        <td><label>
          <input type="password" name="txtPassword" />
        </label></td>
      </tr>
    </table>
    <input type="submit" name="btnLogin" value="Login" />
  </div>
  <p align="center">&nbsp;</p>
    <p align="right">
    <span class="Estilo5">
<label></label>
</span></p>
</form>
</body>

</html>
<?php
	mysql_select_db($database_conexion, $conexion);
	
	if(isset($_POST['btnLogin'])) {
		$usuario = trim($_POST['txtUser']);
		$password = trim($_POST['txtPassword']);
		
		if($usuario == "" and $password ==""){
			?>
				<script language="javascript" type="text/javascript">
					alert('Error, insertar datos correctos');
				</script>  
			<?php
		}
		
		else{
		
			$encriptaCuenta=$usuario;
			$cuenta_crc32= crc32($encriptaCuenta);
			
			$encripnip = $password;
			$nip_crc32 = crc32($encripnip);
			
			$select="select * from users where usuario='".$cuenta_crc32."' and password='".$nip_crc32."' ";
			
			$execQuery1=mysql_query($select) or die ("Error");
			$result=mysql_fetch_array($execQuery1);
			
			$userDB = $result['usuario'];
			$nipDB = $result['password'];
	
			if($userDB == $cuenta_crc32 and $nipDB == $nip_crc32){
		
				$nombre = $result['usuario'];
		
				session_start();
		
				if (!isset($_SESSION["recupera"])) {
					$_SESSION["recupera"] = $nombre;	
				}
				
				?>
					<script language="javascript" type="text/javascript">
						alert('Bienvenido <?php echo $usuario; ?>');
						document.location.href = "inicio.php";
					</script>  
				<?php
		
			}
			else if ($nipDB == 0){
				?>
					<script language="javascript" type="text/javascript">
						alert('Lo sentimos <?php echo $usuario; ?> no te encuentras registrado');
					</script>  
				<?php
			}
		}
}
?>

