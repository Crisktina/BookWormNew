<?php 

class Database
{
    public $servername = "localhost";
    public $username = "root";
    public $password = "root";
    // public $password = ""; 
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