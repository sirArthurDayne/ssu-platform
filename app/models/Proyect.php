<?php
//Only the model can access the DB
class Proyect {
    private $db;
    //field for making a proyect
    public function __construct()
    {
        $this->db = new Database;
    }

    /*functions querys that get data back*/
    public function registerProyect($proposal)
    {
        //prepare query
        $sql = "INSERT INTO proyecto (titulo,objetivo,descripcion,nivel,";
        $sql.= "modalidad,est_cantidad,est_perfil,lugar,";
        $sql.= "fecha,horas,asesor_nombre,asesor_tel,";
        $sql.= "asesor_email,supervisor_nombre,supervisor_tel,supervisor_email,";
        $sql.= "organismo_nombre, imagen, lugar_descr)";
        $sql.= "VALUES('".$proposal['name']."','".$proposal['objective']."','".$proposal['description']."','".$proposal['level']."','".$proposal['mode']."','";
        $sql.= $proposal['student_amount']."','".$proposal['student_profile']."','".$proposal['place']."','".$proposal['date']."','";
        $sql.= $proposal['hours_amount']."','".$proposal['asesor_name']."','".$proposal['asesor_tel']."','".$proposal['asesor_email']."','";
        $sql.= $proposal['supervisor_name']."','".$proposal['supervisor_tel']."','".$proposal['supervisor_email']."','".$proposal['organismo']. "','". $proposal['imagen']. "','" . $proposal['lugar_descr'] . "');";

        //execute query
        return $this->db->query($sql);
    }
    public function getProyects()
    {
        //recover query
        $this->db->query("SELECT * FROM proyecto");
        $result = $this->db->resultSet();
        return $result;
    }

    public function getInProcessProyects()
    {
        //retorna solo proyectos que esten marcados como ENPROCESO en la BD

        $this->db->query("SELECT * FROM proyecto WHERE estado_id = 1");
        $result = $this->db->resultSet();
        return $result;
    }

    /** Retorna los proyectos segun su estado */
    public function getProyectByState($current_state)
    {
        $sql = "SELECT * FROM proyecto WHERE estado_id = " . $current_state . " ;";
        $this->db->query($sql);
        $result = $this->db->resultSet();
        return $result;
    }


    /*cambiar estado de proyecto */
    public function setProyectState($proyectId, $state_value)
    {
        //ESTADOS: 1=> ENPROCESO
        //ESTADOS: 2=> APROBADOS
        //ESTADOS: 3=> RECHAZADOS
        $sql = "UPDATE proyecto SET estado_id = ".$state_value . " WHERE id = ". $proyectId . ";";
        if($this->db->query($sql)) return true;

        return false;
    }

    /*Retorna la propuesta/proyecto en base a su id */
    public function getEditProyect($proyectId)
    {
        $sql = "SELECT * from proyecto WHERE id = " . $proyectId . ";";

        $this->db->query($sql);
        $result = $this->db->singleResult();
        return $result;

    }

    /*Actualiza informacion de proyecto editado */
    public function insertIntoCurrentProyect($new_data, $proyectId)
    {
        $sql = "UPDATE proyecto SET titulo = '" .$new_data['name'] ."' , objetivo = '" .$new_data['objective'] . "', descripcion = '" .
            $new_data['description'] . "', nivel = '" . $new_data['level'] .  "' , modalidad = '" . $new_data['mode'] ."', est_cantidad = '".
            $new_data['stud_amount'] . "', est_perfil = '" . $new_data['stud_profile'] . "', lugar = '". $new_data['place'] ."', horas = '" . $new_data['hours']. "', asesor_nombre = '" .
            $new_data['asesor_name'] . "', asesor_tel = '" . $new_data['asesor_tel'] . "', asesor_email = '" . $new_data['asesor_email'] . "', supervisor_nombre = '" .
            $new_data['supervisor_name'] . "', supervisor_tel = '" . $new_data['supervisor_tel'] . "', supervisor_email = '" . $new_data['supervisor_email'] . "', organismo_nombre = '" .
            $new_data['organismo'] . "', imagen = '" .$new_data['imagen'] . "', lugar_descr = '" . $new_data['lugar_descr'] .
            "' WHERE id = " . $proyectId . ";";

        if ($this->db->query($sql)) return true;

        return false;
    }

    /*Agregar/Actualizar comentarios en proyecto editado o rechazado*/
    public function updateProyectComment($comment, $proyectId)
    {
        $sql = "UPDATE proyecto SET comentario = '" . $comment . "' WHERE id = " . $proyectId  . ";";

        if($this->db->query($sql)) return true;

        return false;
    }
}

