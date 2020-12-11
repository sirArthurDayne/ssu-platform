<?php require APPROOT.'/partials/header.php'?>

<body>
    <?php require APPROOT.'/partials/navbar.php'?>
    <div class="informacion">
        <?php $proyect = $data['seeProyect'];?>
        <h1><?php echo $data['title']; ?></h1>
    
        <div class="datos">
            <div>
                <h2><?php echo $proyect['titulo'];?></h2>
                <img src="https://i.pinimg.com/originals/62/ac/2b/62ac2b87143d1b21bce9395281246ad9.jpg" alt="">
                <div class="datitos">
                    <div>
                        <h4>Modalidad:</h4>
                        <p><?php echo $proyect['modalidad']; ?></p>
                    </div>
                    <div>
                        <h4>Nivel de Proyecto:</h4>
                        <p><?php echo $proyect['nivel']?></p>
                    </div>
                </div>
            </div>
            <div class="descripcion">
                <h4>Objetivo:</h4>
                <p><?php echo $proyect['objetivo']; ?></p>
                <h4>Descripcion:</h4>
                <p> <?php echo $proyect['descripcion'];?> </p>
                <form action="<?php echo URLROOT?>/proyects/listarproyectos" method="POST">
                    <button>Volver</button>
                </form>
            </div>
        </div>
    </div>    
</body>

<?php require APPROOT.'/partials/footer.php'?>