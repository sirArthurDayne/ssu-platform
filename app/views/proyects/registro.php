<?php require APPROOT.'/partials/header.php'?>

<body>
<?php require APPROOT.'/partials/navbar.php'?>
    <main>
        <h1><?php echo $data['title'];?></h1>
        <span class="success"><?php echo $data['confirmacion']; ?> </span>
        <form action="<?php echo URLROOT; ?>/proyects/register" method="POST" enctype="multipart/form-data">
            <fieldset class = "datos-g">
                <legend>Datos generales de propuesta</legend>
                <label for="proyect_name">Titulo o nombre:</label>
                <input type="text" id="proyect_name" name="proyect_name" placeholder="*"  >
                <span class="error"><?php echo $data['nameError']; ?></span>
                <br><label for="proyect_image">Portada a proyecto (url): </label>
                <input type="text" name="proyect_image" id="proyect_image">
                <span class="error"><?php echo $data['imagenError']; ?></span>
                <p><label for="proyect_date">Fecha de realizacion:</label>
                <input type="date" id="proyect_date" name="proyect_date"  placeholder="*"  min="2020-12-11"></p>
                <span class="error"><?php echo $data['dateError']; ?></span>
                <p><label for="proyect_obj">Objetivo:</label>
                <input type="text" id="proyect_obj" name="proyect_obj"   placeholder="*"  ></p>
                <span class="error"> <?php echo $data['objectiveError']; ?> </span>
                <p><label for="proyect_descr">Descripcion breve:</label>
                <textarea id="proyect_descr" name="proyect_descr" cols="30" rows="3" placeholder="*"  ></textarea></p>
                <span class="error"><?php echo $data['descriptionError']; ?></span>
            </fieldset>

            <fieldset>
                <legend>Nivel de Proyecto</legend>
                <label><input type="radio" name="level" value="voluntariado"  >Voluntariado</label><br>
                <label><input type="radio" name="level" value="labor_social"  >Labor social</label><br>
                <span class="error"> <?php echo $data['levelError']; ?> </span>
            </fieldset>

            <fieldset>
                <legend>Modalidad de servicio</legend>
                <label><input type="radio" name="modalidad" value="individual"  >Individual</label><br>
                <label><input type="radio" name="modalidad" value="grupo"  >Grupo</label><br>
                <span class="error"> <?php echo $data['modeError']; ?> </span>
            </fieldset>

            <fieldset>
                <legend>Datos para estudiantes</legend>
                <label for="student_amount">Cantidad maxima de estudiantes (1 a 50)</label>
                <input type="text" id="student_amount" name="student_amount"><br>
                <span class="error"><?php echo $data['student_amountError']; ?> </span>
                <p><label for="student_profile">Perfil de estudiantes</label>
                <textarea id="student_profile" name="student_profile" cols="30" rows="3" placeholder="*"  ></textarea></p>
                <span class="error"><?php echo $data['student_profileError']; ?> </span><br>
                <label for="hours_amount">Tiempo estimado de realizacion(1 a 1000h)</label>
                <input type="text" name="hours_amount">
                <span class="error"><?php echo $data['hours_amountError']; ?> </span>
            </fieldset>

            <fieldset>
                <legend>Datos del lugar</legend>
                <label for="place">Lugar de realizacion</label>
                <input type="text" name="place" placeholder="*"  ><br>
                <span class="error"><?php echo $data['placeError']; ?> </span><br>
                <label for="place_descr">Lugar descripcion</label>
                <input type="text" id="place_descr" name="place_descr" placeholder="*"  >
                <span class="error"><?php echo $data['lugar_descrError']; ?> </span>
            </fieldset>


            <fieldset>
                <legend>Datos de asesor</legend>
                <label for="asesor_name">Nombre completo</label>
                <input type="text" id="asesor_name" name="asesor_name" placeholder="*"  ><br>
                <span class="error"><?php echo $data['asesor_nameError']; ?> </span><br>
                <label for="asesor_tel">Telefono o celular</label>
                <input type="text" id="asesor_tel" name="asesor_tel" placeholder="*"  ><br>
                <span class="error"><?php echo $data['asesor_telError']; ?> </span><br>
                <label for="asesor_email">Email</label>
                <input type="email" id="asesor_email" name="asesor_email" placeholder="*"  ><br>
                <span class="error"><?php echo $data['asesor_emailError']; ?> </span>
            </fieldset>

            <fieldset>
                <legend>Datos de supervisor</legend>
                <label for="supervisor_name">Nombre</label>
                <input type="text" id="supervisor_name" name="supervisor_name" placeholder="*"  ><br>
                <span class="error"><?php echo $data['supervisor_nameError']; ?> </span><br>
                <label for="supervisor_tel">Telefono de supervisor</label>
                <input type="tel" name="supervisor_tel" placeholder="*"  ><br>
                <span class="error"><?php echo $data['supervisor_telError']; ?> </span><br>
                <label for="supervisor_email">Email de supervisor </label>
                <input type="email" name="supervisor_email" placeholder="*"  ><br>
                <span class="error"><?php echo $data['supervisor_emailError']; ?> </span><br>
                <label for="organismo">Organismo proponente</label>
                <input type="text" id="organismo" name="organismo" placeholder="*"  ><br>
                <span class="error"><?php echo $data['organismoError']; ?> </span>
            </fieldset>

            <button type="submit" data-message="enviar-propuesta" class="registrobtn">Enviar Formulario de Propuesta</button>
        </form>
        
    </main>

</body>
<?php require APPROOT.'/partials/footer.php'?>
