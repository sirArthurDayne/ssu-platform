<?php require APPROOT.'/partials/header.php'?>
<body>
    <?php require APPROOT.'/partials/navbar.php'?>
    <main>
        <h1><?php echo $data['title'];?></h1>
        <form action="<?php echo URLROOT; ?>/proyects/register" method="POST">
            <fieldset>
                <legend>datos generales de propuesta</legend>
                <label for="proyect_name">titulo o nombre:</label>
                <input type="text" id="proyect_name" name="proyect_name"  placeholder="*">
            <p><label for="proyect_date">fecha de realizacion:</label>
                <input type="date" id="proyect_date" name="proyect_date"  placeholder="*"></p>
                <p><label for="proyect_obj">objetivo:</label>
                <input type="text" id="proyect_obj" name="proyect_obj"   placeholder="*"></p>
                <p><label for="proyect_descr">descripcion breve:</label>
                <textarea id="proyect_descr" name="proyect_descr" cols="30" rows="3" placeholder="*"></textarea></p>
            </fieldset>

            <fieldset>
                <legend>nivel de Proyecto</legend>
                <label><input type="radio" name="level" value="voluntariado">voluntariado</label><br>
                <label><input type="radio" name="level" value="labor_social">labor social</label><br>
            </fieldset>

            <fieldset>
                <legend>modalidad de servicio</legend>
                <label><input type="radio" name="modalidad" value="individual">Individual</label><br>
                <label><input type="radio" name="modalidad" value="grupo">Grupo</label><br>
            </fieldset>

            <fieldset>
                <legend>datos para estudiantes</legend>
                <label for="student_amount">cantidad maxima de estudiantes (1 a 50)</label>
                <input type="number" id="student_amount" name="student_amount" min="1" max="50"><br>
                <p><label for="student_profile">perfil de estudiantes</label>
                <textarea id="student_profile" name="student_profile" cols="30" rows="3" placeholder="*"></textarea></p>
                <label for="hours_amount">tiempo estimado de realizacion(1 a 1000h)</label>
                <input type="number" name="hours_amount" min="1" max="1000">
            </fieldset>

            <fieldset>
                <legend>datos del lugar</legend>
                <label for="place">lugar de realizacion</label>
                <input type="text" name="place" placeholder="*">
                <label for="place_descr">lugar descripcion</label>
                <input type="text" id="place_descr" name="place_descr" placeholder="*">
            </fieldset>


            <fieldset>
                <legend>datos de asesor</legend>
                <label for="asesor_name">nombre completo</label>
                <input type="text" id="asesor_name" name="asesor_name" placeholder="*">
                <label for="asesor_tel">telefono o celular</label>
                <input type="tel" id="asesor_tel" name="asesor_tel" placeholder="*">
                <label for="asesor_email">email</label>
                <input type="email" id="asesor_email" name="asesor_email" placeholder="*">
            </fieldset>

            <fieldset>
                <legend>datos de supervisor</legend>
                <label for="supervisor_name">nombre</label>
                <input type="text" id="supervisor_name" name="supervisor_name" placeholder="*">
                <label for="supervisor_tel">telefono de supervisor</label>
                <input type="tel" name="supervisor_tel" placeholder="*">
                <label for="supervisor_email">email de supervisor </label>
                <input type="email" name="supervisor_email" placeholder="*">
                <label for="organismo">organismo proponente</label>
                <input type="text" id="organismo" name="organismo" placeholder="*">
            </fieldset>

            <button type="submit" data-message="enviar-propuesta">Enviar Formulario de Propuesta</button>
        </form>
    </main>

</body>


<?php require APPROOT.'/partials/footer.php'?>
