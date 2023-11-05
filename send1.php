<?php
include("conexion.php");

if(isset($_POST['entrar']))
{
    if (
        strlen($_POST['nombre']) >=1 
        && strlen($_POST['telefono']) >=1 
        && strlen($_POST['correo']) >=1 
        && strlen($_POST['contraseña']) >=1 
       
    ) {
            $nombre= trim($_POST['nombre']); 
            $telefono= trim($_POST['telefono']);
            $correo= trim($_POST['correo']);
            $contraseña= trim($_POST['contraseña']);

            // Verificar si los datos ya existen en la base de datos
            $verificar = "SELECT * FROM registro_usuarios WHERE nombre = '$nombre' or telefono = '$telefono' or
             contraseña = '$contraseña' or correo = '$correo'";
            
            $verificar_resultado = mysqli_query($conex,  $verificar);

            if(mysqli_num_rows($verificar_resultado) > 0){
                ?>
                <h3 class="error">Estos datos ya están registrados por otro usuario</h3>
                <?php
            } else {
                $consulta = "INSERT INTO registro_usuarios(nombre, telefono, correo, contraseña) 
                VALUES ('$nombre','$telefono','$correo','$contraseña')";
                
                $resultado = mysqli_query($conex, $consulta);

                if($resultado = true) {
                    header("Location: index.html"); // Redirigir a otra página
                    exit();
                
                } else{
                    ?>
                    <h3 class="error"> tu registro NO se ha completado</h3>
                    <?php
                }
            }
        } else{
            ?>
            <h3 class="error"> ha ocurrido un error</h3>
            <?php
        }
}

?>
