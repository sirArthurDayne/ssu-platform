<?php
    class Database {
        private $db_host = DB_HOST;
        private $db_user = DB_USER;
        private $db_pass = DB_PASSWORD;
        private $db_name = DB_NAME;
        private $db_port = DB_PORT;

        private $statement;//almacenar resultado del query
        private $db_handler;//ejecutara el query
        private $error_handler;//manejo de errores

        public function __construct()
        {
            $this->db_handler = new mysqli($this->db_host, $this->db_user, $this->db_pass,
                $this->db_name, $this->db_port);

            if($this->db_handler->connect_errno)
            {
                $this->error_handler = $this->db_handler->connect_error;
                die("Connection to DB failed!: " . $this->error_handler);
            }
            echo "connection to db working!";
            return $this->db_handler;
        }

        //Allows to make queries
        public function query($sql)
        {
            if($this->statement = $this->db_handler->query($sql))
            {
                 echo "Returned rows are: " . $this->resultAmount();
            }
            else {
                $this->error_handler = $this->db_handler->error;
                echo "DB_ERROR:<br> query:" . $sql . "<br>" . $this->error_handler;
            }
        }

        //return an array of data
        public function resultSet()
        {
            return $this->statement->fetch_all(MYSQLI_ASSOC);
        }
        //return an specific row of data
        public function singleResult()
        {
            return $this->statement->fetch_array(MYSQLI_ASSOC);
        }
        //return amount of rows
        public function resultAmount()
        {
            return $this->statement->num_rows;
        }

        function __destruct()
        {
            echo "destruyendo db connection";
            $this->statement->free_result();
            $this->db_handler->close();
        }

    }
?>
