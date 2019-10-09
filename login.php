<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>LOGIN</title>
</head>
<body background="images/1.jpeg"><font color="white" size="7">
    <header align="Top">
    </header>
<center><h2>Black Diamond®<font color="white" size="7"><font color="white" size="7"><font color="white" size="7"><img src="images/BlackDiamond.svg" alt="" width="100px" height="100px"></font></font></font></h2>
</center>

    <form method="POST" action="" align="center" >
        <label>Nombre de usuario: </label><input type="text" name="userlogin" style="width:230px;height:30px;"><br/><br/>
        <label>Contraseña: </label><input type="password" name="pwlogin" style="width:230px;height:30px;"><br/><br/>
        <input type="submit" name="iniciarsesion"  value="Iniciar Sesion" style="width:150px;height:30px;color:white;background-color:black; ">
    </form></font>
    <?php

session_start();    
include("congif.php");

if(isset($_POST['iniciarsesion']))
{
    if(isset($_POST['userlogin']) && !empty($_POST['userlogin']) &&
       isset($_POST['pwlogin']) && !empty($_POST['pwlogin']))
    {

            $sqldos = "SELECT nombreusuario,contrasena FROM usuarios WHERE nombreusuario='$_POST[userlogin]'";
            $recdos = mysqli_query($conexion,$sqldos);

            $sesion = mysqli_fetch_array($recdos);

            if(password_verify($_POST['pwlogin'], $sesion['contrasena']))
            {
                $_SESSION['username'] = $_POST['userlogin'];
                header("location: indexadmin.html");
            }else{
                echo "<br/>";
                echo "Combinación erronea.";
            }

    }else{
        echo "<br/>";
        echo "Debes llenar ambos campos.";
    }
}

?>
</body>
</html>