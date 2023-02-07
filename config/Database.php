<?php 

class Database
{
    public $servername = "localhost";
    public $username = "root";
    public $password = "";
     //public $password = ""; Para windons y linux
    public $db = "bookworms";

    /*public $DB_SERVER = "localhost";
    public $DB_USERNAME = "root";
    public $DB_PASSWORD = "root";
    //public $DB_PASSWORD = ""; Para windons y linux
    public $DB_NAME = "bookworms";
    //$db = $DB_NAME*/

    public function connection()
    {
        try {
            $conn = new mysqli ($this->servername, $this->username, $this->password, $this->db);
            return $conn;
        } catch (Throwable $th) {
            var_dump($th);
        }
        /*try{
            $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e){
            die("ERROR: Could not connect. " . $e->getMessage());
        }*/
    }
}