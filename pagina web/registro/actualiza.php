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
	background-color: #FFFFFF;
}
.Estilo1 {
	color: #006600;
	font-size: 36px;
	font-family: Algerian;
}
.Estilo4 {color: #006600}
.style2 {color: #0000FF; font-size: 36px; font-family: Algerian; }
-->
</style></head>

<body>
<div align="center"><span class="style2">Actualizar Registro.</span></div>
<p>&nbsp;</p>
<table width="200" border="1" align="center">
  <tr>
    <th scope="row"><span class="Estilo4">Matricula:</span></th>
    <td><form id="form1" name="form1" method="post" action="">
      <label>
        <input type="text" name="txtMatricula" />
        </label>

        <p align="center">
          <input type="submit" name="btnBuscar" value="Buscar" />
        </p>
    </form>
    </td>
  </tr>
</table>

<?php
  if(isset($_POST['btnBuscar'])){
    $matricula = trim($_POST['txtMatricula']);
    $select="select * from registroalumnos where matricula='".$matricula."'";
    $query=mysql_query($select) or die ("Error en la seleccion");
    $result=mysql_fetch_array($query);

    $recMatricula = $result['matricula'];
    $recNombre = $result['nombre'];
    $recApellidos = $result['apellidos'];
    $recCarrera = $result['carrera'];
    $recCuatrimestre = $result['cuatrimestre'];
    $recEmail = $result['email'];
    $recCelular = $result['celular'];
    $recPassword = $result['password'];

    if($recMatricula || ''){
      echo "
        <form id=form2 name=form2 method=post>
        <div align=center>
          <table>
            <tr>
              <th scope=row><span class=Estilo4>Matricula:</span></th>
              <td><span class=Estilo4>
                <label>
                <input type=int name=matricula2 value='$recMatricula' readonly=true/>
                </label>
              </span> </td>
            </tr>
            <tr>
              <th scope=row><span class=Estilo4>Nombre:</span></th>
              <td><span class=Estilo4>
                <label>
                <input type=text name=nombre value='$recNombre' />
                </label>
              </span> </td>
            </tr>
            <tr>
              <th scope=row><span class=Estilo4>Apellidos:</span></th>
              <td><span class=Estilo4>
                <label>
                <input type=text name=apellidos value='$recApellidos' />
                </label>
              </span> </td>
            </tr>
            <tr>
              <th scope=row><span class=Estilo4>Carrera:</span></th>
              <td><span class=Estilo4>
                <label>
                <input type=text name=carrera value='$recCarrera' />
                </label>
              </span></td>
            </tr>
            <tr>
              <th scope=row><span class=Estilo4>Cuatrimestre:</span></th>
              <td><span class=Estilo4>
                <label>
                <input type=text name=cuatrimestre value='$recCuatrimestre' />
                </label>
              </span> </td>
            </tr>
            <tr>
              <th scope=row><span class=Estilo4>Email:</span></th>
              <td><span class=Estilo4>
                <label>
                <input type=text name=email value='$recEmail' />
                </label>
              </span> </td>
            </tr>
            <tr>
              <th scope=row><span class=Estilo4>Celular:</span></th>
              <td><span class=Estilo4>
                <label>
                <input type=text name=celular value='$recCelular' />
                </label>
              </span> </td>
            </tr>
            <tr>
              <th scope=row><span class=Estilo4>Password:</span></th>
              <td><span class=Estilo4>
                <label>
                <input type=text name=password value='$recPassword' />
                </label>
              </span> </td>
            </tr>
          </table>
          <p>&nbsp;</p>
          <input type=submit name=Actualizar value=Actualizar />
          <input type=submit name=Borrar value=Borrar />
        </div>
      </form>
      ";
    }
    else if ($recMatricula == '') {
      ?>
        <script language="javascript" type="text/javascript">
          alert('Error, insertar datos correctos');
        </script>  
      <?php
    }

  }
?>
<?PHP
define ('DB_HOST', 'localhost');
define ('DB_USER', 'root');

if(isset ($_POST['Actualizar']))
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
$query2 = "update registroalumnos set nombre ='{$_POST['nombre']}', apellidos='{$_POST['apellidos']}', carrera='{$_POST['carrera']}', cuatrimestre='{$_POST['cuatrimestre']}', email='{$_POST['email']}', celular='{$_POST['celular']}',password='{$_POST['password']}' where matricula='{$_POST['matricula2']}'";
if(@mysql_query($query2))
{
print '<p> Datos Modificados.</p>';
}
else
{
print '<p>NO SE PUDO MODIFICAR LOS DATOS.</p>';
}
}
?>
<?PHP


if(isset ($_POST['Borrar']))
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
$query2 = "delete registroalumnos where matricula='{$_POST['matricula2']}'";
if(@mysql_query($query2))
{
print '<p> Datos Eliminados.</p>';
}
else
{
print '<p>NO SE PUDO ELIMINAR LOS DATOS.</p>';
}
}
?>
<p>&nbsp;</p>
</body>
</html>
