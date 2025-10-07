<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🌟 Portfolio - minhtruong</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary: #667eea;
            --secondary: #764ba2;
            --accent: #f093fb;
            --dark: #2d3748;
            --light: #f7fafc;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: var(--light);
            line-height: 1.6;
            overflow-x: hidden;
        }
        
        /* Navigation */
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 1rem 2rem;
            z-index: 1000;
            transition: all 0.3s ease;
        }
        
        .nav-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            background: linear-gradient(45deg, var(--accent), #ffecd2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .nav-links {
            display: flex;
            gap: 2rem;
        }
        
        .nav-links a {
            color: var(--light);
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .nav-links a:hover {
            color: var(--accent);
        }
        
        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 0 2rem;
            position: relative;
        }
        
        .hero-content h1 {
            font-size: 4rem;
            margin-bottom: 1rem;
            background: linear-gradient(45deg, #fff, var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .hero-content p {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }
        
        .cta-button {
            display: inline-block;
            padding: 1rem 2rem;
            background: linear-gradient(45deg, var(--accent), #ffecd2);
            color: var(--dark);
            text-decoration: none;
            border-radius: 50px;
            font-weight: bold;
            transition: transform 0.3s ease;
        }
        
        .cta-button:hover {
            transform: translateY(-3px);
        }
        
        /* Sections */
        .section {
            padding: 5rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            background: linear-gradient(45deg, var(--accent), #ffecd2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        /* Skills */
        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }
        
        .skill-card {
            background: rgba(255, 255, 255, 0.1);
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
            backdrop-filter: blur(10px);
            transition: transform 0.3s ease;
        }
        
        .skill-card:hover {
            transform: translateY(-10px);
        }
        
        .skill-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: var(--accent);
        }
        
        /* Projects */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }
        
        .project-card {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            overflow: hidden;
            backdrop-filter: blur(10px);
            transition: transform 0.3s ease;
        }
        
        .project-card:hover {
            transform: translateY(-10px);
        }
        
        .project-image {
            height: 200px;
            background: linear-gradient(45deg, var(--primary), var(--accent));
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
        }
        
        .project-content {
            padding: 1.5rem;
        }
        
        /* CI/CD Badge */
        .ci-cd-badge {
            background: rgba(255, 255, 255, 0.1);
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
            backdrop-filter: blur(10px);
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
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        .floating {
            animation: float 6s ease-in-out infinite;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .hero-content h1 { font-size: 2.5rem; }
            .nav-links { display: none; }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-content">
            <div class="logo">🌟 Portfolio</div>
            <div class="nav-links">
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#skills">Skills</a>
                <a href="#projects">Projects</a>
                <a href="#contact">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-content">
            <h1 class="floating">Xin chào, I'm [Your Name]</h1>
            <p>Full Stack Developer & DevOps Engineer</p>
            <p>Creating amazing digital experiences</p>
            <a href="#projects" class="cta-button">
                <i class="fas fa-rocket"></i> View My Work
            </a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section">
        <h2 class="section-title">About Me</h2>
        <div class="skills-grid">
            <div class="skill-card">
                <div class="skill-icon">💻</div>
                <h3>2+ Years</h3>
                <p>Experience in Web Development</p>
            </div>
            <div class="skill-card">
                <div class="skill-icon">🚀</div>
                <h3>50+ Projects</h3>
                <p>Completed Successfully</p>
            </div>
            <div class="skill-card">
                <div class="skill-icon">⭐</div>
                <h3>Full Stack</h3>
                <p>Frontend & Backend Expert</p>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="section">
        <h2 class="section-title">My Skills</h2>
        <div class="skills-grid">
            <div class="skill-card">
                <i class="skill-icon fab fa-php"></i>
                <h3>PHP & Laravel</h3>
                <p>Backend Development</p>
            </div>
            <div class="skill-card">
                <i class="skill-icon fab fa-js"></i>
                <h3>JavaScript</h3>
                <p>Frontend & React</p>
            </div>
            <div class="skill-card">
                <i class="skill-icon fab fa-aws"></i>
                <h3>AWS Cloud</h3>
                <p>DevOps & Infrastructure</p>
            </div>
            <div class="skill-card">
                <i class="skill-icon fas fa-database"></i>
                <h3>Database</h3>
                <p>MySQL & MongoDB</p>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="section">
        <h2 class="section-title">My Projects</h2>
        <div class="projects-grid">
            <!-- Project 1 -->
            <div class="project-card">
                <div class="project-image">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="project-content">
                    <h3>E-Commerce Platform</h3>
                    <p>Full-stack e-commerce solution with payment integration</p>
                    <div class="tech-stack">
                        <span class="tech-tag">PHP</span>
                        <span class="tech-tag">MySQL</span>
                        <span class="tech-tag">AWS</span>
                    </div>
                </div>
            </div>
            
            <!-- Project 2 -->
            <div class="project-card">
                <div class="project-image">
                    <i class="fas fa-chart-line"></i>
                </div>
                <div class="project-content">
                    <h3>Analytics Dashboard</h3>
                    <p>Real-time data visualization and reporting system</p>
                    <div class="tech-stack">
                        <span class="tech-tag">React</span>
                        <span class="tech-tag">Node.js</span>
                        <span class="tech-tag">MongoDB</span>
                    </div>
                </div>
            </div>
            
            <!-- Project 3 -->
            <div class="project-card">
                <div class="project-image">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <div class="project-content">
                    <h3>Mobile App</h3>
                    <p>Cross-platform mobile application with cloud sync</p>
                    <div class="tech-stack">
                        <span class="tech-tag">Flutter</span>
                        <span class="tech-tag">Firebase</span>
                        <span class="tech-tag">REST API</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CI/CD Section -->
    <section class="section">
        <div class="ci-cd-badge">
            <h2>🚀 DevOps & CI/CD</h2>
            <p>This portfolio is automatically deployed using CI/CD Pipeline</p>
            <div class="deploy-info">
                <div class="info-item">
                    <i class="fas fa-code-branch"></i>
                    <h4>GitHub Actions</h4>
                    <p>Automated Workflows</p>
                </div>
                <div class="info-item">
                    <i class="fas fa-server"></i>
                    <h4>AWS EC2</h4>
                    <p>Production Server</p>
                </div>
                <div class="info-item">
                    <i class="fas fa-rocket"></i>
                    <h4>Auto Deploy</h4>
                    <p>Zero Downtime</p>
                </div>
                <div class="info-item">
                    <i class="fas fa-clock"></i>
                    <h4>Last Deploy</h4>
                    <p><?php echo date('Y-m-d H:i:s'); ?></p>
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

        // Navbar background on scroll
        window.addEventListener('scroll', function() {
            if (window.scrollY > 100) {
                document.querySelector('.navbar').style.background = 'rgba(45, 55, 72, 0.95)';
            } else {
                document.querySelector('.navbar').style.background = 'rgba(255, 255, 255, 0.1)';
            }
        });

        // Typewriter effect
        const texts = ['Full Stack Developer', 'DevOps Engineer', 'Cloud Architect', 'Problem Solver'];
        let count = 0;
        let index = 0;
        let currentText = '';
        let letter = '';

        function typeWriter() {
            if (count === texts.length) {
                count = 0;
            }
            currentText = texts[count];
            letter = currentText.slice(0, ++index);

            document.querySelector('.hero-content p').textContent = letter;
            if (letter.length === currentText.length) {
                count++;
                index = 0;
                setTimeout(typeWriter, 2000);
            } else {
                setTimeout(typeWriter, 100);
            }
        }

        // Start typewriter after page load
        window.addEventListener('load', typeWriter);
    </script>
</body>
</html>
