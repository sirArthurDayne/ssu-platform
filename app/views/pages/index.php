<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $URLROOT?>/../public/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <title>Home</title>
</head>

<body>
    <div class="header">
        <div class="img-header">
            <img src="<?php echo $URLROOT?>/../public/img/logo_utp.png" width="90" height="90">
        </div>
        <div class="text-header">
            <h1 class="titulo">Servicio Social Universitario</h1>
        </div>
        <div class="list-header">
            <ul>
                <a href="#">
                    <li>Página principal</li>
                </a>
                <li> | </li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn">Nombre de usuario<i><img class="icon"
                                    src="<?php echo $URLROOT?>/../public/img/user_icon.png" width="40px" height="40px"></i><i class="fa fa-caret-down"></i></button>
                        <div class="dropdown-content">
                            <a href="#home">Ver pefil</a>
                            <a href="#about">Ajustes</a>
                            <a href="#contact">Cerrar Sesión</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="navbar">
            <div class="navbar-dropdown1">
                <button class="navbtn">Propuestas</button>
                <div class="navbar-content1">
                    <a>Ver propuestas</a>
                    <a>Administrar propuestas</a>
                    <a>3</a>
                </div>
            </div>
            <div class="navbar-dropdown2">
                <button class="navbtn">Proyectos</button>
                <div class="navbar-content2">
                    <a>Visualizar proyectos</a>
                    <a>Administrar proyectos</a>
                    <a>3</a>
                </div>
            </div>
    </div>

</body>

<footer>
    <div class="img-footer">
        <img src="<?php echo $URLROOT?>/../public/img/logo_utp.png" width="90" height="90">
    </div>
    <div class="text-footer">
        <h2>Universidad Tecnológica de Panama<br>
            Servicio social universitario
        </h2>
    </div>
    <div class="info-footer">
        <p>Universidad Tecnológica de Panamá - 2020
           Dirección: Avenida Universidad Tecnológica de Panamá, Vía Puente Centenario,
           Campus Metropolitano Víctor Levi Sasso, Edificio 3, Piso 3.
           Teléfono. (507) 560-3689/3705
           Correo electrónico: servicio.social@utp.ac.pa
           311 Centro de Atención Ciudadana
        </p>
    </div>
    <div class="redes">
        <ul>
            <li><a href=""><i class="fab fa-instagram fa-3x" ></i></a></li>
            <li><a href=""><i class ="fab fa-facebook-square fa-3x"></i></a></li>
            <li><a href=""><i class ="fab fa-twitter-square fa-3x"></i></a></li>
        </ul>
    </div>
</footer>

</html>