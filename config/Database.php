<?php

class Database {
    private $dbname = 'alejandria';
    private $servername = 'localhost';
    private $username = "root";
    private $password = "";

    public function connection()
   {
    try
    {
        $db = new mysqli($this->servername,$this->username, $this->password, $this->dbname);
        return $db;
    } 
    catch(Throwable $e)
        {
        var_dump($e);
        }
}

}

?>