<?php 

class Database
{
    public $servername = "localhost";
    public $username = "root";
    public $password = "";
     //public $password = ""; Para windons y linux
    public $db = "bookworms";

        public function connection()
    {
        try {
            $conn = new mysqli ($this->servername, $this->username, $this->password, $this->db);
            return $conn;
        } catch (Throwable $th) {
            var_dump($th);
        }
       
    }
}