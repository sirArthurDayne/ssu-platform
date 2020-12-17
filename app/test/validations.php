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
    if(empty($incomingData['objetive']))
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
    if(empty($incomingData['place_descr']))
    {
        $incomingData['place_descrError'] = "ingrese descripcion de lugar";
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
    if(empty($incomingData['lugar_descr']))
    {
        $incomingData['lugar_descrError'] = "Ingrese descripcion de lugar";
        return true;
    }
    //pass this validation
    return false;
}

function exceedCharacterLimit(& $incomingData)
{

    return true;
}

function notAlfaNumeric(& $incomingData)
{
    //$text_regex = "/^[a-zA-Z0-9]*$/";
    return true;
}

function notValidEmail(& $incomingData)
{
    return true;
}

function notValidNumber(& $incomingData)
{
    //$number_regex = "/^[0-9]*$/";
    return true;
}
