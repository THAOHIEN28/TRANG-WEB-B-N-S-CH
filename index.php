<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store</title>
    <link rel="stylesheet" href="styles.css"> <!-- Thay đổi đường dẫn nếu cần -->
    <style>
        /* CSS cho giao diện */
        body {
            font-family: 'Roboto', sans-serif;
            margin: 20px;
            background-color: #F5F5F5;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            text-align: center;
            font-weight: 600;
        }

        h2 {
            color: #555;
            font-weight: 500;
        }

        .btn, .submit-payment {
            display: inline-block;
            padding: 10px 15px;
            margin: 10px 0;
            background: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease-in-out;
            border: none;
        }

        .btn:hover, .submit-payment:hover {
            background: #0062cc;
        }

        .search-bar {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .search-bar input[type="text"] {
            flex: 1;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-right: 10px;
            font-size: 16px;
        }

        .book-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            gap: 20px;
            margin-bottom: 20px;
        }

        .book-item {
            background: #f9f9f9;
            border-radius: 5px;
            padding: 15px;
            text-align: center;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .book-image {
            width: 100px;
            height: 150px;
            object-fit: cover;
            margin-bottom: 10px;
        }

        .success-message {
            background: #d4edda;
            color: #155724;
            padding: 10px;
            border: 1px solid #c3e6cb;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .pagination {
            text-align: center;
        }

        .pagination a {
            display: inline-block;
            padding: 8px 12px;
            margin: 0 4px;
            border: 1px solid #007bff;
            color: #007bff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease-in-out;
        }

        .pagination a.active {
            background: #007bff;
            color: white;
        }

        .pagination a:hover {
            background: #0056b3;
            color: white;
        }

        .payment-section, .customer-service {
            margin-top: 30px;
            padding: 15px;
            background: #f9f9f9;
            border-radius: 5px;
        }

        .payment-section h2, .customer-service h2 {
            margin-bottom: 15px;
        }

        .payment-form label {
            margin-bottom: 5px;
        }

        .payment-form input {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Book Store</h1>
        
        <!-- Thanh tìm kiếm -->
        <div class="search-bar">
            <input type="text" placeholder="Tìm kiếm sách...">
            <button>Tìm kiếm</button>
        </div>

        <h2>Thêm Sách Mới</h2>

        <!-- Hiển thị sách trong lưới -->
        <div class="book-grid">
            <div class="book-item">
                <img src="path_to_your_image/book1.jpg" alt="Book Title" class="book-image">
                <div class="book-title">Title of Book 1</div>
                <div class="book-author">Author Name</div>
                <div class="book-price">$19.99</div>
                <a href="#" class="btn">Mua Ngay</a>
            </div>

            <div class="book-item">
                <img src="path_to_your_image/book2.jpg" alt="Book Title" class="book-image">
                <div class="book-title">Title of Book 2</div>
                <div class="book-author">Author Name</div>
                <div class="book-price">$24.99</div>
                <a href="#" class="btn">Mua Ngay</a>
            </div>

            <!-- Thêm sách khác tương tự -->
            <div class="book-item">
                <img src="path_to_your_image/book3.jpg" alt="Book Title" class="book-image">
                <div class="book-title">Title of Book 3</div>
                <div class="book-author">Author Name</div>
                <div class="book-price">$14.99</div>
                <a href="#" class="btn">Mua Ngay</a>
            </div>

            <div class="book-item">
                <img src="path_to_your_image/book4.jpg" alt="Book Title" class="book-image">
                <div class="book-title">Title of Book 4</div>
                <div class="book-author">Author Name</div>
                <div class="book-price">$29.99</div>
                <a href="#" class="btn">Mua Ngay</a>
            </div>
        </div>

        <div class="success-message">
            Thêm sách thành công!
        </div>

        <div class="pagination">
            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
        </div>

        <!-- Phần thanh toán -->
        <div class="payment-section">
            <h2>Thanh Toán</h2>
            <form class="payment-form">
                <label for="name">Họ Tên:</label>
                <input type="text" id="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" required>

                <label for="address">Địa Chỉ:</label>
                <input type="text" id="address" required>

                <label for="card">Số Thẻ:</label>
                <input type="text" id="card" required>

                <button type="submit" class="submit-payment">Xác Nhận Thanh Toán</button>
            </form>
        </div>

        <!-- Phần chăm sóc khách hàng -->
        <div class="customer-service">
            <h2>Chăm Sóc Khách Hàng</h2>
            <p>Nếu bạn có bất kỳ câu hỏi nào, hãy liên hệ với chúng tôi qua email: support@bookstore.com</p>
            <p>Hotline: 123-456-7890</p>
        </div>
    </div>
</body>
</html>
