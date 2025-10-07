<?php
// File test kết nối database và hiển thị cơ bản
echo "<!DOCTYPE html>
<html lang='vi'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Test Web2</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet'>
    <style>
        .test-box { border: 2px solid #007bff; padding: 20px; margin: 10px 0; border-radius: 10px; }
        .success { border-color: #28a745; background-color: #f8fff9; }
        .error { border-color: #dc3545; background-color: #fff8f8; }
    </style>
</head>
<body>
    <div class='container mt-4'>
        <h1 class='text-center mb-4'>🧪 Test Web2 Interface</h1>";

// Test 1: Kết nối database
echo "<div class='test-box'>
        <h3>1. Database Connection Test</h3>";

try {
    include 'config/database.php';
    $database = new Database();
    $db = $database->getConnection();
    
    if ($db) {
        echo "<p class='text-success'>✅ Kết nối database thành công!</p>";
        
        // Test query
        $stmt = $db->query("SELECT COUNT(*) as count FROM products");
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        echo "<p class='text-success'>✅ Số sản phẩm trong database: " . $result['count'] . "</p>";
    }
} catch (Exception $e) {
    echo "<p class='text-danger'>❌ Lỗi kết nối database: " . $e->getMessage() . "</p>";
}

echo "</div>";

// Test 2: Session và giỏ hàng
echo "<div class='test-box'>
        <h3>2. Session & Cart Test</h3>";

session_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
    echo "<p class='text-success'>✅ Session cart khởi tạo thành công!</p>";
} else {
    echo "<p class='text-success'>✅ Session cart đã tồn tại với " . count($_SESSION['cart']) . " sản phẩm</p>";
}

echo "</div>";

// Test 3: Hiển thị sản phẩm mẫu
echo "<div class='test-box'>
        <h3>3. Product Display Test</h3>
        <div class='row'>";

// Hiển thị 2 sản phẩm mẫu
$products = [
    ['id' => 1, 'name' => 'iPhone Test', 'price' => 10000000, 'image' => 'default.jpg', 'stock' => 10],
    ['id' => 2, 'name' => 'Samsung Test', 'price' => 8000000, 'image' => 'default.jpg', 'stock' => 5]
];

foreach ($products as $product) {
    echo "<div class='col-md-6 mb-3'>
            <div class='card'>
                <div class='card-body'>
                    <h5 class='card-title'>{$product['name']}</h5>
                    <p class='card-text text-danger fw-bold'>" . number_format($product['price'], 0, ',', '.') . " ₫</p>
                    <button class='btn btn-primary btn-sm'>Thêm vào giỏ</button>
                </div>
            </div>
        </div>";
}

echo "</div></div>";

// Test 4: Form test
echo "<div class='test-box'>
        <h3>4. Form Test</h3>
        <form class='row g-3'>
            <div class='col-md-6'>
                <label class='form-label'>Họ tên</label>
                <input type='text' class='form-control' placeholder='Nhập họ tên'>
            </div>
            <div class='col-md-6'>
                <label class='form-label'>Email</label>
                <input type='email' class='form-control' placeholder='Nhập email'>
            </div>
            <div class='col-12'>
                <button type='submit' class='btn btn-success'>Gửi thông tin</button>
            </div>
        </form>
    </div>";

// Test 5: Responsive test
echo "<div class='test-box'>
        <h3>5. Responsive Test</h3>
        <div class='row text-center'>
            <div class='col-lg-3 col-md-6 col-sm-12 bg-primary text-white p-3 m-1'>LG - 3</div>
            <div class='col-lg-3 col-md-6 col-sm-12 bg-success text-white p-3 m-1'>LG - 3</div>
            <div class='col-lg-3 col-md-6 col-sm-12 bg-warning text-white p-3 m-1'>LG - 3</div>
            <div class='col-lg-3 col-md-6 col-sm-12 bg-danger text-white p-3 m-1'>LG - 3</div>
        </div>
    </div>";

echo "</div></body></html>";
?>
