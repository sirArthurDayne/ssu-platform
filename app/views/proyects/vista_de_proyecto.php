<?php require APPROOT.'/partials/header.php'?>

<body>
    <?php require APPROOT.'/partials/navbar.php'?>
    <?php $proyect = $data['seeProyect'];?>

    <div class="informacion">
    <h1><?php echo $data['title']; ?></h1>
        <div class="datos">
            <div class="datitos">
                <h2><?php echo $proyect['titulo'];?></h2>
                <img src="<?php echo $proyect['imagen']?>" alt="">
                <div>
                    <h4>Modalidad:</h4>
                    <p><?php echo $proyect['modalidad']; ?></p>
                    <h4>Nivel de Proyecto:</h4>
                    <p><?php echo $proyect['nivel']?></p>
                    <h4>Cantidad de estudiantes:</h4>
                    <p><?php echo $proyect['est_cantidad']?></p>
                </div>
            </div>
            <div class="descripcion">
                <h4>Objetivo:</h4>
                <p><?php echo $proyect['objetivo']; ?></p>
                <h4>Descripcion:</h4>
                <p> <?php echo $proyect['descripcion'];?> </p><br>
                <h4>Perfil de estudiante:</h4>
                <p><?php echo $proyect['est_perfil']?></p>
                <h4>Tiempo estimado de realizacion:</h4>
                <p><?php echo $proyect['horas']?></p>
                <h4>Lugar:</h4>
                <p><?php echo $proyect['lugar']?></p>
                <h4>Descripcion del lugar</h4>
                <p><?php echo $proyect['lugar_descr']?></p>
                <form action="<?php echo URLROOT?>/proyects/listarproyectos" method="POST">
                    <button>Volver</button>
                </form>
            </div>
        </div>
    </div>
</body>

<?php require APPROOT.'/partials/footer.php'?>
