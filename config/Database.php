<?php

class Database {
   protected $dbname = 'alejandria';
   protected $servername = 'localhost';
   protected $username = "root";
   // protected $password = "";
   protected $password = "root";
   protected $DB = null;

   public function __construct()
   {
    try
    {
        $this->DB = new PDO("mysql:host=".$this->servername.";dbname=".$this->dbname, $this->username, $this->password);
    } 
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
}

    //    try {
    //        $connect = new mysqli ($this->servername, $this->username, $this->password, $this->db);
    //        return $connect;
    //    } catch (Throwable $th) {
    //        echo $th;
    //    }

   public function query($query)
        {
        return $this->DB->query($query);
        }
}

?>