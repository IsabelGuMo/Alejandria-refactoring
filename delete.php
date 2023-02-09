<?php

         //WINDOWS
         require_once("C:/xampp/htdocs/Alejandria-refactoring/config/Database.php");
        
        // MAC
        //require_once("/Applications/MAMP/htdocs/Alejandria-refactoring/config/Database.php");
       // require_once("/Applications/XAMPP/xamppfiles/htdocs/F5PHP/alejandria-refactoring/config/Database.php");

$isbn = $_GET['isbn'];

$sql = "DELETE FROM alejandria WHERE isbn = '$isbn'";
$query= mysqli_query($connect, $sql);

if($query){
header('location: ./index.php');
}

?>