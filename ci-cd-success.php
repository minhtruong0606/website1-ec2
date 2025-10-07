<?php
include 'config/database.php';
$database = new Database();
$db = $database->getConnection();

// Lấy danh sách sản phẩm
$query = "SELECT p.*, c.name as category_name FROM products p LEFT JOIN categories c ON p.category_id = c.id ORDER BY p.created_at DESC LIMIT 8";
$stmt = $db->prepare($query);
$stmt->execute();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web2 - Cửa hàng điện tử</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .product-card {
            transition: transform 0.3s;
            margin-bottom: 20px;
        }
        .product-card:hover {
            transform: translateY(-5px);
        }
        .price {
            color: #d70018;
            font-weight: bold;
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Web2 Store</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="index.php">Trang chủ</a>
                <a class="nav-link" href="products.php">Sản phẩm</a>
                <a class="nav-link" href="cart.php">Giỏ hàng</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h2 class="text-center mb-4">Sản phẩm nổi bật</h2>
        
        <div class="row">
            <?php foreach ($products as $product): ?>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card product-card h-100">
                    <img src="assets/images/<?php echo $product['image'] ?? 'default.jpg'; ?>" class="card-img-top" alt="<?php echo $product['name']; ?>" style="height: 200px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><?php echo $product['name']; ?></h5>
                        <p class="card-text flex-grow-1"><?php echo substr($product['description'], 0, 80); ?>...</p>
                        <div class="mt-auto">
                            <div class="price"><?php echo number_format($product['price'], 0, ',', '.'); ?> ₫</div>
                            <div class="text-muted small">Kho: <?php echo $product['stock']; ?> sp</div>
                            <form action="cart.php" method="POST" class="mt-2">
                                <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                                <input type="hidden" name="action" value="add">
                                <button type="submit" class="btn btn-primary btn-sm w-100" <?php echo $product['stock'] == 0 ? 'disabled' : ''; ?>>
                                    <?php echo $product['stock'] == 0 ? 'Hết hàng' : 'Thêm vào giỏ'; ?>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        <div class="container">
            <p>&copy; 2024 Web2 Store. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
