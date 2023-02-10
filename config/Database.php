<?php

class Database {
    private $dbname = 'alejandria';
    private $servername = 'localhost';
    private $username = "root";
    private $password = "";
    //protected $password = "root";
   

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

    //    try {
    //        $connect = new mysqli ($this->servername, $this->username, $this->password, $this->db);
    //        return $connect;
    //    } catch (Throwable $th) {
    //        echo $th;
    //    }

}

?>