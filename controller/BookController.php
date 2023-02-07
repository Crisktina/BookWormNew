<?php

class BookController
{
    public $model;

    public function __construct()
    {
        require_once("../model/BookModel.php");
        $this->model = new BookModel();
    }
    //pregunta al modelo si ya ha obtenido los datos de la db
    public function getBooks()
    {
        return ($this->model->getBooks() ? $this->model->getBooks() : "there is no books");

    }
}
//ver si esta haciendo la llamada a los miembros
 