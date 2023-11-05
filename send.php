<?php
include("conexion.php");

if(isset($_POST['entrar']))
{
    if (
        strlen($_POST['correo']) >=1 && strlen($_POST['contra']) >=1 
    ) 
    {
        $email= trim($_POST['correo']); 
        $password= trim($_POST['contra']);
        $consulta = "INSERT INTO inicio_sesion (correo, contraseña) values ('$email', '$password')";
        $resultado = mysqli_query($conex, $consulta);
        $verificar_correo_y_contraseña = mysqli_query ($conex, "SELECT * from registro_usuarios where correo= 
        '$email' and contraseña = '$password'");

        if (mysqli_num_rows($verificar_correo_y_contraseña) > 0) {

            $row = mysqli_fetch_assoc($verificar_correo_y_contraseña);
            if ($row['correo'] == "administrador12@hotmail.com" && $row['contraseña'] == "admin12") {

            header("Location: Administrador.html"); //redirigir a admin a su pagina
            exit(); 

           }else{

            header("Location: Catalogo.html"); // Redirigir a otra página
            exit(); 

           }
     
                           
        }else{
            ?>
            <h3 class="error"> correo y/o contraseña incorrectos</h3>
            <?php
        }      
    }   else{
            ?>
            <h3 class="error"> ha ocurrido un error</h3>
            <?php
        }
}
?>