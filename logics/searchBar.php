<?php
// WINDOWS
require_once ("C:/xampp/htdocs/BookWormNew/controller/BookController.php");
// MAC
// require_once ("/Applications/MAMP/htdocs/BookWormNew/controller/BookController.php");
if(ISSET($_GET['search'])){
        $keyword = $_GET['keyword'];
        $sql = "select * from books where concat(title, author) like '%$keyword%'";
    } else {
        $controller->getBooks();
    }