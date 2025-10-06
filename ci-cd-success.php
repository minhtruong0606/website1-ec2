<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🏍️ Moto Elite - Showroom Xe Phân Khối Lớn</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary: #dc2626;
            --secondary: #000;
            --accent: #fbbf24;
            --dark: #1f2937;
            --light: #f8fafc;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, var(--secondary) 0%, var(--dark) 100%);
            color: var(--light);
            line-height: 1.6;
        }
        
        /* Navigation */
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(0, 0, 0, 0.95);
            padding: 1rem 2rem;
            z-index: 1000;
            border-bottom: 2px solid var(--primary);
        }
        
        .nav-content {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 2rem;
            font-weight: bold;
            color: var(--primary);
        }
        
        .nav-links {
            display: flex;
            gap: 2rem;
        }
        
        .nav-links a {
            color: var(--light);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }
        
        .nav-links a:hover {
            color: var(--accent);
        }
        
        /* Hero Section */
        .hero {
            min-height: 100vh;
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), 
                        url('https://images.unsplash.com/photo-1558618666-fcd25856e883?ixlib=rb-4.0.3') center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 0 2rem;
        }
        
        .hero-content h1 {
            font-size: 4.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
        
        .hero-content .highlight {
            color: var(--primary);
        }
        
        .hero-content p {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }
        
        .cta-button {
            display: inline-block;
            padding: 1.2rem 2.5rem;
            background: var(--primary);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .cta-button:hover {
            background: var(--accent);
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(220, 38, 38, 0.3);
        }
        
        /* Sections */
        .section {
            padding: 5rem 2rem;
            max-width: 1400px;
            margin: 0 auto;
        }
        
        .section-title {
            text-align: center;
            font-size: 3rem;
            margin-bottom: 3rem;
            color: var(--primary);
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        
        /* Motorcycles Grid */
        .bikes-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
        }
        
        .bike-card {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .bike-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(220, 38, 38, 0.2);
        }
        
        .bike-image {
            height: 250px;
            background: linear-gradient(45deg, #333, #666);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 4rem;
            position: relative;
            overflow: hidden;
        }
        
        .bike-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }
        
        .bike-card:hover .bike-image::before {
            left: 100%;
        }
        
        .bike-content {
            padding: 1.5rem;
        }
        
        .bike-title {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
            color: var(--accent);
        }
        
        .bike-specs {
            list-style: none;
            margin: 1rem 0;
        }
        
        .bike-specs li {
            padding: 0.3rem 0;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }
        
        .bike-specs li:last-child {
            border-bottom: none;
        }
        
        .bike-price {
            font-size: 2rem;
            font-weight: bold;
            color: var(--primary);
            margin: 1rem 0;
        }
        
        .bike-actions {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }
        
        .btn {
            flex: 1;
            padding: 0.8rem 1rem;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            text-align: center;
            text-decoration: none;
        }
        
        .btn-primary {
            background: var(--primary);
            color: white;
        }
        
        .btn-secondary {
            background: transparent;
            color: var(--light);
            border: 2px solid var(--primary);
        }
        
        .btn:hover {
            transform: translateY(-2px);
        }
        
        /* Features */
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }
        
        .feature-card {
            text-align: center;
            padding: 2rem;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 10px;
        }
        
        .feature-icon {
            font-size: 3rem;
            color: var(--primary);
            margin-bottom: 1rem;
        }
        
        /* CI/CD Badge */
        .ci-cd-badge {
            background: rgba(220, 38, 38, 0.1);
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
            border: 2px solid var(--primary);
            margin-top: 3rem;
        }
        
        .deploy-info {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            margin-top: 1rem;
        }
        
        .info-item {
            background: rgba(255, 255, 255, 0.05);
            padding: 1rem;
            border-radius: 10px;
        }
        
        /* Animations */
        @keyframes slideIn {
            from { transform: translateX(-100px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        
        .slide-in {
            animation: slideIn 0.6s ease-out;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .hero-content h1 { font-size: 2.5rem; }
            .nav-links { display: none; }
            .bike-actions { flex-direction: column; }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-content">
            <div class="logo">🏍️ MotoElite</div>
            <div class="nav-links">
                <a href="#home">Trang Chủ</a>
                <a href="#bikes">Danh Sách Xe</a>
                <a href="#about">Về Chúng Tôi</a>
                <a href="#contact">Liên Hệ</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-content slide-in">
            <h1>KHÁM PHÁ <span class="highlight">ĐAM MÊ</span> TỐC ĐỘ</h1>
            <p>Showroom xe phân khối lớn chính hãng - Trải nghiệm đẳng cấp</p>
            <a href="#bikes" class="cta-button">
                <i class="fas fa-motorcycle"></i> Khám Phá Ngay
            </a>
        </div>
    </section>

    <!-- Motorcycles Section -->
    <section id="bikes" class="section">
        <h2 class="section-title">DANH SÁCH XE NỔI BẬT</h2>
        <div class="bikes-grid">
            
            <!-- Bike 1 -->
            <div class="bike-card">
                <div class="bike-image">
                    <i class="fas fa-motorcycle"></i>
                </div>
                <div class="bike-content">
                    <h3 class="bike-title">Yamaha R1M 2024</h3>
                    <ul class="bike-specs">
                        <li><i class="fas fa-tachometer-alt"></i> 998cc - 200HP</li>
                        <li><i class="fas fa-bolt"></i> 0-100km/h: 2.8s</li>
                        <li><i class="fas fa-weight"></i> Trọng lượng: 200kg</li>
                        <li><i class="fas fa-palette"></i> Màu sắc: Xanh Carbon</li>
                    </ul>
                    <div class="bike-price">1.250.000.000₫</div>
                    <div class="bike-actions">
                        <button class="btn btn-primary">Đặt Hàng Ngay</button>
                        <button class="btn btn-secondary">Chi Tiết</button>
                    </div>
                </div>
            </div>
            
            <!-- Bike 2 -->
            <div class="bike-card">
                <div class="bike-image">
                    <i class="fas fa-motorcycle"></i>
                </div>
                <div class="bike-content">
                    <h3 class="bike-title">Ducati Panigale V4</h3>
                    <ul class="bike-specs">
                        <li><i class="fas fa-tachometer-alt"></i> 1103cc - 214HP</li>
                        <li><i class="fas fa-bolt"></i> 0-100km/h: 2.6s</li>
                        <li><i class="fas fa-weight"></i> Trọng lượng: 198kg</li>
                        <li><i class="fas fa-palette"></i> Màu sắc: Đỏ Ducati</li>
                    </ul>
                    <div class="bike-price">1.850.000.000₫</div>
                    <div class="bike-actions">
                        <button class="btn btn-primary">Đặt Hàng Ngay</button>
                        <button class="btn btn-secondary">Chi Tiết</button>
                    </div>
                </div>
            </div>
            
            <!-- Bike 3 -->
            <div class="bike-card">
                <div class="bike-image">
                    <i class="fas fa-motorcycle"></i>
                </div>
                <div class="bike-content">
                    <h3 class="bike-title">Kawasaki Ninja H2</h3>
                    <ul class="bike-specs">
                        <li><i class="fas fa-tachometer-alt"></i> 998cc - 231HP</li>
                        <li><i class="fas fa-bolt"></i> 0-100km/h: 2.5s</li>
                        <li><i class="fas fa-weight"></i> Trọng lượng: 238kg</li>
                        <li><i class="fas fa-palette"></i> Màu sắc: Xanh Kawasaki</li>
                    </ul>
                    <div class="bike-price">2.150.000.000₫</div>
                    <div class="bike-actions">
                        <button class="btn btn-primary">Đặt Hàng Ngay</button>
                        <button class="btn btn-secondary">Chi Tiết</button>
                    </div>
                </div>
            </div>
            
            <!-- Bike 4 -->
            <div class="bike-card">
                <div class="bike-image">
                    <i class="fas fa-motorcycle"></i>
                </div>
                <div class="bike-content">
                    <h3 class="bike-title">BMW S1000RR</h3>
                    <ul class="bike-specs">
                        <li><i class="fas fa-tachometer-alt"></i> 999cc - 207HP</li>
                        <li><i class="fas fa-bolt"></i> 0-100km/h: 2.9s</li>
                        <li><i class="fas fa-weight"></i> Trọng lượng: 197kg</li>
                        <li><i class="fas fa-palette"></i> Màu sắc: Trắng Xanh BMW</li>
                    </ul>
                    <div class="bike-price">1.450.000.000₫</div>
                    <div class="bike-actions">
                        <button class="btn btn-primary">Đặt Hàng Ngay</button>
                        <button class="btn btn-secondary">Chi Tiết</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="section">
        <h2 class="section-title">DỊCH VỤ CỦA CHÚNG TÔI</h2>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-shield-alt"></i></div>
                <h3>Bảo Hành Chính Hãng</h3>
                <p>Bảo hành 3 năm không giới hạn km</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-tools"></i></div>
                <h3>Bảo Dưỡng Chuyên Nghiệp</h3>
                <p>Đội ngũ kỹ thuật viên tay nghề cao</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-shipping-fast"></i></div>
                <h3>Giao Xe Tận Nhà</h3>
                <p>Miễn phí vận chuyển toàn quốc</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-credit-card"></i></div>
                <h3>Trả Góp 0%</h3>
                <p>Hỗ trợ trả góp lãi suất ưu đãi</p>
            </div>
        </div>
    </section>

    <!-- CI/CD Section -->
    <section class="section">
        <div class="ci-cd-badge">
            <h2>🏍️ POWERED BY CI/CD</h2>
            <p>Website showroom được tự động deploy qua GitHub Actions</p>
            <div class="deploy-info">
                <div class="info-item">
                    <i class="fas fa-code-branch"></i>
                    <h4>Git Push</h4>
                    <p>Trigger Auto Deploy</p>
                </div>
                <div class="info-item">
                    <i class="fas fa-server"></i>
                    <h4>AWS EC2</h4>
                    <p>High Performance</p>
                </div>
                <div class="info-item">
                    <i class="fas fa-rocket"></i>
                    <h4>Zero Downtime</h4>
                    <p>Auto Restart</p>
                </div>
                <div class="info-item">
                    <i class="fas fa-sync-alt"></i>
                    <h4>Last Update</h4>
                    <p><?php echo date('d/m/Y H:i:s'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Add to cart functionality
        document.querySelectorAll('.btn-primary').forEach(button => {
            button.addEventListener('click', function() {
                const bikeName = this.closest('.bike-card').querySelector('.bike-title').textContent;
                const bikePrice = this.closest('.bike-card').querySelector('.bike-price').textContent;
                
                alert(`🏍️ ĐÃ THÊM VÀO GIỎ HÀNG!\n\n${bikeName}\n${bikePrice}\n\nCảm ơn quý khách!`);
            });
        });

        // Navbar background on scroll
        window.addEventListener('scroll', function() {
            if (window.scrollY > 100) {
                document.querySelector('.navbar').style.background = 'rgba(0, 0, 0, 0.98)';
            } else {
                document.querySelector('.navbar').style.background = 'rgba(0, 0, 0, 0.95)';
            }
        });

        // Bike counter animation
        function animateValue(element, start, end, duration) {
            let startTimestamp = null;
            const step = (timestamp) => {
                if (!startTimestamp) startTimestamp = timestamp;
                const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                const value = Math.floor(progress * (end - start) + start);
                element.textContent = value.toLocaleString() + '₫';
                if (progress < 1) {
                    window.requestAnimationFrame(step);
                }
            };
            window.requestAnimationFrame(step);
        }

        // Animate prices when in viewport
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const priceElement = entry.target;
                    const priceText = priceElement.textContent;
                    const priceValue = parseInt(priceText.replace(/[^\d]/g, ''));
                    animateValue(priceElement, 0, priceValue, 2000);
                    observer.unobserve(priceElement);
                }
            });
        });

        document.querySelectorAll('.bike-price').forEach(price => {
            observer.observe(price);
        });
    </script>
</body>
</html>
