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
        return ($this->model->getBooks() ? $this->model->getBooks() : "there is no books");

    }
    public function displayBooks($id)
    {
        // return ($this->model->displayBooks($isbn)) ? $this->model->displayBooks($isbn) : header("Location:main.php");
      return ($this->model->displayBooks($id)) ? $this->model->displayBooks($id) : "no funciona";
    }
        public function deleteBook($id){

        return ($this->model->deleteBook($id)) ? $this->model->deleteBook($id) : "hello" ;
			
			}	
        

        // return ($this->model->displayBooks($id)) ? header("Location:../view/display.php/id=".$id) : "no funciona";

    }
