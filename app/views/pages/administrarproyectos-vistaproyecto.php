<?php require APPROOT.'/partials/header.php'?>
<body>
<div class="informacion">
<?php require APPROOT.'/partials/navbar.php'?>
            <center>
            <button class="boton">Aceptar</button>
            <button class="boton">Cancelar</button>
            </center>
        <div class="datos">
            <div class = "proy">
                 <h2>Nombre del Proyecto</h2>
                <input type="text" value="Limpieza de playa Veracruz" class="titulo">
                <img src="https://i.pinimg.com/originals/62/ac/2b/62ac2b87143d1b21bce9395281246ad9.jpg" alt="">
                <div class="datitos">
                    <div>
                        <h4>Modalidad:</h4>
                        <input type="text" value="Prescencial">
                    </div>
                    <div>
                        <h4>Nivel de Proyecto:</h4>
                        <input type="text" value="Nivel 1">
                    </div>
                </div>
            </div>
            <div class="desc">
                <h4>Objetivo:</h4>
                <textarea name="objetivo" id="objetivo" cols="80" rows="2" placeholder='Auto-Expanding Textarea' data-min-rows='3'>Recoger todos los desperdicios encontrados en la playa para que de esta manera pueda sea visitada de una manera más amena
                </textarea>
                
                <h4>Descripcion:</h4>
                <textarea name="descripcion" id="descripción" cols="80" rows="3">Los estudiantes estarán encargados de limpiar la plata Veracruz, en este se limpiará la basura y los estudiantes pondrán los desperdicios en sus debidos bancos de basura, así posteriormente se reciclarán todos los desperdicios que serán recogidos en la playa.
                </textarea> 
            </div>
        </div>
    </div>   
    </body>
<?php require APPROOT.'/partials/footer.php'?>