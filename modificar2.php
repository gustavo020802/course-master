<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Correcto</title>
</head>
<body background="images/5.jpg"><font size="7" color="white">
	 <center><h2>Black Diamond®<font color="white" size="7"><font color="white" size="7"><font color="white" size="7"><img src="images/BlackDiamond.svg" alt="" width="100px" height="100px"></font></font></font></h2>

       <p>
         <?php 
$id = $_POST['Id'];
$nombre = $_POST['Nombre'];
$proceso = $_POST['Proceso'];
$conexion=mysqli_connect("localhost","root")or die("Problemas en la conexion");
mysqli_select_db($conexion,"registro")or die("Problemas en la seleccion de Base de Datos");
mysqli_query($conexion, "UPDATE op SET nombre = '$nombre', proceso = '$proceso' WHERE id = '$id' ");
echo "Modificado correctamente";
?>
 </p>
       <p><a href="insertar.html">¡Regresar!</a></p>
</center></font>
</body>
</html>






