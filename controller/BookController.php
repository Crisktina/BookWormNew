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
        // QUITAR EL TERNARIO, SE LLAMA DOS VECES
      return ($this->model->displayBooks($id)) ? $this->model->displayBooks($id) : "This book is not available";
    }

    public function deleteBook($id)
    {
        if ($this->model->deleteBook($id)) {
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

    <?php } "Oops! Something went wrong. Please try again later.";
         
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
        
    public function searchBooks($keyword)
    {
      return $this->model->searchBooks($keyword);
    }

    

}
