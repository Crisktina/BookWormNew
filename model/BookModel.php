<?php

class BookModel
{
    public $conn;

    public function __construct()
    {
        require_once("../config/Database.php");
        
        $db = new Database();
        $this->conn = $db->connection();
    }
    // extraer datos de la tabla
    public function getBooks()
    {
        // a través del lenguaje sql lo selecciono todo (tiene o no tiene socias?)
        $query = $this->conn->query('SELECT * FROM books');
        return $query->fetch_all(MYSQLI_ASSOC); //obtener la clave valor
    }
}

// instanciar conexion de la tabla
// $connection =  new BookModel();
 //var_dump($connection->conn);

// instanciar datos
// $connection =  new MemberModel();
// var_dump($connection->getMembers());
