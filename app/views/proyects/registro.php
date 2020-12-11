<?php require APPROOT.'/partials/header.php'?>

<body>
<?php require APPROOT.'/partials/navbar.php'?>
    <main>
        <h1><?php echo $data['title'];?></h1>
        <form action="<?php echo URLROOT; ?>/proyects/register" method="POST" enctype="multipart/form-data">
            <fieldset class = "datos-g">
                <legend>Datos generales de propuesta</legend>
                <label for="proyect_name">Titulo o nombre:</label>
                <input type="text" id="proyect_name" name="proyect_name" placeholder="*" required>
                <label for="proyect_image">Portada a proyecto (url): </label>
                <input type="text" name="proyect_image" id="proyect_image">
            <p><label for="proyect_date">Fecha de realizacion:</label>
                <input type="date" id="proyect_date" name="proyect_date"  placeholder="*" required></p>
                <p><label for="proyect_obj">Objetivo:</label>
                <input type="text" id="proyect_obj" name="proyect_obj"   placeholder="*" required></p>
                <p><label for="proyect_descr">Descripcion breve:</label>
                <textarea id="proyect_descr" name="proyect_descr" cols="30" rows="3" placeholder="*" required></textarea></p>
            </fieldset>

            <fieldset>
                <legend>Nivel de Proyecto</legend>
                <label><input type="radio" name="level" value="voluntariado" required>Voluntariado</label><br>
                <label><input type="radio" name="level" value="labor_social" required>Labor social</label><br>
            </fieldset>

            <fieldset>
                <legend>Modalidad de servicio</legend>
                <label><input type="radio" name="modalidad" value="individual" required>Individual</label><br>
                <label><input type="radio" name="modalidad" value="grupo" required>Grupo</label><br>
            </fieldset>

            <fieldset>
                <legend>Datos para estudiantes</legend>
                <label for="student_amount">Cantidad maxima de estudiantes (1 a 50)</label>
                <input type="number" id="student_amount" name="student_amount" min="1" max="50" required><br>
                <p><label for="student_profile">Perfil de estudiantes</label>
                <textarea id="student_profile" name="student_profile" cols="30" rows="3" placeholder="*" required></textarea></p>
                <label for="hours_amount">Tiempo estimado de realizacion(1 a 1000h)</label>
                <input type="number" name="hours_amount" min="1" max="1000" required>
            </fieldset>

            <fieldset>
                <legend>Datos del lugar</legend>
                <label for="place">Lugar de realizacion</label>
                <input type="text" name="place" placeholder="*" required><br>
                <label for="place_descr">Lugar descripcion</label>
                <input type="text" id="place_descr" name="place_descr" placeholder="*" required>
            </fieldset>


            <fieldset>
                <legend>Datos de asesor</legend>
                <label for="asesor_name">Nombre completo</label>
                <input type="text" id="asesor_name" name="asesor_name" placeholder="*" required><br>
                <label for="asesor_tel">Telefono o celular</label>
                <input type="tel" id="asesor_tel" name="asesor_tel" placeholder="*" required><br>
                <label for="asesor_email">Email</label>
                <input type="email" id="asesor_email" name="asesor_email" placeholder="*" required><br>
            </fieldset>

            <fieldset>
                <legend>Datos de supervisor</legend>
                <label for="supervisor_name">Nombre</label>
                <input type="text" id="supervisor_name" name="supervisor_name" placeholder="*" required><br>
                <label for="supervisor_tel">Telefono de supervisor</label>
                <input type="tel" name="supervisor_tel" placeholder="*" required><br>
                <label for="supervisor_email">Email de supervisor </label>
                <input type="email" name="supervisor_email" placeholder="*" required><br>
                <label for="organismo">Organismo proponente</label>
                <input type="text" id="organismo" name="organismo" placeholder="*" required><br>
            </fieldset>

            <button type="submit" data-message="enviar-propuesta" class="registrobtn">Enviar Formulario de Propuesta</button>
        </form>
    </main>

</body>
<?php require APPROOT.'/partials/footer.php'?>
</html>
