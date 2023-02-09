<?php
 include_once('c://xampp/htdocs/Alejandria-refactoring/config/Database.php');
//include_once('/Applications/MAMP/htdocs/Alejandria-refactoring/config/Database.php');
//require_once("/Applications/XAMPP/xamppfiles/htdocs/F5PHP/alejandria-refactoring/config/Database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Alejandría</title>
</head>

<body>
   <!-- WINDOWS -->
  <?php  include ("c:/xampp/htdocs/Alejandria-refactoring/components/navbar.php") ?>  
  <?php  include ("c:/xampp/htdocs/Alejandria-refactoring/view/main.php") ?>
  <?php  include ("c:/xampp/htdocs/Alejandria-refactoring/components/books.php") ?>

  <!-- MAC -->
  <?php //include ("/Applications/MAMP/htdocs/Alejandria-refactoring/components/navbar.php") ?>
  <?php //include ("/Applications/MAMP/htdocs/Alejandria-refactoring/components/books.php") ?>
  <?php // include ("/Applications/MAMP/htdocs/Alejandria-refactoring/view/main.php") ?>

  <?php //include ("/Applications/XAMPP/xamppfiles/htdocs/F5PHP/alejandria-refactoring/components/navbar.php") ?>
  <?php //include ("/Applications/XAMPP/xamppfiles/htdocs/F5PHP/alejandria-refactoring/components/books.php") ?>
  <?php //include ("/Applications/XAMPP/xamppfiles/htdocs/F5PHP/alejandria-refactoring/view/main.php") ?>


</body>
<link rel="stylesheet" href="/css/mi.css?uuid=<?php echo uniqid();?>">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>