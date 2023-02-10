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

    public function getBooks()
    {
        $query = $this->conn->query('SELECT * FROM books');
        return $query->fetch_all(MYSQLI_ASSOC); 
    }

    public function displayBooks($id)
    {
        $query = $this->conn->query("SELECT * FROM books WHERE id = '$id' limit 1");
        return $query->fetch_assoc();
    }

    public function deleteBook($id)
    {
        $query = $this->conn->query("DELETE FROM books WHERE id = '$id'");
        return ($query) ? false : true;
      
    }

    public function createBook($title, $author, $ISBN, $description, $book_image)
    {
        $query = $this->conn->query("INSERT INTO books (title, author, ISBN, description, book_image) VALUES ('" . $title . "', '" . $author . "', '" . $ISBN . "', '" . $description . "', '" . $book_image . "')");
        return $query;
    }



}
