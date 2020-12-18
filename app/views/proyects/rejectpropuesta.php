<?php require APPROOT.'/partials/header.php'?>
<body>
    <?php require APPROOT.'/partials/navbar.php'?>
    <h1> <?php echo $data['title'];?> </h1>
    <p> <?php $current_proyect = $data['proyecto']; ?> </p>

    <form action="<?php echo URLROOT ?>/proyects/rejectproposal/<?php echo $current_proyect['id']?>" method="POST">
    <fieldset>
        <legend>Motivo de rechazo</legend>
        <label for="motivo_rechazo"></label>
        <textarea name="motivo_rechazo" id="motivo_rechazo" cols="120" rows="20"></textarea>
        <span class="error"><?php echo $data['comentario_error']; ?></span>
        <div class="botones">
            <button class="boton" type="submit">Enviar</button>
        </div>
    </fieldset>
    </form>
</body>

<?php require APPROOT.'/partials/footer.php'?>