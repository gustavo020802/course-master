<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Correcto</title>
</head>
<body background="images/4.jpeg"><font size="7" color="white">
	 <center><h2>Black Diamond®<font color="white" size="7"><font color="white" size="7"><font color="white" size="7"><img src="images/BlackDiamond.svg" alt="" width="100px" height="100px"></font></font></font></h2>

       <p>
         <?php 
$conexion=mysqli_connect("localhost","root")or die("Problemas en la conexion");

mysqli_select_db($conexion,"registro")or die("Problemas en la seleccion de Base de Datos");
mysqli_query($conexion,"insert into formulas(nombre,formula)values('$_REQUEST[nombre]','$_REQUEST[formula]')")or die("Problema en el Select".mysqli_error());
mysqli_close($conexion);
echo"La Formula ha sido dada de alta";
?>
         </p>
       <p><a href="insertar.html">¡Regresar!</a></p>
</center></font>
</body>
</html>