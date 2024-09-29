<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $price = $_POST['price'];

    // Xử lý tải lên hình ảnh
    $image = $_FILES['image']['name'];
    $target = "images/" . basename($image);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        // Thêm sách vào cơ sở dữ liệu
        $stmt = $pdo->prepare("INSERT INTO books (title, author, price, image) VALUES (?, ?, ?, ?)");
        $stmt->execute([$title, $author, $price, $image]);
        header('Location: index.php?success=true');
        exit;
    } else {
        $error = "Failed to upload image.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Add Book</title>
</head>
<body>
    <div class="container">
        <h1>Add New Book</h1>
        <form method="POST" enctype="multipart/form-data">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
            
            <label for="author">Author:</label>
            <input type="text" id="author" name="author" required>
            
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" required step="0.01">

            <label for="image">Image:</label>
            <input type="file" id="image" name="image" accept="image/*" required>
            
            <button type="submit" class="btn">Add Book</button>
        </form>
        <a class="btn" href="index.php">Back to Book List</a>
    </div>
</body>
</html>
