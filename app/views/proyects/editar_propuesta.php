<?php require APPROOT.'/partials/header.php'?>
<body>
<?php require APPROOT.'/partials/navbar.php'?>

    <h1><?php echo $data['title'];?></h1>
    <?php $current_proyect = $data['proyecto']; ?>

    <form action="<?php echo URLROOT ?>/proyects/editproposal/<?php echo $current_proyect['id']?>" method="POST">
        <div class="informacionita">
            <div class="dataa">
                <div class="info_prim">
                    <div class="datototes">
                        <div class="data_ed">
                        <h2>Nombre del Proyecto</h2>
                        <label for="proyect_name"><input type="text" id="proyect_name" name="proyect_name" value="<?php echo $current_proyect['titulo'];?>" class="titulo_editar"></label>
                        <img src="<?php echo $current_proyect['imagen']; ?>" alt="portada de proyecto">
                        <label for="proyect_image">portada(url): </label>
                        <input type="text" name="proyect_image" value="<?php echo $current_proyect['imagen']?>" />
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
                        <div class="data_ed">
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
                        <div class="data_ed">
                            <label for="student_amount">Cantidad maxima de estudiantes (1 a 50)</label><br>
                            <input type="number" id="student_amount" name="student_amount" min="1" max="50" value="<?php echo $current_proyect['est_cantidad'];?>"><br>
                            <p><label for="student_profile">Perfil de estudiantes</label><br>
                            <textarea id="student_profile" name="student_profile" cols="30" rows="3" placeholder="*" ><?php echo $current_proyect['est_perfil']; ?></textarea></p>
                            <label for="hours_amount">Tiempo estimado de realizacion(1 a 1000h)</label><br>
                            <input type="number" name="hours_amount" min="1" max="1000" value="<?php echo $current_proyect['horas'];?>">
                        </div>
                        <div class="data_ed">
                            <label for="place">Lugar de realizacion</label><br>
                            <input type="text" name="place" placeholder="*" value="<?php echo $current_proyect['lugar'];?>"><br>
                            <label for="place_descr">Lugar descripcion</label><br>
                            <input type="text" id="place_descr" name="place_descr" placeholder="*" value="<?php echo $current_proyect['lugar_descr']; ?>">
                        </div>

                    </div>
                </div>
                <div class="description">
                    <h4>Objetivo de propuesta: </h4>
                    <textarea class="areadetexto" cols="80" rows="2" name="proyect_obj"><?php echo $current_proyect['objetivo']; ?></textarea>
                    <h4>Descripcion de propuesta: </h4>
                    <textarea class="areadetexto" cols="80" rows="3" name="proyect_descr"><?php echo $current_proyect['descripcion']; ?></textarea>
                    <br><br>
                    <div class="data_ed">
                            <legend>Datos de asesor</legend>
                            <label for="asesor_name">Nombre completo</label><br>
                            <input type="text" id="asesor_name" name="asesor_name" placeholder="*" value="<?php echo $current_proyect['asesor_nombre'];?>"><br>
                            <label for="asesor_tel">Telefono o celular</label><br>
                            <input type="tel" id="asesor_tel" name="asesor_tel" placeholder="*" value="<?php echo $current_proyect['asesor_tel'];?>"><br>
                            <label for="asesor_email">Email</label><br>
                            <input type="email" id="asesor_email" name="asesor_email" placeholder="*" value="<?php echo $current_proyect['asesor_email'];?>"><br><br>
                    </div>
                    <div class="data_ed">
                        <legend>Datos de supervisor</legend>
                        <label for="supervisor_name">Nombre</label><br>
                        <input type="text" id="supervisor_name" name="supervisor_name" placeholder="*" value="<?php echo $current_proyect['supervisor_nombre'];?>"><br>
                        <label for="supervisor_tel">Telefono de supervisor</label><br>
                        <input type="tel" name="supervisor_tel" placeholder="*" value="<?php echo $current_proyect['supervisor_tel'];?>"><br>
                        <label for="supervisor_email">Email de supervisor </label><br>
                        <input type="email" name="supervisor_email" placeholder="*" value="<?php echo $current_proyect['supervisor_email'];?>"><br>
                        <label for="organismo">Organismo proponente</label><br>
                        <input type="text" id="organismo" name="organismo" placeholder="*" value="<?php echo $current_proyect['organismo_nombre'];?>"><br>
                    </div>
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
