<?php require APPROOT.'/partials/header.php'?>
<body>
    <?php require APPROOT.'/partials/navbar.php'?>
    <?php $current_proyect = $data['proyecto']; ?>
    <h1> <?php echo $data['title'];?> </h1>
    <span class="success"><?php echo $data['mensaje_exito']; ?> </span>

    <form action="<?php echo URLROOT ?>/proyects/editproposal/<?php echo $current_proyect['id']?>" method="POST">
    <fieldset>
        <legend>Sugerencias de cambios</legend>
        <label for="motivo"></label>
        <textarea name="motivo" id="motivo" cols="120" rows="20"></textarea>
        <span class="error"><?php echo $data['comentario_error']; ?></span>
    </fieldset>

    <div class="botones">
            <button type="submit" class="boton" name="user_edit"  value="1" onclick="alert('cancelando sugerencia, regresando a administrar...')">Cancelar</button>
            <button type="submit" class="boton" name="user_edit"  value="2">Enviar</button>
        </div>
    </form>
</body>

<?php require APPROOT.'/partials/footer.php'?>