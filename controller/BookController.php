<?php

class BookController
{
    public $model;

    public function __construct()
    {   
        //WINDOWS
         //require_once("C:/xampp/htdocs/Alejandria-refactoring/model/BookModel.php");
        // MAC
       //require_once("/Applications/MAMP/htdocs/Alejandria-refactoring/model/BookModel.php");
       require_once("/Applications/XAMPP/xamppfiles/htdocs/F5PHP/alejandria-refactoring/model/BookModel.php");

        $this->model = new BookModel();
    }

    public function getBooks()
    {
        return ($this->model->getBooks() ? $this->model->getBooks() : "there is no books");

    }
}
 