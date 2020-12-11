<?php require APPROOT.'/partials/header.php'?>

<body>
<?php require APPROOT.'/partials/navbar.php'?>
        <h1><?php echo $data['title']?></h1>
        <?php foreach ($data['aproved'] as $proyect) { ?>
            <div class="contenedor">
                <div>
                    <h2 class="titulo_proyecto"><?php echo $proyect['titulo']; ?></h2>
                    <img src="<?php echo $proyect['imagen'];?>" alt="">
                </div>
                <div>

                    <h3>Descripcion:</h3>
                    <p> <?php echo $proyect['descripcion']; ?> </p>
                </div>
                <form action="<?php echo URLROOT?>/proyects/listarproyectos" method="POST">
                    <button name="proyectId_btn" class="optional-btn" value="<?php echo $proyect['id'];?>">Ver</button>
                </form>
            </div>
            <br>
        <?php } ?>
</body>

<?php require APPROOT.'/partials/footer.php'?>
