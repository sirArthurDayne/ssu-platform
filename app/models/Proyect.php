<?php
//Only the model can access the DB
class Proyect {
    private $db;
    //field for making a proyect
    public function __construct()
    {
        $this->db = new Database;
    }

    //functions querys that get data back
    public function getProyects()
    {
        //test query
        $this->db->query("SELECT user_name, password FROM user");
        $result = $this->db->resultSet();
        return $result;
    }

}
