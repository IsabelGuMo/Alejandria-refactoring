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
    <title>Document</title>
</head>
<body>
    <?php foreach($books as $book): ?>
        <h5 class="card-title"><?php echo $book['titulo']; ?></h5>
        <?php endforeach; ?>
</body>
</html>