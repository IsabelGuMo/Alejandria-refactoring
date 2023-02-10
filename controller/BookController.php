<?php

class BookController
{
    private $model;

    public function __construct()
    {   
       require_once("/Applications/XAMPP/xamppfiles/htdocs/F5PHP/alejandria-refactoring/model/BookModel.php");

        $this->model = new BookModel();
    }

    public function getBooks()
    {
        return ($this->model->getBooks() ? $this->model->getBooks() : "there is no books");
    }
}
