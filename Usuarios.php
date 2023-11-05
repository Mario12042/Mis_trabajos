<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    
</head>

<body>
    <?php
        include("conexion.php");
        $usuarios = "SELECT * from registro_usuarios";
    ?>
    <link rel="stylesheet" href="Usuarios.css">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <img id="logo" src="UNIVERSAL BLINDS-ONLY LOGO-TC (1).png" alt="">
            <a href="" class="navbar-brand text-warning fw-semibold fs-4"> UNIVERSAL BLINDS </a>

            <!-- Nav button -->
            <button 
            class="navbar-toggler"
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#menuLateral"
            >
            <span class="navbar-toggler-icon"></span>

            </button>
         
            <!-- off canvas main container start -->
            <section class="offcanvas offcanvas-start bg-dark"
            id="menuLateral" 
            tabindex="-1"
            >
                
            <div class="offcanvas-header" 
                data-bs-theme="dark">
                    <h5 class="offcanvas-title text-warning">UNIVERSAL BLINDS</h5>
                    <button 
                    class="btn-close" 
                    type="button" 
                    aria-label="Close" 
                    data-bs-dismiss="offcanvas"
                    ></button>
            </div>

            <!-- offcanvas menu links start -->
            <div class="offcanvas-body d-flex flex-column
            justify-content-between px-0"
            >
                <ul class="navbar-nav fs-5">
                    <!-- <li class="nav-item p-3 py-md-1"><a href="" 
                        class="nav-link"><i class="bi bi-house"></i>HOME</a></li>
                    <li class="nav-item p-3 py-md-1"><a href="" 
                        class="nav-link">PROJECTS</a></li>
                    <li class="nav-item p-3 py-md-1"><a href="" 
                        class="nav-link">ABOUT</a></li>
                    <li class="nav-item p-3 py-md-1"><a href="" 
                        class="nav-link">CONTACT</a></li>-->
                    <li> 
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-database"></i> 
                                 Bases de datos
                            </button>
                            <ul class="dropdown-menu">
                              <li><button class="dropdown-item" type="button" onclick="window.open('Usuarios.php')" >Usuarios</button></li>
                              <li><button class="dropdown-item" type="button" onclick="window.open('Inicios_de_sesión.php')">Inicios de sesion</button></li>
                              <li><button class="dropdown-item" type="button">Cotizaciones</button></li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <!-- enlace redes sociales -->
                <div class="d-lg-none align-self-center py-3">
                    <a href="https://www.facebook.com/profile.php?id=100085687190534&mibextid=LQQJ4d">
                        <i class="bi bi-facebook px-2
                        text-warning fs-2"></i></a>
                    <a href="https://instagram.com/universalblinds_?igshid=YTQwZjQ0NmI0OA==">
                        <i class="bi bi-instagram px-2
                        text-warning fs-2"></i></a>
                    <a href=""></a>
                    <a href=""></a>
                </div>

            </div>
            </section>
            <!-- offcanvas main container end -->

        </div>

    </nav>
    <h1>base de datos Usuarios</h1>


    <div class="container-table">
        <div class="table__title"> Datos de Usuarios </div>
            <div class="table__header">Nombre</div>
            <div class="table__header">Correo</div>
            <div class="table__header">Contraseña</div>
            <div class="table__header">Telefono</div>

            <?php
                $resultado = mysqli_query($conex, $usuarios);
            while($row= mysqli_fetch_assoc($resultado)){?>

            <div class="table__item"><?php echo $row ["nombre"]; ?></div>
            <div class="table__item"><?php echo $row ["correo"]; ?></div>
            <div class="table__item"><?php echo $row ["contraseña"]; ?></div>
            <div class="table__item"><?php echo $row ["telefono"]; ?></div>

            <?php  }   ?>

    </div>
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</html>