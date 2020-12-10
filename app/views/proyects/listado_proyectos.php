<?php require APPROOT.'/partials/header.php'?>

<body>
<?php require APPROOT.'/partials/navbar.php'?>       
        <h1><?php echo $data['title']?></h1>
        <?php foreach ($data['aproved'] as $proyect) { ?>
            <div class="contenedor">
                <div>
                    <img src="https://i.pinimg.com/originals/62/ac/2b/62ac2b87143d1b21bce9395281246ad9.jpg" alt="">
                </div>
                <div>
                    <h2 class="titulo_proyecto"><?php echo $proyect['titulo']; ?></h2>
                    <h3>Descripcion:</h3>
                    <p> <?php echo $proyect['descripcion']; ?> </p>
                </div>
                <button class="optional-btn">Ver</button>
            </div>
            <br>
        <?php } ?>
</body>

<?php require APPROOT.'/partials/footer.php'?>