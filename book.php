<?php
include 'db.php';
$id = $_GET['id'];

$query = $pdo->prepare('SELECT * FROM books WHERE id = ?');
$query->execute([$id]);
$book = $query->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title><?php echo $book['title']; ?></title>
</head>
<body>
    <h1><?php echo $book['title']; ?></h1>
    <img src="images/<?php echo $book['image']; ?>" alt="<?php echo $book['title']; ?>">
    <p><strong>Author:</strong> <?php echo $book['author']; ?></p>
    <p><strong>Price:</strong> $<?php echo $book['price']; ?></p>
    <p><?php echo $book['description']; ?></p>
    <a href="index.php">Back to list</a>
</body>
</html>
