<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>บริษัท ภูมิรพีส์เอนจิเนียริ่งซิสเต็มส์ จำกัด | Professional Engineering Solutions</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        :root {
            --primary-color: #1e40af;
            --secondary-color: #3b82f6;
            --accent-color: #f59e0b;
            --dark-color: #1f2937;
            --light-color: #f8fafc;
            --success-color: #059669;
            --text-dark: #374151;
            --text-light: #6b7280;
            --border-color: #e5e7eb;
            --shadow: 0 10px 25px rgba(0,0,0,0.1);
            --shadow-hover: 0 20px 40px rgba(0,0,0,0.15);
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: var(--text-dark);
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }
        
        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Header */
        .header {
            background: rgba(255,255,255,0.95);
            backdrop-filter: blur(10px);
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: var(--shadow);
        }
        
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
        }
        
        .logo {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .logo-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
        }
        
        .logo-text h1 {
            font-size: 1.4rem;
            color: var(--dark-color);
            font-weight: 700;
        }
        
        .logo-text p {
            font-size: 0.9rem;
            color: var(--text-light);
        }
        
        .nav {
            display: flex;
            gap: 2rem;
        }
        
        .nav a {
            text-decoration: none;
            color: var(--text-dark);
            font-weight: 500;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        
        .nav a:hover {
            background: var(--primary-color);
            color: white;
        }
        
        /* Hero Section */
        .hero {
            text-align: center;
            padding: 4rem 0;
            color: white;
        }
        
        .hero h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }
        
        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }
        
        .hero-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }
        
        .stat-item {
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(10px);
            padding: 2rem;
            border-radius: 15px;
            border: 1px solid rgba(255,255,255,0.2);
        }
        
        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            display: block;
        }
        
        .stat-label {
            font-size: 1rem;
            opacity: 0.8;
        }
        
        /* Main Content */
        .main-content {
            background: white;
            margin-top: -50px;
            border-radius: 30px 30px 0 0;
            position: relative;
            z-index: 100;
            padding: 3rem 0;
        }
        
        .section {
            margin: 4rem 0;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 3rem;
        }
        
        .section-title h2 {
            font-size: 2.5rem;
            color: var(--dark-color);
            margin-bottom: 1rem;
            position: relative;
        }
        
        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(45deg, var(--primary-color), var(--accent-color));
            border-radius: 2px;
        }
        
        .section-title p {
            color: var(--text-light);
            font-size: 1.1rem;
        }
        
        /* Company Info Card */
        .company-card {
            background: white;
            border-radius: 20px;
            padding: 3rem;
            box-shadow: var(--shadow);
            margin-bottom: 3rem;
            border: 1px solid var(--border-color);
        }
        
        .company-header {
            text-align: center;
            margin-bottom: 3rem;
        }
        
        .company-header h2 {
            font-size: 2.2rem;
            color: var(--dark-color);
            margin-bottom: 0.5rem;
        }
        
        .company-header h3 {
            font-size: 1.4rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }
        
        .company-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem;
        }
        
        .company-item {
            background: var(--light-color);
            padding: 1.5rem;
            border-radius: 12px;
            border-left: 4px solid var(--primary-color);
            transition: transform 0.3s ease;
        }
        
        .company-item:hover {
            transform: translateY(-2px);
        }
        
        .company-item i {
            color: var(--primary-color);
            margin-right: 10px;
        }
        
        .company-item strong {
            color: var(--dark-color);
        }
        
        /* Services Grid */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
        }
        
        .service-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: var(--shadow);
            border: 1px solid var(--border-color);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(45deg, var(--primary-color), var(--accent-color));
        }
        
        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }
        
        .service-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }
        
        .service-card h3 {
            color: var(--dark-color);
            margin-bottom: 1rem;
            font-size: 1.2rem;
        }
        
        /* Management Grid */
        .management-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
        }
        
        .management-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: var(--shadow);
            border: 1px solid var(--border-color);
            text-align: center;
            transition: transform 0.3s ease;
        }
        
        .management-card:hover {
            transform: translateY(-3px);
        }
        
        .management-avatar {
            width: 80px;
            height: 80px;
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2rem;
            margin: 0 auto 1rem;
        }
        
        .management-position {
            color: var(--text-light);
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
        }
        
        .management-name {
            color: var(--dark-color);
            font-weight: 600;
            font-size: 1.1rem;
        }
        
        /* Projects Grid */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 2rem;
        }
        
        .project-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: var(--shadow);
            border: 1px solid var(--border-color);
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .project-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }
        
        .project-header {
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 1.5rem;
        }
        
        .project-title {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        
        .project-location {
            opacity: 0.9;
            font-size: 0.9rem;
        }
        
        .project-body {
            padding: 1.5rem;
        }
        
        .project-detail {
            display: flex;
            align-items: center;
            margin: 0.8rem 0;
            color: var(--text-dark);
        }
        
        .project-detail i {
            color: var(--primary-color);
            margin-right: 10px;
            width: 20px;
        }
        
        .project-value {
            background: var(--accent-color);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-weight: 600;
            display: inline-block;
            margin-top: 1rem;
        }
        
        /* Calculator Section */
        .calc-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 2rem;
        }
        
        .calc-card {
            background: white;
            border-radius: 20px;
            padding: 2.5rem;
            box-shadow: var(--shadow);
            border: 1px solid var(--border-color);
        }
        
        .calc-header {
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .calc-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(45deg, var(--accent-color), #f97316);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            margin: 0 auto 1rem;
        }
        
        .calc-header h3 {
            color: var(--dark-color);
            font-size: 1.4rem;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: var(--dark-color);
        }
        
        .form-group input {
            width: 100%;
            padding: 1rem;
            border: 2px solid var(--border-color);
            border-radius: 10px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }
        
        .form-group input:focus {
            border-color: var(--primary-color);
            outline: none;
        }
        
        .btn {
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 10px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
        }
        
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(30, 64, 175, 0.3);
        }
        
        .result {
            background: linear-gradient(45deg, #d1fae5, #a7f3d0);
            border: 2px solid var(--success-color);
            border-radius: 12px;
            padding: 1.5rem;
            margin-top: 1.5rem;
        }
        
        .result h4 {
            color: var(--success-color);
            margin-bottom: 1rem;
            font-size: 1.2rem;
        }
        
        .result p {
            margin: 0.5rem 0;
            color: #065f46;
            font-weight: 500;
        }
        
        /* Facts Section */
        .facts-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
        }
        
        .fact-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: var(--shadow);
            border: 1px solid var(--border-color);
            transition: transform 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .fact-card::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 100px;
            height: 100px;
            background: linear-gradient(45deg, var(--accent-color), #f97316);
            border-radius: 50%;
            transform: translate(30px, -30px);
            opacity: 0.1;
        }
        
        .fact-card:hover {
            transform: translateY(-3px);
        }
        
        .fact-number {
            color: var(--accent-color);
            font-weight: 700;
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
        }
        
        /* Modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 2000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            backdrop-filter: blur(5px);
        }
        
        .modal-content {
            background: white;
            margin: 5% auto;
            padding: 0;
            border-radius: 20px;
            width: 90%;
            max-width: 600px;
            max-height: 80vh;
            overflow-y: auto;
            box-shadow: var(--shadow-hover);
        }
        
        .modal-header {
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 2rem;
            border-radius: 20px 20px 0 0;
            position: relative;
        }
        
        .modal-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        
        .close {
            position: absolute;
            right: 1.5rem;
            top: 1.5rem;
            font-size: 2rem;
            font-weight: bold;
            cursor: pointer;
            color: white;
            opacity: 0.8;
            transition: opacity 0.3s ease;
        }
        
        .close:hover {
            opacity: 1;
        }
        
        .modal-body {
            padding: 2rem;
        }
        
        .modal-detail {
            display: flex;
            align-items: center;
            margin: 1rem 0;
            padding: 0.8rem;
            background: var(--light-color);
            border-radius: 8px;
        }
        
        .modal-detail i {
            color: var(--primary-color);
            margin-right: 15px;
            width: 20px;
        }
        
        /* Footer */
        .footer {
            background: var(--dark-color);
            color: white;
            text-align: center;
            padding: 3rem 0;
            margin-top: 4rem;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }
        
        .footer-section h3 {
            margin-bottom: 1rem;
            color: var(--accent-color);
        }
        
        .footer-section p {
            color: #d1d5db;
            line-height: 1.6;
        }
        
        .social-links {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-top: 2rem;
        }
        
        .social-links a {
            width: 40px;
            height: 40px;
            background: var(--primary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            transition: transform 0.3s ease;
        }
        
        .social-links a:hover {
            transform: translateY(-3px);
        }
        
        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-fade-in {
            animation: fadeInUp 0.6s ease forwards;
        }
        
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        
        .pulse {
            animation: pulse 2s infinite;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                gap: 1rem;
            }
            
            .nav {
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .calc-grid,
            .projects-grid,
            .services-grid {
                grid-template-columns: 1fr;
            }
            
            .modal-content {
                margin: 10% auto;
                width: 95%;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <div class="logo-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <div class="logo-text">
                        <h1>ภูมิรพีส์เอนจิเนียริ่ง</h1>
                        <p>Professional Engineering Solutions</p>
                    </div>
                </div>
                <nav class="nav">
                    <a href="#home"><i class="fas fa-home"></i> หน้าแรก</a>
                    <a href="#services"><i class="fas fa-cogs"></i> บริการ</a>
                    <a href="#projects"><i class="fas fa-building"></i> โครงการ</a>
                    <a href="#calculator"><i class="fas fa-calculator"></i> เครื่องมือ</a>
                    <a href="#contact"><i class="fas fa-phone"></i> ติดต่อ</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <h1 class="pulse">⚡ ระบบงานไฟฟ้า & วิศวกรรม ⚡</h1>
            <p>ผู้เชี่ยวชาญด้านระบบไฟฟ้า สุขาภิบาล และเครื่องปรับอากาศ</p>
            
            <div class="hero-stats">
                <div class="stat-item animate-fade-in">
                    <span class="stat-number">10+</span>
                    <span class="stat-label">ปีประสบการณ์</span>
                </div>
                <div class="stat-item animate-fade-in">
                    <span class="stat-number">50+</span>
                    <span class="stat-label">โครงการสำเร็จ</span>
                </div>
                <div class="stat-item animate-fade-in">
                    <span class="stat-number">100+</span>
                    <span class="stat-label">ลูกค้าพึงพอใจ</span>
                </div>
                <div class="stat-item animate-fade-in">
                    <span class="stat-number">24/7</span>
                    <span class="stat-label">บริการหลังการขาย</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <div class="main-content">
        <div class="container">
            <!-- Company Information -->
            <section class="section">
                <div class="company-card">
                    <div class="company-header">
                        <h2>บริษัท ภูมิรพีส์เอนจิเนียริ่งซิสเต็มส์ จำกัด</h2>
                        <h3>PHUMRAPEE ENGINEERING SYSTEMS CO.,LTD.</h3>
                        <p>ผู้นำด้านระบบวิศวกรรมครบวงจร</p>
                    </div>
                    
                    <div class="company-grid">
                        <div class="company-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <strong>ที่อยู่:</strong><br>8/1 Moo 8 Paklok, Thalang, Phuket
                        </div>
                        <div class="company-item">
                            <i class="fas fa-phone"></i>
                            <strong>โทรศัพท์:</strong><br>+66 (088)7651838
                        </div>
                        <div class="company-item">
                            <i class="fas fa-fax"></i>
                            <strong>แฟกซ์:</strong><br>+66 (076) 604018
                        </div>
                        <div class="company-item">
                            <i class="fas fa-calendar-alt"></i>
                            <strong>ก่อตั้งปี:</strong><br>พ.ศ. 2556
                        </div>
                        <div class="company-item">
                            <i class="fas fa-coins"></i>
                            <strong>ทุนจดทะเบียน:</strong><br>1,000,000.00 บาท
                        </div>
                        <div class="company-item">
                            <i class="fas fa-file-alt"></i>
                            <strong>เลขทะเบียน:</strong><br>0835556011713
                        </div>
                    </div>
                </div>
            </section>

            <!-- Services -->
            <section id="services" class="section">
                <div class="section-title">
                    <h2>บริการของเรา</h2>
                    <p>ครบครันด้านระบบวิศวกรรม</p>
                </div>
                
                <div class="services-grid">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <h3>ระบบกล้องวงจรปิด</h3>
                        <p>งานระบบไฟฟ้าและสื่อสารสำหรับโรงแรม คอนโดมิเนียม และอาคารต่างๆ พร้อมระบบรักษาความปลอดภัยครบครัน</p>
                    </div>
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-tint"></i>
                        </div>
                        <h3>สมาร์ทโฮม</h3>
                        <p>ออกแบบและติดตั้งระบบประปา ระบายน้ำ และสุขาภิบาลสำหรับโรงแรมและคอนโดมิเนียม</p>
                    </div>
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-snowflake"></i>
                        </div>
                        <h3>งานไฟฟ้าในอาคาร</h3>
                        <p>บริการครบวงจรด้านระบบปรับอากาศสำหรับโรงแรม คอนโดมิเนียม และบ้านพักอาศัย</p>
                    </div>
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-snowflake"></i>
                        </div>
                        <h3> งานขยายเขต</h3>
                        <p>บริการครบวงจรด้านระบบปรับอากาศสำหรับโรงแรม คอนโดมิเนียม และบ้านพักอาศัย</p>
                    </div>
                      <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-snowflake"></i>
                        </div>
                        <h3>ระบบไฟอลามป์</h3>
                        <p>บริการครบวงจรด้านระบบปรับอากาศสำหรับโรงแรม คอนโดมิเนียม และบ้านพักอาศัย</p>
                    </div>
                </div>
            </section>

            <!-- Management Team -->
            <section class="section">
                <div class="section-title">
                    <h2>ทีมผู้บริหาร</h2>
                    <p>ทีมงานมืออาชีพที่มีประสบการณ์</p>
                </div>
                
                <div class="management-grid">
                    <div class="management-card">
                        <div class="management-avatar">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div class="management-position">กรรมการผู้จัดการ</div>
                        <div class="management-name">SURACHART WONGKAENTHAO</div>
                    </div>
                    <div class="management-card">
                        <div class="management-avatar">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <div class="management-position">ฝ่ายเทคนิคระบบ</div>
                        <div class="management-name">SUTIN TONGCHOOM</div>
                    </div>
                    <div class="management-card">
                        <div class="management-avatar">
                            <i class="fas fa-hard-hat"></i>
                        </div>
                        <div class="management-position">หัวหน้าฝ่ายเทคนิค</div>
                        <div class="management-name">Wasan Yai
                        </section>
                <!-- Projects -->
            <section id="projects" class="section">
                <div class="section-title">
                    <h2>โครงการที่สำเร็จแล้ว</h2>
                    <p>ผลงานที่เราภาคภูมิใจ</p>
                </div>
                
                <div class="projects-grid">
                    <div class="project-card" onclick="openModal('modal1')">
                        <div class="project-header">
                            <div class="project-title">Sugar Marina POP</div>
                            <div class="project-location">หาดกะตะ ภูเก็ต</div>
                        </div>
                        <div class="project-body">
                            <div class="project-detail">
                                <i class="fas fa-building"></i>
                                <span>โรงแรม 209 ห้อง</span>
                            </div>
                            <div class="project-detail">
                                <i class="fas fa-calendar"></i>
                                <span>2022-มีนาคม 2024</span>
                            </div>
                            <div class="project-detail">
                                <i class="fas fa-bolt"></i>
                                <span>งานระบบไฟฟ้า</span>
                            </div>
                            <div class="project-value">25 ล้านบาท</div>
                        </div>
                    </div>
                    
                    <div class="project-card" onclick="openModal('modal2')">
                        <div class="project-header">
                            <div class="project-title">Sugar Marina 2 (Surf)</div>
                            <div class="project-location">กะตะ ภูเก็ต</div>
                        </div>
                        <div class="project-body">
                            <div class="project-detail">
                                <i class="fas fa-building"></i>
                                <span>โรงแรม 76 ห้อง</span>
                            </div>
                            <div class="project-detail">
                                <i class="fas fa-calendar"></i>
                                <span>2014-2015</span>
                            </div>
                            <div class="project-detail">
                                <i class="fas fa-cogs"></i>
                                <span>ระบบไฟฟ้า + สุขาภิบาล</span>
                            </div>
                            <div class="project-value">15 ล้านบาท</div>
                        </div>
                    </div>
                    
                    <div class="project-card" onclick="openModal('modal3')">
                        <div class="project-header">
                            <div class="project-title">Sugar Marina Lagoon</div>
                            <div class="project-location">หาดในยาง ภูเก็ต</div>
                        </div>
                        <div class="project-body">
                            <div class="project-detail">
                                <i class="fas fa-building"></i>
                                <span>โรงแรม 99 ห้อง</span>
                            </div>
                            <div class="project-detail">
                                <i class="fas fa-calendar"></i>
                                <span>2022-มีนาคม 2024</span>
                            </div>
                            <div class="project-detail">
                                <i class="fas fa-bolt"></i>
                                <span>งานระบบไฟฟ้า</span>
                            </div>
                            <div class="project-value">14 ล้านบาท</div>
                        </div>
                    </div>
                    
                    <div class="project-card" onclick="openModal('modal4')">
                        <div class="project-header">
                            <div class="project-title">D-LUX Condominium</div>
                            <div class="project-location">ฉลอง ภูเก็ต</div>
                        </div>
                        <div class="project-body">
                            <div class="project-detail">
                                <i class="fas fa-building"></i>
                                <span>คอนโดมิเนียม 102 ห้อง</span>
                            </div>
                            <div class="project-detail">
                                <i class="fas fa-calendar"></i>
                                <span>2014-2015</span>
                            </div>
                            <div class="project-detail">
                                <i class="fas fa-bolt"></i>
                                <span>งานระบบไฟฟ้า</span>
                            </div>
                            <div class="project-value">12 ล้านบาท</div>
                        </div>
                    </div>
                    
                    <div class="project-card" onclick="openModal('modal5')">
                        <div class="project-header">
                            <div class="project-title">Sugar Marina Gallery</div>
                            <div class="project-location">กะลิม ภูเก็ต</div>
                        </div>
                        <div class="project-body">
                            <div class="project-detail">
                                <i class="fas fa-building"></i>
                                <span>โรงแรม 80 ห้อง</span>
                            </div>
                            <div class="project-detail">
                                <i class="fas fa-calendar"></i>
                                <span>2018-2019</span>
                            </div>
                            <div class="project-detail">
                                <i class="fas fa-bolt"></i>
                                <span>งานระบบไฟฟ้า</span>
                            </div>
                            <div class="project-value">12 ล้านบาท</div>
                        </div>
                    </div>
                    
                    <div class="project-card" onclick="openModal('modal6')">
                        <div class="project-header">
                            <div class="project-title">Kokotel</div>
                            <div class="project-location">หาดในยาง ภูเก็ต</div>
                        </div>
                        <div class="project-body">
                            <div class="project-detail">
                                <i class="fas fa-building"></i>
                                <span>โรงแรม 58 ห้อง</span>
                            </div>
                            <div class="project-detail">
                                <i class="fas fa-calendar"></i>
                                <span>2020-มีนาคม 2021</span>
                            </div>
                            <div class="project-detail">
                                <i class="fas fa-bolt"></i>
                                <span>งานระบบไฟฟ้า</span>
                            </div>
                            <div class="project-value">9 ล้านบาท</div>
                        </div>
                    </div>
                </div>
            </section>