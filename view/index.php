<?php require_once("/Applications/XAMPP/xamppfiles/htdocs/F5PHP/alejandria-refactoring/controller/BookController.php");
$controller = new BookController();
$books = $controller->getBooks();

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
    <title>Document</title>
</head>
<body>
    <?php foreach($books as $book): ?>
        <main class="product-list">
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
        </main>
        <?php endforeach; ?>
    
</body>
</html>