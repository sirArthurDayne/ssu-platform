<?php $url_root = "http://localhost/ssu-platform"?>
<div class="header">
        <div class="img-header">
            <img src="<?php echo $url_root ?>/public/img/logo_utp.png" width="90" height="90">
        </div>
        <div class="text-header">
            <h1 class="titulo">Servicio Social Universitario</h1>
        </div>
        <div class="list-header">
            <ul>
                <a href="<?php echo $url_root ?>/homes/index">
                    <li>Página principal</li>
                </a>
                <li> | </li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn">Nombre de usuario<i><img class="icon"
                                    src="<?php echo $url_root ?>/public/img/user_icon.png" width="40px" height="40px"></i><i class="fa fa-caret-down"></i></button>
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
                    <a href="<?php echo $url_root ?>/proyects/listarpropuestas">Ver propuestas</a>
                    <a href="<?php echo $url_root ?>/proyects/register">Registrar Propuesta</a>
                    <a href="<?php echo $url_root ?>/proyects/adminproposals">Administrar propuestas</a>
                </div>
            </div>
            <div class="navbar-dropdown2">
                <button class="navbtn">Proyectos</button>
                <div class="navbar-content2">
                    <a href="<?php echo $url_root ?>/proyects/listarproyectos"alt="#">Visualizar proyectos</a>
                </div>
            </div>
    </div>