<?php require APPROOT.'/partials/header.php'?>
<body>
<?php require APPROOT.'/partials/navbar.php'?>

    <h1><?php echo $data['title'];?></h1>
    <?php $current_proyect = $data['proyecto']; ?>

    <form action="<?php echo URLROOT ?>/proyects/editproposal/<?php echo $current_proyect['id']?>" method="POST">
        <div class="informacionita">            
            <div class="dataa">
                <div>
                    <h2>Nombre del Proyecto</h2>
                    <label for="proyect_name"><input type="text" id="proyect_name" name="proyect_name" value="<?php echo $current_proyect['titulo'];?>" class="titulo_editar"></label>

                    <img src="https://i.pinimg.com/originals/62/ac/2b/62ac2b87143d1b21bce9395281246ad9.jpg" alt="foto">
                    
                    <div class="datototes">
                        <div class="modrad">
                        <h4>Modalidad</h4>
                        <?php if($current_proyect['modalidad'] == 'individual') { ?>
                        <label> <input type="radio" name="modalidad" value="individual" checked="true">Individual </label><br>
                        <label> <input type="radio" name="modalidad" value="grupo">Grupal</label> 
                        <?php }
                        else {
                        ?>
                        <label> <input type="radio" name="modalidad" value="individual">Individual</label><br>
                        <label> <input type="radio" name="modalidad" value="grupo" checked="true">Grupal</label> 
                        <?php }?>
                     </div>
                        <div class="nivrad">
                        <h4>Nivel de Proyecto</h4>
                        <?php if($current_proyect['nivel'] == 'voluntariado') { ?>
                        <label> <input type="radio" name="level" value="labor_social">Labor Social</label> <br>
                        <label> <input type="radio" name="level" value="voluntariado" checked="true">Voluntariado</label>
                        <?php }
                        else {
                        ?>
                        <label> <input type="radio" name="level" value="labor_social" checked="true">Labor Social</label> <br>
                        <label> <input type="radio" name="level" value="voluntariado" >Voluntariado</label>
                        <?php }?>
                        </div>
                    </div>

                </div>
                <div class="description">
                    <h4>Objetivo de propuesta: </h4>
                    <textarea class="areadetexto" cols="80" rows="2" name="proyect_obj"><?php echo $current_proyect['objetivo']; ?></textarea>
                    <h4>Descripcion de propuesta: </h4>
                    <textarea class="areadetexto" cols="80" rows="3" name="proyect_descr"><?php echo $current_proyect['descripcion']; ?></textarea>
                </div>
            </div>
        </div>

        <div class="botones">
            <button type="submit" class="boton" name="user_edit"  value="1" onclick="alert('cancelando edicion...')">Cancelar</button>
            <button type="submit" class="boton" name="user_edit"  value="2" onclick="alert('guardando cambios...')">Aceptar</button>
        </div>
    
    </form>

</body>

<?php require APPROOT.'/partials/footer.php'?>