<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    

    
</head>
<body>
<link rel="stylesheet" href="registroN.css">

<div>
   <button onclick="location.href='index.html'"><p>Regresar</p></button>
</div>


<form method="post" autocomplete="off">

<img src="images/logo.svg" alt="">

<div class="input-group">

 <div class="input-container"> 
    <input type="text" name="nombre" placeholder="Nombre">
    <i class="fa-solid fa-user"></i>

 </div>
 
 <div class="input-container"> 
    <input type="password" name="contraseña" placeholder="Contraseña">
    <i class="fa-solid fa-lock"></i>

 </div>

 <div class="input-container"> 
    <input type="email" name="correo" placeholder="Correo">
    <i class="fa-solid fa-envelope"></i>

 </div>

 <div class="input-container"> 
    <input type="tel" name="telefono" placeholder="Telefono">
    <i class="fa-solid fa-phone"></i>

 </div>

 <a href="">Terminos y condiciones</a>

 <input name="entrar" type="submit" class="btn" id="entrar" value="Enviar">
</div>

</form>



    <?php
         include("send1.php");
    ?>
    
</body>
</html>