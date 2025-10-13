<?php
include 'config.php';

// Lấy thông tin sản phẩm
$stmt = $pdo->query("SELECT * FROM products WHERE id = 1");
$product = $stmt->fetch(PDO::FETCH_ASSOC);

// Lấy đánh giá
$reviews_stmt = $pdo->prepare("SELECT * FROM reviews WHERE product_id = ? ORDER BY created_at DESC LIMIT 3");
$reviews_stmt->execute([1]);
$reviews = $reviews_stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iPhone 17 ProMax - Apple</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Helvetica Neue', Arial, sans-serif;
        }
        
        body {
            background-color: #f5f5f7;
            color: #1d1d1f;
            line-height: 1.6;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        header {
            background: #000;
            color: #fff;
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #fff;
            text-decoration: none;
        }
        
        .nav-links {
            display: flex;
            list-style: none;
        }
        
        .nav-links li {
            margin-left: 30px;
        }
        
        .nav-links a {
            color: #fff;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s;
        }
        
        .nav-links a:hover {
            color: #2997ff;
        }
        
        .hero {
            background: linear-gradient(135deg, #000 0%, #333 100%);
            color: #fff;
            padding: 100px 0;
            text-align: center;
        }
        
        .hero h1 {
            font-size: 56px;
            margin-bottom: 10px;
            font-weight: 700;
        }
        
        .hero p {
            font-size: 28px;
            margin-bottom: 20px;
            font-weight: 300;
        }
        
        .hero .price {
            font-size: 24px;
            color: #86868b;
            margin-bottom: 30px;
        }
        
        .btn {
            display: inline-block;
            background: #0071e3;
            color: #fff;
            padding: 12px 25px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 500;
            transition: background 0.3s;
        }
        
        .btn:hover {
            background: #0077ed;
        }
        
        .features {
            padding: 80px 0;
            background: #fff;
        }
        
        .section-title {
            text-align: center;
            font-size: 40px;
            margin-bottom: 50px;
            font-weight: 600;
        }
        
        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
        }
        
        .feature-card {
            text-align: center;
            padding: 30px;
            border-radius: 18px;
            background: #f5f5f7;
            transition: transform 0.3s;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
        }
        
        .feature-icon {
            font-size: 48px;
            margin-bottom: 20px;
            color: #0071e3;
        }
        
        .feature-card h3 {
            font-size: 24px;
            margin-bottom: 15px;
        }
        
        .reviews {
            padding: 80px 0;
            background: #f5f5f7;
        }
        
        .review-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .review-card {
            background: #fff;
            padding: 30px;
            border-radius: 18px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .review-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }
        
        .customer-name {
            font-weight: 600;
            font-size: 18px;
        }
        
        .rating {
            color: #ff9500;
        }
        
        footer {
            background: #000;
            color: #86868b;
            padding: 50px 0 20px;
            text-align: center;
        }
        
        .footer-links {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 30px;
        }
        
        .footer-links a {
            color: #86868b;
            text-decoration: none;
            margin: 0 15px;
            font-size: 14px;
        }
        
        .footer-links a:hover {
            color: #fff;
        }
        
        .copyright {
            font-size: 12px;
            margin-top: 20px;
        }
        
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 40px;
            }
            
            .hero p {
                font-size: 22px;
            }
            
            .nav-links {
                display: none;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <nav class="navbar">
                <a href="#" class="logo">Apple</a>
                <ul class="nav-links">
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#features">Tính năng</a></li>
                    <li><a href="#reviews">Đánh giá</a></li>
                    <li><a href="#" class="btn">Mua ngay</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="container">
            <h1>iPhone 17 ProMax</h1>
            <p>Tương lai trong tầm tay bạn</p>
            <div class="price">Từ $<?php echo $product['price']; ?></div>
            <a href="#" class="btn">Mua ngay</a>
        </div>
    </section>

    <section class="features" id="features">
        <div class="container">
            <h2 class="section-title">Tính năng đột phá</h2>
            <div class="feature-grid">
                <div class="feature-card">
                    <div class="feature-icon">📱</div>
                    <h3>Màn hình 6.9"</h3>
                    <p>Màn hình Super Retina XDR với công nghệ ProMotion 120Hz</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🚀</div>
                    <h3>Chip A17 Bionic</h3>
                    <p>Hiệu năng vượt trội với chip xử lý mạnh mẽ nhất từ Apple</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">📸</div>
                    <h3>Camera 48MP</h3>
                    <p>Hệ thống camera chuyên nghiệp với khả năng quay video 8K</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🔋</div>
                    <h3>Pin 5000mAh</h3>
                    <p>Thời lượng pin cả ngày với công nghệ sạc nhanh 45W</p>
                </div>
            </div>
        </div>
    </section>

    <section class="reviews" id="reviews">
        <div class="container">
            <h2 class="section-title">Đánh giá từ khách hàng</h2>
            <div class="review-grid">
                <?php foreach($reviews as $review): ?>
                <div class="review-card">
                    <div class="review-header">
                        <div class="customer-name"><?php echo htmlspecialchars($review['customer_name']); ?></div>
                        <div class="rating">
                            <?php 
                            for($i = 1; $i <= 5; $i++) {
                                echo $i <= $review['rating'] ? '★' : '☆';
                            }
                            ?>
                        </div>
                    </div>
                    <p><?php echo htmlspecialchars($review['comment']); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer-links">
                <a href="#">Chính sách bảo mật</a>
                <a href="#">Điều khoản sử dụng</a>
                <a href="#">Bản quyền</a>
                <a href="#">Liên hệ</a>
            </div>
            <div class="copyright">
                Copyright © 2024 Apple Inc. Mọi quyền được bảo lưu.
            </div>
        </div>
    </footer>
</body>
</html>
