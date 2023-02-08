<?php

class BookModel
{
    public $connect;

    public function __construct()
    {
         //WINDOWS
        require_once("C:/xampp/htdocs/Alejandria-refactoring/config/Database.php");
        
        // MAC
        //require_once("/Applications/MAMP/htdocs/Alejandria-refactoring/config/Database.php");

        $db = new Database();
        $this->connect = $db->connection();
    }
 
    public function getBooks()
    {
        
        $query = $this->connect->query('SELECT * FROM alejandria');
        return $query->fetch_all(MYSQLI_ASSOC); 
    }
}