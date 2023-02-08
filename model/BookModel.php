<?php

class BookModel
{
    public $conn;

    public function __construct()
    {
         //WINDOWS
        //require_once("C:/xampp/htdocs/BookWormNew/config/Database.php");
        
        // MAC
        require_once("/Applications/MAMP/htdocs/BookWormNew/config/Database.php");

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
    // public function displayBooks($id)
    // {
    //     $query = $this->conn->query('SELECT * FROM books WHERE id=$id limit 1');
    //     return $query->fetch_all(MYSQLI_ASSOC); 
    //  }
    public function displayBooks ($isbn){
        $query=$this->conn->query("SELECT * FROM books WHERE isbn ='$isbn'");
        return $query ? $query->fetch_all():false;

    }
}

// instanciar conexion de la tabla
// $connection =  new BookModel();
 //var_dump($connection->conn);

// instanciar datos
// $connection =  new MemberModel();
// var_dump($connection->getMembers());

// instanciar datos
//$connection =  new BookModel();
//var_dump($connection->displayBooks($id));
