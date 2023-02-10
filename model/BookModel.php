<?php

class BookModel
{
    public $connect;

    public function __construct()
    {
        require_once("/Applications/XAMPP/xamppfiles/htdocs/F5PHP/alejandria-refactoring/config/Database.php");

        $db = new Database();
        $this->connect = $db->connection();
    }
 
    public function getBooks()
    {
        
        $query = $this->connect->query('SELECT * FROM alejandria');
        return $query->fetch_all(MYSQLI_ASSOC); 
    } 
}
