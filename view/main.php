<!-- <?php
//for MAC
//require_once("/Applications/MAMP/htdocs/Alejandria-refactoring/controller/BookController.php");
//require_once("/Applications/MAMP/htdocs/Alejandria-refactoring/config/Database.php");
require_once("/Applications/XAMPP/xamppfiles/htdocs/F5PHP/alejandria-refactoring/controller/BookController.php");
require_once("/Applications/XAMPP/xamppfiles/htdocs/F5PHP/alejandria-refactoring/config/Database.php");

//for Windows: 
 /* require_once("c:/xampp/htdocs/Alejandria-refactoring/controller/BookController.php");
 require_once("c:/xampp/htdocs/Alejandria-refactoring/config/Database.php"); */
 $connect = new Database();
/* $connect = new Database(); */
$result = $controller->getBooks();
// var_dump($result);
?>
    <main class="product-list">
    
    <?php
           $result = $connect->query("SELECT * FROM alejandria");
           $rows = $result->fetchAll()
      ?>
       <?php 
        foreach($rows as $book):  
        ?>
    
        <div class="card card-position" style="width: 18rem; margin-top: 2.5rem;">
        <?php if (isset($book['img']) && !empty($book['img']) && file_exists('assets/images/' . $book['img'])): ?>
            <img src="assets/images/<?php echo $book['img']; ?>" class="card-img-top" alt="<?php echo $book['titulo']; ?>">
        <?php else : ?>
            <img src="./assets/images/coverNotAvailable.png" class="card-img-top" alt="<?php echo $book['titulo']; ?>">
        <?php endif; ?>
            <div class="card-body">
                <h5 class="card-title"><?php echo $book['titulo']; ?></h5>
                <p class="card-text"><?php echo $book['autor']; ?></p>
                <p class="card-text"><?php echo $book['editorial']; ?></p>
                <a href="bookDetail.php?isbn=<?php echo $book['isbn']; ?>" class="btn btn-detail btn-warning">Ver detalle</a>
                <a href="form.php?isbn=<?php echo $book['isbn']; ?>">
                    <i class="bi bi-pencil-square" style="font-size:30px; color:#84D2C5;"></i>
                </a>
                <a class= "submit" href="./delete.php?isbn=<?php echo $book['isbn']; ?>">
                    <i class="bi bi-trash3" style="font-size:30px; color:#84D2C5;"></i>
                </a>
            </div>
        </div>
        <?php endforeach; ?>  

</main> -->