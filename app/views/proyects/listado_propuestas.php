<?php require APPROOT.'/partials/header.php'?>
<body>
<?php require APPROOT.'/partials/navbar.php'?>

    <h1><?php echo $data['title']; ?></h1>

<?php 
    foreach ($data['propuestas'] as $proposal) { ?>

    <div class="listado">
        <div class="contenedor">
            <div>
                <h2 class="titulo_proyecto"><?php echo $proposal['titulo'];?> </h2>
                <h4 class="responsable">Supervisor: <?php echo $proposal['supervisor_nombre']; ?> </h4>
                <h4 class="lugar">Lugar: <?php echo $proposal['lugar']; ?>  </h4>
            </div>
            <div>
                <br>
                <h4>Descripcion:</h4>
                <p>
                   <?php echo $proposal['descripcion']; ?>
                </p>
            </div>
            <form action="<?php echo URLROOT ?>/proyects/listarpropuestas" method="POST">
                <button class="optional-btn" name="getproyectIdBtn" value="<?php echo $proposal['id'];?>">Ver</button>
            </form>
        </div>
    </div>
    <br>
<?php } ?>

</body>
<?php require APPROOT.'/partials/footer.php'?>