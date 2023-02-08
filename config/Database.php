<?php

class Database {
   public $servername = 'localhost';
   public $username = "root";
   public $password = "";
// public $password = "root";
   public $db = "alejandria";

   public function connection()
   {
       try {
           $connect = new mysqli ($this->servername, $this->username, $this->password, $this->db);
           return $connect;
       } catch (Throwable $th) {
           var_dump($th);
       }
   }
}
?>