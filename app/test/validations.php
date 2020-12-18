<?php
    /*Validation code for the register input*/
function emptyField(& $incomingData)
{
    if(empty($incomingData['name']))
    {
        $incomingData['nameError'] = "Debe colocar un titulo para el proyecto";
        return true;
    }
    if(empty($incomingData['imagen']))
    {
        $incomingData['imagenError'] = "Debe colocar un URL para la imagen del proyecto.";
        return true;
    }
    if(empty($incomingData['date']))
    {
        $incomingData['dateError'] = "Debe colocar una fecha de realizacion";
        return true;
    }
    if(empty($incomingData['objective']))
    {
        $incomingData['objectiveError'] = "Debe colocar un objetivo para el proyecto";
        return true;
    }
    if(empty($incomingData['description']))
    {
        $incomingData['descriptionError'] = "Debe colocar una descripción para el proyecto";
        return true;
    }
    if(empty($incomingData['level']))
    {
        $incomingData['levelError'] = "Debe escoger un nivel de proyecto";
        return true;
    }
    if(empty($incomingData['mode']))
    {
        $incomingData['modeError'] = "Debe escoger una modalidad";
        return true;
    }
    if(empty($incomingData['student_amount']))
    {
        $incomingData['student_amountError'] = "Debe colocar una cantidad de estudiantes";
        return true;
    }
    if(empty($incomingData['student_profile']))
    {
        $incomingData['student_profileError'] = "Debe colocar un perfil de estudiantes";
        return true;
    }
    if(empty($incomingData['hours_amount']))
    {
        $incomingData['hours_amountError'] = "Debe colocar el tiempo estimado";
        return true;
    }
    if(empty($incomingData['place']))
    {
        $incomingData['placeError'] = "Debe colocar un lugar de realizacion";
        return true;
    }
    if(empty($incomingData['lugar_descr']))
    {
        $incomingData['lugar_descrError'] = "Debe colocar una descripcion del lugar";
        return true;
    }
    if(empty($incomingData['asesor_name']))
    {
        $incomingData['asesor_nameError'] = "Debe colocar el nombre del asesor";
        return true;
    }
    if(empty($incomingData['asesor_tel']))
    {
        $incomingData['asesor_telError'] = "Debe colocar el telefono del asesor";
        return true;
    }
    if(empty($incomingData['asesor_email']))
    {
        $incomingData['asesor_emailError'] = "Debe colocar el email del asesor";
        return true;
    }
    if(empty($incomingData['supervisor_name']))
    {
        $incomingData['supervisor_nameError'] = "Debe colocar el nombre del supervisor";
        return true;
    }
    if(empty($incomingData['supervisor_tel']))
    {
        $incomingData['supervisor_telError'] = "Debe colocar el telefono del supervisor";
        return true;
    }
    if(empty($incomingData['asesor_email']))
    {
        $incomingData['supervisor_emailError'] = "Debe colocar el email del supervisor";
        return true;
    }
    if(empty($incomingData['organismo']))
    {
        $incomingData['organismoError'] = "Debe colocar el organismo proponente";
        return true;
    }
    //pass this validation
    return false;
}

function exceedCharacterLimit(& $incomingData)
{
    define("MAX_TITLE_SIZE", 75);
    define("MAX_URL_SIZE", 500);
    define("MAX_OBJET_SIZE", 200);
    define("MAX_DESCR_SIZE", 250);
    define("MAX_INPUT_SIZE", 50);

    if(strlen($incomingData['name']) > MAX_TITLE_SIZE)
    {
        $incomingData['nameError'] = "El titulo es demasiado largo el limite es de " . MAX_TITLE_SIZE .".";
        return true;
    }
    if(strlen($incomingData['imagen']) > MAX_URL_SIZE)
    {
        $incomingData['imagenError'] = "El URL de la imagen es demasiado largo el limite es de " . MAX_URL_SIZE . ".";
        return true;
    }
    if(strlen($incomingData['objective']) > MAX_OBJET_SIZE)
    {
        $incomingData['objectiveError'] = "El objetivo del proyecto es demasiado largo el limite es de " . MAX_OBJET_SIZE . ".";
        return true;
    }
    if(strlen($incomingData['description']) > MAX_DESCR_SIZE)
    {
        $incomingData['descriptionError'] = "La descripción del proyecto es demasiado larga el limite es de " . MAX_DESCR_SIZE . ".";
        return true;
    }
    if(strlen($incomingData['place']) > MAX_INPUT_SIZE)
    {
        $incomingData['placeError'] = "El lugar es demasiado largo el limite es de " . MAX_INPUT_SIZE . ".";
        return true;
    }
    if(strlen($incomingData['lugar_descr']) > MAX_OBJET_SIZE)
    {
        $incomingData['lugar_descrError'] = "La descripción del lugar es demasiado larga el limite es de " . MAX_OBJET_SIZE . ".";;
        return true;
    }
    if(strlen($incomingData['student_profile']) > MAX_OBJET_SIZE)
    {
        $incomingData['student_profileError'] = "El perfil de estudiante es demasiado largo el limite es de " . MAX_DESCR_SIZE . ".";
        return true;
    }
    if(strlen($incomingData['asesor_name']) > MAX_INPUT_SIZE)
    {
        $incomingData['asesor_nameError'] = "El nombre del asesor es demasiado largo el limite es de " . MAX_INPUT_SIZE . ".";
        return true;
    }
    if(strlen($incomingData['asesor_email']) > MAX_INPUT_SIZE)
    {
        $incomingData['asesor_emailError'] = "El email del asesor es demasiado largo el limite es de " . MAX_INPUT_SIZE . ".";
        return true;
    }
    if(strlen($incomingData['supervisor_name']) > MAX_INPUT_SIZE)
    {
        $incomingData['supervisor_nameError'] = "El nombre del supervisor es demasiado largo el limite es de " . MAX_INPUT_SIZE . ".";
        return true;
    }
    if(strlen($incomingData['supervisor_email']) > MAX_INPUT_SIZE)
    {
        $incomingData['supervisor_emailError'] = "El email del supervisor es demasiado largo el limite es de " . MAX_INPUT_SIZE . ".";
        return true;
    }
    //pass this validation
    return false;
}

function notAlfaNumeric(& $incomingData)
{
    /* $text_regex = "/^[a-zA-Z0-9]*$/"; */
    $text_regex = "/^[a-zA-Z0-9 .\-]+$/i";//tambien permite expacios y guiones
    $out_message = "solo caracteres alfanumericos, guiones,espacios y puntos";
    if(!preg_match($text_regex, $incomingData['name']))
    {
        $incomingData['nameError'] = $out_message;
        return true;
    }
    if(!preg_match($text_regex, $incomingData['place']))
    {
        $incomingData['placeError'] = $out_message;
        return true;
    }
    if(!preg_match($text_regex, $incomingData['asesor_name']))
    {
        $incomingData['asesor_nameError'] = $out_message;
        return true;
    }
    if(!preg_match($text_regex, $incomingData['supervisor_name']))
    {
        $incomingData['supervisor_nameError'] = $out_message;
        return true;
    }
    return false;
}

function notValidEmail(& $incomingData)
{
    $out_message = "error, correo invalido";
    if(!filter_var($incomingData['asesor_email'], FILTER_VALIDATE_EMAIL))
    {
        $incomingData['asesor_emailError'] = $out_message;
        return true;
    }
    if(!filter_var($incomingData['supervisor_email'], FILTER_VALIDATE_EMAIL))
    {
        $incomingData['supervisor_emailError'] = $out_message;
        return true;
    }
    return false;
}

function notValidPhoneNumber(& $incomingData)
{
    $number_regex = "/[\d]+\-?[\d]+/";//permite numeros con guiones o sin guiones

    $out_message = "numero de telefono no valido";
    if(!preg_match($number_regex, $incomingData['asesor_tel']) || strlen($incomingData['asesor_tel']) > 8 ||  strlen($incomingData['asesor_tel']) < 7)
    {
        $incomingData['asesor_telError'] = $out_message;
        return true;
    }
    if(!preg_match($number_regex, $incomingData['supervisor_tel']) || strlen($incomingData['supervisor_tel']) > 8 || strlen($incomingData['supervisor_tel']) < 7)
    {
        $incomingData['supervisor_telError'] = $out_message;
        return true;
    }
    return false;
}

function notAValidNumber(& $incomingData)
{
    /* $validNumber_regex = "/[^0-9]+$/";//solo numeros positivos */
    $out_message = "numero no valido";
    $amount1 = (int)$incomingData['student_amount'];
    $amount2 = (int)$incomingData['hours_amount'];
    if(!is_numeric($amount1) <= 0 || !is_numeric($amount1) >= 50)
    {
        $incomingData['student_amountError'] = $out_message;
        return true;
    }
    if(!is_numeric($amount2) <= 0 || !is_numeric($amount2) >= 1000)
    {
        $incomingData['hours_amountError'] = $out_message;
        return true;
    }
    return false;
}
