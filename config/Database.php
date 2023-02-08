<?php

class Database {
   protected $dbname = 'PDO';
   protected $servername = 'localhost';
   protected $username = "root";
   // protected $password = "";
   protected $password = "root";
   protected $DB = null;

   public function connection()
   {
    try
    {
        $this->DB = new PDO("mysql:host=".$this->servername.";dbname=".$this->dbname."", $this->username, $this->password);
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

   public function query()
        {
        return $this->DB->query('SELECT * FROM alejandria WHERE isbn');
        }
}

?>