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
        $sql.= "organismo_nombre)";
        $sql.= "VALUES('".$proposal['name']."','".$proposal['objective']."','".$proposal['description']."','".$proposal['level']."','".$proposal['mode']."','";
        $sql.= $proposal['student_amount']."','".$proposal['student_profile']."','".$proposal['place']."','".$proposal['date']."','";
        $sql.= $proposal['hours_amount']."','".$proposal['asesor_name']."','".$proposal['asesor_tel']."','".$proposal['asesor_email']."','";
        $sql.= $proposal['supervisor_name']."','".$proposal['supervisor_tel']."','".$proposal['supervisor_email']."','".$proposal['organismo']."');";

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

    /*Retorna la propuesta a editar */
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
            $new_data['description'] . "', nivel = '" . $new_data['level'] .  "' , modalidad = '" . $new_data['mode'] . 
            "' WHERE id = " . $proyectId . ";";
        
        if ($this->db->query($sql)) return true;
        
        return false;
    }
}