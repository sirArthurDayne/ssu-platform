<?php require APPROOT.'/partials/header.php'?>
<body>
<?php require APPROOT.'/partials/navbar.php'?>
<h1> <?php echo $data['title'];?> </h1>
    <p> <?php echo $data['user_message']; ?> </p>
<?php 
    foreach ($data['propuestas'] as $proposal)  {  ?>
        <div class="contenedor">
            <div>
                <h2 class="titulo_proyecto"> <?php echo $proposal['titulo'];?> </h2>
                <h4 class="responsable">Responsable: <?php echo $proposal['supervisor_nombre']; ?> </h4>
                <h4 class="lugar">Lugar: <?php echo $proposal['lugar']; ?></h4>
            </div>
            <div>
                <h4>Descripcion:</h4>
                <p>
                <?php echo $proposal['descripcion']; ?> 
                </p>
            </div>
            <form class="button_container" action="<?php echo URLROOT; ?>/proyects/adminproposals" method="POST">
                <input type="hidden" name="selected_proyectid" id="" value="<?php echo $proposal['id'];?>">
                <button class="reject-btn" name="admin_action" value="3" onclick="alert('se ha rechazado la propuesta: <?php echo $proposal['titulo']?>')">Rechazar</button>
                <button class="accept-btn" name="admin_action" value="2" onclick="alert('se ha aprobado la propuesta: <?php echo $proposal['titulo']?>')">Aprobar</button>
                <button class="optional-btn" name="admin_action" value="1" onclick="alert('se empezara a editar la propuesta: <?php echo $proposal['titulo']?>')">Editar</button>
            </form>

        </div>
        <br>
<?php }?>

</body>

<?php require APPROOT.'/partials/footer.php'?>