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
        $this->db->query("SELECT * FROM proyecto WHERE estado_id == 1");
        $result = $this->db->resultSet();
        return $result;
    }
}
