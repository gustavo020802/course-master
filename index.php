<?php
    include("congif.php");
    session_start();
        if(isset($_SESSION['username']))
        {
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>LOGIN Y REGISTRO</title>
</head>
<body background="images/2.jpeg"><font color="white" size="7">
<h1>YA INICIASTE SESIÓN <?php echo $_SESSION['username'];?></h1>
<br/><br/>
    <form method="POST" action="">
        <input type="submit" name="cerrarsesion" value="Cerrar Sesión" />
    </form>
    <?php

        if(isset($_POST['cerrarsesion']))
        {
            session_destroy();
            header('location: index.php');
        }

    ?>
</body>
</html>
<?php
}else{
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>LOGIN Y REGISTRO</title>
</head>
<body background="images/2.jpeg"><font color="white" size="7">
    <center><h2>Black Diamond®<font color="white" size="7"><font color="white" size="7"><font color="white" size="7"><img src="images/BlackDiamond.svg" alt="" width="100px" height="100px"></font></font></font></h2>
</center>
    <form method="POST" action="" align="center">
        <label>Nombre de usuario: </label><input type="text" name="userreg" style="width:230px;height:30px;"><br/><br/>
        <label>Contraseña: </label><input type="password" name="pwreg" style="width:230px;height:30px;"><br/><br/>
        <label>Repite la contraseña: </label><input type="password" name="pwregveri" style="width:230px;height:30px;"><br/><br/>
        <input type="submit" name="registrar" value="Registrarme" style="width:150px;height:30px;color:white;background-color:black;">
    </form>
    <br/><br/>
    <a href="login.php">¡INICIAR SESIÓN!</a>
    <?php

        include("congif.php");

        if(isset($_POST['registrar']))
        {
            if($_POST['userreg'] == '' or $_POST['pwreg'] == '')
    {
        echo "Debe llenar todos los campos por favor.";
    }else{
        
             $sql = 'SELECT * FROM usuarios';
             $rec = mysqli_query($conexion,$sql);
             $verificar = 0;
        
             while($resultado = mysqli_fetch_object($rec))
             {
                 if($resultado->nombreusuario == $_POST['userreg'])
                 {
                     $verificar = 1;
                 }
             }
             if($verificar == 0)
             {
                if($_POST['pwreg'] == $_POST['pwregveri'])
                {
                         $nom = $_POST['userreg'];
                         $pw = $_POST['pwreg'];
                         $pw_en = password_hash($pw, PASSWORD_DEFAULT);
            
                         $conexion->query("INSERT INTO usuarios (nombreusuario,contrasena) VALUES ('$nom','$pw_en')");
                         mysqli_query($conexion,$sql);
                         echo "Te has registrado con éxito.";

                }else{
                    echo "Las contraseñas no coinciden.";
                }
             }else{
                  echo "El nombre de usuario ya esta en nuestra base de datos, por favor prueba otro.";
              }
        }
        }
    ?>
</body>
</html>
<?php
}
?>