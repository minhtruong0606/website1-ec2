<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🚀 Demo Store - CI/CD Test</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .header {
            text-align: center;
            color: white;
            margin-bottom: 40px;
            padding: 20px;
        }
        
        .header h1 {
            font-size: 3rem;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }
        
        .header p {
            font-size: 1.2rem;
            opacity: 0.9;
        }
        
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }
        
        .product-card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: center;
        }
        
        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
        }
        
        .product-icon {
            font-size: 3rem;
            margin-bottom: 15px;
        }
        
        .product-card h3 {
            color: #333;
            margin-bottom: 10px;
            font-size: 1.5rem;
        }
        
        .product-card p {
            color: #666;
            margin-bottom: 20px;
            line-height: 1.6;
        }
        
        .price {
            font-size: 1.8rem;
            font-weight: bold;
            color: #667eea;
            margin-bottom: 20px;
        }
        
        .btn {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 25px;
            font-size: 1rem;
            cursor: pointer;
            transition: transform 0.2s ease;
        }
        
        .btn:hover {
            transform: scale(1.05);
        }
        
        .ci-cd-badge {
            background: rgba(255,255,255,0.2);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            color: white;
            margin-top: 30px;
        }
        
        .deploy-time {
            font-size: 0.9rem;
            opacity: 0.8;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🛍️ Demo Store</h1>
            <p>Trang web test CI/CD tự động deploy</p>
        </div>
        
        <div class="products-grid">
            <!-- Product 1 -->
            <div class="product-card">
                <div class="product-icon">💻</div>
                <h3>Laptop Pro</h3>
                <p>Laptop cao cấp với hiệu năng mạnh mẽ, phù hợp cho công việc và giải trí</p>
                <div class="price">15.000.000₫</div>
                <button class="btn">Thêm vào giỏ hàng</button>
            </div>
            
            <!-- Product 2 -->
            <div class="product-card">
                <div class="product-icon">📱</div>
                <h3>Smartphone</h3>
                <p>Điện thoại thông minh với camera chất lượng cao và pin trâu</p>
                <div class="price">8.500.000₫</div>
                <button class="btn">Thêm vào giỏ hàng</button>
            </div>
            
            <!-- Product 3 -->
            <div class="product-card">
                <div class="product-icon">🎧</div>
                <h3>Tai nghe</h3>
                <p>Tai nghe chụp tai với âm thanh sống động, chống ồn chủ động</p>
                <div class="price">2.300.000₫</div>
                <button class="btn">Thêm vào giỏ hàng</button>
            </div>
        </div>
        
        <div class="ci-cd-badge">
            <h3>🚀 CI/CD DEPLOYMENT SUCCESS</h3>
            <p>Trang web này được deploy tự động qua GitHub Actions</p>
            <div class="deploy-time">
                ✅ Deployed at: <?php echo date('Y-m-d H:i:s'); ?><br>
                🌐 EC2 Instance: 54.254.183.220<br>
                🔄 Trigger: Git Push to Main Branch
            </div>
        </div>
    </div>

    <script>
        // Simple interactivity
        document.querySelectorAll('.btn').forEach(button => {
            button.addEventListener('click', function() {
                const productName = this.closest('.product-card').querySelector('h3').textContent;
                alert(`🎉 Đã thêm "${productName}" vào giỏ hàng!`);
            });
        });
        
        // Real-time clock update
        function updateTime() {
            const timeElement = document.querySelector('.deploy-time');
            if(timeElement) {
                const now = new Date();
                timeElement.innerHTML = `✅ Deployed at: ${now.toLocaleString('vi-VN')}<br>
                                       🌐 EC2 Instance: 54.254.183.220<br>
                                       🔄 Trigger: Git Push to Main Branch`;
            }
        }
        
        // Update time every minute
        setInterval(updateTime, 60000);
    </script>
</body>
</html>
