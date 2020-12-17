<?php
    /*Validation code for the register input*/
function emptyField(& $incomingData)
{
    if(empty($incomingData['name']))
    {
        $incomingData['nameError'] = "Por favor, ingrese un titulo para el proyecto";
        return true;
    }
    if(empty($incomingData['imagen']))
    {
        $incomingData['imagenError'] = "Ingrese URL";
        return true;
    }
    if(empty($incomingData['date']))
    {
        $incomingData['dateError'] = "ingrese fecha de realizacion";
        return true;
    }
    if(empty($incomingData['objective']))
    {
        $incomingData['objectiveError'] = "Por favor, ingrese un objetivo";
        return true;
    }
    if(empty($incomingData['description']))
    {
        $incomingData['descriptionError'] = "Por favor, ingrese una descripcion";
        return true;
    }
    if(empty($incomingData['level']))
    {
        $incomingData['levelError'] = "Por favor, escoga un nivel de proyecto";
        return true;
    }
    if(empty($incomingData['mode']))
    {
        $incomingData['modeError'] = "Por favor, escoga un modo";
        return true;
    }
    if(empty($incomingData['student_amount']))
    {
        $incomingData['student_amountError'] = "Por favor, ingrese cantidad de estudiantes";
        return true;
    }
    if(empty($incomingData['student_profile']))
    {
        $incomingData['student_profileError'] = "Por favor, ingrese descripcion de estudiantes";
        return true;
    }
    if(empty($incomingData['hours_amount']))
    {
        $incomingData['hours_amountError'] = "Ingrese horas de labor social";
        return true;
    }
    if(empty($incomingData['place']))
    {
        $incomingData['placeError'] = "Por favor, ingrese un lugar";
        return true;
    }
    if(empty($incomingData['lugar_descr']))
    {
        $incomingData['lugar_descrError'] = "ingrese descripcion de lugar";
        return true;
    }
    if(empty($incomingData['asesor_name']))
    {
        $incomingData['asesor_nameError'] = "Ingrese nombre de asesor";
        return true;
    }
    if(empty($incomingData['asesor_tel']))
    {
        $incomingData['asesor_telError'] = "Ingrese telefono de asesor";
        return true;
    }
    if(empty($incomingData['asesor_email']))
    {
        $incomingData['asesor_emailError'] = "Ingrese email de asesor";
        return true;
    }
    if(empty($incomingData['supervisor_name']))
    {
        $incomingData['supervisor_nameError'] = "Ingrese nombre de supervisor";
        return true;
    }
    if(empty($incomingData['supervisor_tel']))
    {
        $incomingData['supervisor_telError'] = "Ingrese telefono de supervisor";
        return true;
    }
    if(empty($incomingData['asesor_email']))
    {
        $incomingData['supervisor_emailError'] = "Ingrese email de supervisor";
        return true;
    }
    if(empty($incomingData['organismo']))
    {
        $incomingData['organismoError'] = "Ingrese organismo proponente";
        return true;
    }
    //pass this validation
    return false;
}

function exceedCharacterLimit(& $incomingData)
{
    define("MAX_TITLE_SIZE", 75);
    define("MAX_URL_SIZE", 500);
    define("MAX_DESCR_SIZE", 200);
    define("MAX_INPUT_SIZE", 50);
    $out_message_title = "limite de " . MAX_TITLE_SIZE . " excedido";
    $out_message_url = "limite de " . MAX_URL_SIZE . " excedido";
    $out_message_input = "limite de " . MAX_INPUT_SIZE . " excedido";
    $out_message_descr = "limite de " . MAX_DESCR_SIZE . " excedido";

    if(strlen($incomingData['name']) > MAX_TITLE_SIZE)
    {
        $incomingData['nameError'] = $out_message_title;
        return true;
    }
    if(strlen($incomingData['imagen']) > MAX_URL_SIZE)
    {
        $incomingData['imagenError'] = $out_message_url;
        return true;
    }
    if(strlen($incomingData['objective']) > MAX_INPUT_SIZE)
    {
        $incomingData['objectiveError'] = $out_message_input;
        return true;
    }
    if(strlen($incomingData['description']) > MAX_DESCR_SIZE)
    {
        $incomingData['descriptionError'] = $out_message_descr;
        return true;
    }
    if(strlen($incomingData['place']) > MAX_INPUT_SIZE)
    {
        $incomingData['placeError'] = $out_message_input;
        return true;
    }
    if(strlen($incomingData['lugar_descr']) > MAX_DESCR_SIZE)
    {
        $incomingData['lugar_descrError'] = $out_message_descr;
        return true;
    }
    if(strlen($incomingData['student_profile']) > MAX_DESCR_SIZE)
    {
        $incomingData['student_profileError'] = $out_message_descr;
        return true;
    }
    if(strlen($incomingData['asesor_name']) > MAX_INPUT_SIZE)
    {
        $incomingData['asesor_nameError'] = $out_message_input;
        return true;
    }
    if(strlen($incomingData['asesor_email']) > MAX_INPUT_SIZE)
    {
        $incomingData['asesor_emailError'] = $out_message_input;
        return true;
    }
    if(strlen($incomingData['supervisor_name']) > MAX_INPUT_SIZE)
    {
        $incomingData['supervisor_nameError'] = $out_message_input;
        return true;
    }
    if(strlen($incomingData['supervisor_email']) > MAX_INPUT_SIZE)
    {
        $incomingData['supervisor_emailError'] = $out_message_input;
        return true;
    }
    //pass this validation
    return false;
}

function notAlfaNumeric(& $incomingData)
{
    /* $text_regex = "/^[a-zA-Z0-9]*$/"; */
    $text_regex = "/^[a-z0-9 .\-]+$/i";//tambien permite expacios y guiones
    $out_message = "solo caracteres alfanumericos, guiones,espacios y puntos";
    if(!preg_match($text_regex, $incomingData['name']))
    {
        $incomingData['nameError'] = $out_message;
        return true;
    }
    if(!preg_match($text_regex, $incomingData['objective']))
    {
        $incomingData['objectiveError'] = $out_message;
        return true;
    }
    if(!preg_match($text_regex, $incomingData['description']))
    {
        $incomingData['descriptionError'] = $out_message;
        return true;
    }
    if(!preg_match($text_regex, $incomingData['student_profile']))
    {
        $incomingData['student_profileError'] = $out_message;
        return true;
    }
    if(!preg_match($text_regex, $incomingData['place']))
    {
        $incomingData['placeError'] = $out_message;
        return true;
    }
    if(!preg_match($text_regex, $incomingData['lugar_descr']))
    {
        $incomingData['lugar_descrError'] = $out_message;
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
    if(!preg_match($number_regex, $incomingData['asesor_tel']))
    {
        $incomingData['asesor_telError'] = $out_message;
        return true;
    }
    if(!preg_match($number_regex, $incomingData['supervisor_tel']))
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
    if(!is_numeric($amount1))
    {
        $incomingData['student_amountError'] = $out_message;
        return true;
    }
    if(!is_numeric($amount2))
    {
        $incomingData['hours_amountError'] = $out_message;
        return true;
    }
    return false;
}
