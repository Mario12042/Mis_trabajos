<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script type="text/javascript">
		function abrirPagina() 
        {
			window.location.href = "Catalogo.html";
		}
	</script>
</head>
<body>
    <link rel="stylesheet" href="Inicio_sesion.css">
   
    <!-- <div id="uno">
        <img src="UNIVERSAL BLINDS-COMPLETE-HORIZONTAL-SC.png" alt="" >

        <h1>Inicio de sesion</h1>
    </div> -->

<nav class="navbar navbar-expand-lg bg-warning"" id="nava">
  <div class="container-fluid">
    <!-- <a class="navbar-brand"  onclick="location.href='index.html'">Regresar</a> -->
    <button onclick="location.href='index.html'" id="Regresar" ><p>Regresar</p></button>
    <h1>Inicio de sesión</h1>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      <h1>Inicio de sesión</h1>

    <!-- </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li> -->
      
    </div>
  </div>
</nav>

    <div class="dive">
        <form method="post">

            <h1>Inicia sesion con tu correo y contraseña</h1>
            <br>

            <img src="login.png" alt="login">
            <div class="caja">
                <input type="email" name="correo" placeholder="Correo electronico" required>
            </div>

            <div class="caja">
                <input type="password" name="contra" placeholder="Contraseña" required>
            </div>

            <p>¿No tienes una cuenta?<a href="registromodificado.php">Registrate</a> </p>

            <input type="submit" class="--in-custom" name="entrar" id="entrar" value="Ingresar" >

        </form>

        <?php
        include("send.php");
        ?>

    </div>




   
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<!-- <script src="Catalogo.js"></script> -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</html>