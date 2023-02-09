<?php

class BookController
{
    public $model;

    public function __construct()
    {   
        //WINDOWS
        // require_once("C:/xampp/htdocs/BookWormNew/model/BookModel.php");
        // MAC
        require_once("/Applications/MAMP/htdocs/BookWormNew/model/BookModel.php");

        $this->model = new BookModel();
    }

    //pregunta al modelo si ya ha obtenido los datos de la db
    public function getBooks()
    {
        return ($this->model->getBooks() ? $this->model->getBooks() : "There is no books");
    }

    public function displayBooks($id)
    {
        // return ($this->model->displayBooks($isbn)) ? $this->model->displayBooks($isbn) : header("Location:main.php");
      return ($this->model->displayBooks($id)) ? $this->model->displayBooks($id) : "This book is not available";
    }

    public function deleteBook($id)
    {
    return ($this->model->deleteBook($id)) ? $this->model->deleteBook($id) : "This book can't be deleted";	
	}

    public function createBook($title, $author, $ISBN, $description, $book_image)
    {
        if ($this->model->createBook($title, $author, $ISBN, $description, $book_image)) { 
        ?>
            <script>
                swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Success!',
                text: 'Your book has been saved.',
                type: 'success',
                }).then(function (result) {
                 window.location = "../index.php";
                })
                </script> 

    <?php
     }	else{
    echo "Oops! Something went wrong. Please try again later.";
    }
	}	
        

    

    }
