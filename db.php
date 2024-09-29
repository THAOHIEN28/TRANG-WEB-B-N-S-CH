<?php
$host = 'localhost';
$db   = 'bookstore'; // Đảm bảo bạn đã tạo cơ sở dữ liệu này
$user = 'root'; // Tên người dùng
$pass = ''; // Mật khẩu

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
