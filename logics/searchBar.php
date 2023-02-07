<?php
require_once "../controller/BookController.php";
if(ISSET($_GET['search'])){
        $keyword = $_GET['keyword'];
        $sql = "select * from books where concat(title, author) like '%$keyword%'";
    } else {
        $sql = "SELECT * FROM books";
    }