<?php

class BookModel
{
    public $conn;

    public function __construct()
    {
         //WINDOWS
        // require_once("C:/xampp/htdocs/BookWormNew/config/Database.php");
        
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

    public function searchBar()
    {
     if(ISSET($_GET['search'])){
        $keyword = $_GET['keyword'];
        $query = $this->conn->query('SELECT * FROM books WHERE concat(title, author) LIKE '%$keyword%'');
    } 
    }

}

// instanciar conexion de la tabla
// $connection =  new BookModel();
 //var_dump($connection->conn);

// instanciar datos
// $connection =  new BookModel();
// var_dump($connection->getBooks());
