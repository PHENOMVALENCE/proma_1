<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Proma Africa</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            color: #333;
            line-height: 1.6;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Navigation Bar */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: white;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            padding: 15px 0;
        }

        .navbar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-left {
            display: flex;
            align-items: center;
        }

        .logo {
            margin-right: 15px;
        }

        .logo img {
            height: 60px;
        }

        .site-title h1 {
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 3px;
        }

        .site-title p {
            font-size: 0.85rem;
            color: #666;
        }

        .hamburger-menu {
            position: relative;
        }

        .menu-icon {
            font-size: 1.5rem;
            cursor: pointer;
            color: #333;
        }

        .menu-links {
            position: absolute;
            top: 100%;
            right: 0;
            background-color: white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            min-width: 200px;
            border-radius: 8px;
            display: none;
        }

        .menu-links.show {
            display: block;
        }

        .menu-links a {
            display: block;
            padding: 12px 20px;
            color: #333;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .menu-links a:hover {
            background-color: #f6ae01;
            color: white;
        }

        /* Page Header Styles */
        .page-header {
            height: 350px;
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('b8.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            margin-top: 90px;
            position: relative;
            overflow: hidden;
        }

        .page-header::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 100px;
            background: linear-gradient(to top, rgba(255,255,255,1), rgba(255,255,255,0));
            transform: translateY(50%);
            z-index: 1;
        }

        .header-content {
            position: relative;
            z-index: 2;
            padding: 0 20px;
        }

        .page-header h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            font-weight: 800;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }

        .page-header p {
            font-size: 1.3rem;
            max-width: 700px;
            margin: 0 auto;
            text-shadow: 0 1px 5px rgba(0, 0, 0, 0.5);
        }

        /* About Details Section */
        .about-details {
            padding: 100px 0;
            background-color: #fff;
        }

        .about-content {
            display: flex;
            flex-wrap: wrap;
            gap: 50px;
            align-items: center;
        }

        .about-image {
            flex: 1;
            min-width: 300px;
        }

        .about-img {
            width: 100%;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .about-img:hover {
            transform: scale(1.02);
        }

        .about-text {
            flex: 2;
            min-width: 300px;
        }

        .about-text h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #222;
            position: relative;
            padding-bottom: 15px;
        }

        .about-text h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 80px;
            height: 3px;
            background-color: #f6ae01;
        }

        .about-text h3 {
            font-size: 1.8rem;
            margin-top: 30px;
            margin-bottom: 15px;
            color: #333;
        }

        .about-text p {
            font-size: 1.1rem;
            color: #555;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        /* Mission & Vision Section */
        .mission-vision {
            padding: 100px 0;
            background-color: #f9f9f9;
            position: relative;
            overflow: hidden;
        }

        .mission-vision::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 150px;
            background: linear-gradient(to bottom, rgba(255,255,255,0.8), rgba(249,249,249,0));
        }

        .mission-vision .container {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            position: relative;
            z-index: 2;
        }

        .mission, .vision {
            flex: 1;
            background-color: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            min-width: 300px;
            transition: transform 0.4s, box-shadow 0.4s;
            position: relative;
            overflow: hidden;
        }
        
        .mission:hover, .vision:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .mission::before, .vision::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background-color: #f6ae01;
        }

        .mission h3, .vision h3 {
            font-size: 2rem;
            color: #222;
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
            padding-bottom: 10px;
        }
        
        .mission h3::after, .vision h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 2px;
            background-color: #f6ae01;
        }
        
        .mission p, .vision p {
            font-size: 1.15rem;
            color: #555;
            line-height: 1.8;
        }

        .icon-bg {
            position: absolute;
            bottom: 20px;
            right: 20px;
            font-size: 4rem;
            color: rgba(246, 174, 1, 0.1);
        }

        /* Core Values Section */
        .core-values {
            padding: 100px 0;
            text-align: center;
            background-color: #fff;
        }

        .core-values h2 {
            font-size: 2.8rem;
            margin-bottom: 20px;
            color: #222;
            position: relative;
            display: inline-block;
            padding-bottom: 15px;
        }

        .core-values h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: #f6ae01;
        }

        .section-subtitle {
            font-size: 1.2rem;
            margin-bottom: 60px;
            color: #555;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 30px;
        }

        .value-card {
            background-color: white;
            padding: 40px 25px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.06);
            transition: transform 0.4s, box-shadow 0.4s;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .value-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 0;
            background-color: #f6ae01;
            transition: height 0.5s;
            z-index: -1;
        }

        .value-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
        }

        .value-card:hover::before {
            height: 5px;
        }

        .value-card i {
            font-size: 3.5rem;
            color: #f6ae01;
            margin-bottom: 20px;
            transition: transform 0.4s;
        }

        .value-card:hover i {
            transform: scale(1.1);
        }

        .value-card h3 {
            font-size: 1.8rem;
            margin-bottom: 15px;
            color: #222;
        }
        
        .value-card p {
            font-size: 1.1rem;
            color: #555;
            line-height: 1.7;
        }

        /* Team Section */
.team {
    background-color: #f9f9f9;
    padding: 100px 0;
    text-align: center;
    position: relative;
    overflow: hidden;
}

.team::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 150px;
    background: linear-gradient(to bottom, rgba(255,255,255,0.8), rgba(249,249,249,0));
}

.team h2 {
    font-size: 2.8rem;
    margin-bottom: 20px;
    color: #222;
    position: relative;
    display: inline-block;
    padding-bottom: 15px;
    z-index: 2;
}

.team h2::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 3px;
    background-color: #f6ae01;
}

.team-grid {
    display: flex;
    justify-content: center;
    gap: 40px;
    margin-top: 60px;
    position: relative;
    z-index: 2;
    flex-wrap: wrap;
    max-width: 800px;
    margin-left: auto;
    margin-right: auto;
}

.team-member {
    background-color: white;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    transition: transform 0.4s, box-shadow 0.4s;
    overflow: hidden;
    width: calc(50% - 20px);
    min-width: 280px;
    max-width: 350px;
}

        .social-links {
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .social-links a {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #f5f5f5;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #666;
            transition: all 0.3s;
            text-decoration: none;
        }

        .social-links a:hover {
            background-color: #f6ae01;
            color: white;
            transform: translateY(-3px);
        }

        /* Why Choose Us Section */
        .why-choose {
            padding: 100px 0;
            text-align: center;
            background-color: #fff;
        }

        .why-choose h2 {
            font-size: 2.8rem;
            margin-bottom: 20px;
            color: #222;
            position: relative;
            display: inline-block;
            padding-bottom: 15px;
        }

        .why-choose h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: #f6ae01;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 60px;
        }

        .feature {
            background-color: white;
            padding: 40px 25px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.06);
            transition: transform 0.4s, box-shadow 0.4s;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .feature::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 0;
            background-color: #f6ae01;
            transition: height 0.5s;
            z-index: -1;
        }

        .feature:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
        }

        .feature:hover::before {
            height: 5px;
        }

        .feature i {
            font-size: 3.5rem;
            color: #f6ae01;
            margin-bottom: 20px;
            transition: transform 0.4s;
        }

        .feature:hover i {
            transform: scale(1.1);
        }

        .feature h3 {
            font-size: 1.8rem;
            margin-bottom: 15px;
            color: #222;
        }
        
        .feature p {
            font-size: 1.1rem;
            color: #555;
            line-height: 1.7;
        }

        /* CTA Section Styles */
        .cta-section {
            padding: 100px 0;
            background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('cta-bg.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: white;
            text-align: center;
            position: relative;
        }

        .cta-content {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }

        .cta-content h2 {
            font-size: 3rem;
            margin-bottom: 25px;
            font-weight: 700;
        }

        .cta-content p {
            font-size: 1.3rem;
            margin-bottom: 40px;
            line-height: 1.7;
        }
        
        .cta-button {
            display: inline-block;
            padding: 15px 40px;
            background-color: #f6ae01;
            color: white;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s;
            box-shadow: 0 5px 15px rgba(246, 174, 1, 0.4);
        }

        .cta-button:hover {
            background-color: #e59d00;
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(246, 174, 1, 0.5);
        }

        /* Footer */
        .footer {
            background-color: #222;
            color: #fff;
            padding-top: 80px;
        }

        .footer-content {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            margin-bottom: 50px;
        }

        .footer-logo {
            flex: 2;
            min-width: 300px;
        }

        .footer-logo img {
            height: 80px;
            margin-bottom: 20px;
        }

        .footer-logo p {
            font-size: 1.1rem;
            color: #bbb;
            line-height: 1.7;
            margin-bottom: 20px;
        }

        .footer-links {
            flex: 1;
            min-width: 200px;
        }

        .footer-links h4 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: #fff;
            position: relative;
            padding-bottom: 15px;
        }

        .footer-links h4::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 2px;
            background-color: #f6ae01;
        }

        .footer-links ul {
            list-style: none;
        }

        .footer-links ul li {
            margin-bottom: 12px;
        }

        .footer-links ul li a {
            color: #bbb;
            text-decoration: none;
            transition: color 0.3s;
            font-size: 1.05rem;
        }

        .footer-links ul li a:hover {
            color: #f6ae01;
        }

        .footer-newsletter {
            flex: 2;
            min-width: 300px;
        }

        .footer-newsletter h4 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: #fff;
            position: relative;
            padding-bottom: 15px;
        }

        .footer-newsletter h4::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 2px;
            background-color: #f6ae01;
        }

        .footer-newsletter p {
            font-size: 1.05rem;
            color: #bbb;
            margin-bottom: 20px;
        }

        .newsletter-form {
            display: flex;
            max-width: 450px;
        }

        .newsletter-form input {
            flex: 1;
            padding: 12px 15px;
            border: none;
            border-radius: 4px 0 0 4px;
            outline: none;
            font-size: 1rem;
        }

        .newsletter-form button {
            padding: 0 20px;
            background-color: #f6ae01;
            color: white;
            border: none;
            border-radius: 0 4px 4px 0;
            cursor: pointer;
            font-size: 1rem;
            font-weight: 600;
            transition: background-color 0.3s;
        }

        .newsletter-form button:hover {
            background-color: #e59d00;
        }

        .footer-bottom {
            padding: 25px 0;
            text-align: center;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .footer-bottom p {
            color: #bbb;
            font-size: 1rem;
        }

        /* Responsive Styles */
        @media screen and (max-width: 992px) {
            .page-header {
                height: 300px;
                margin-top: 80px;
            }
            
            .page-header h1 {
                font-size: 2.8rem;
            }
            
            .about-text h2,
            .core-values h2,
            .team h2,
            .why-choose h2 {
                font-size: 2.2rem;
            }
            
            .mission h3, 
            .vision h3 {
                font-size: 1.8rem;
            }
            
            .cta-content h2 {
                font-size: 2.5rem;
            }
        }

        @media screen and (max-width: 768px) {
            .page-header {
                height: 250px;
                margin-top: 70px;
            }
            
            .page-header h1 {
                font-size: 2.3rem;
            }
            
            .page-header p {
                font-size: 1.1rem;
            }
            
            .about-content {
                flex-direction: column;
            }
            
            .mission-vision .container {
                flex-direction: column;
            }
            
            .about-details,
            .mission-vision,
            .core-values,
            .team,
            .why-choose,
            .cta-section {
                padding: 70px 0;
            }
            
            .about-text h2,
            .core-values h2,
            .team h2,
            .why-choose h2 {
                font-size: 2rem;
            }
            
            .values-grid,
            .team-grid,
            .features-grid {
                gap: 25px;
            }
            
            .cta-content h2 {
                font-size: 2.2rem;
            }
            
            .cta-content p {
                font-size: 1.1rem;
            }
        }

        @media screen and (max-width: 576px) {
            .navbar {
                padding: 10px 0;
            }
            
            .logo img {
                height: 50px;
            }
            
            .site-title h1 {
                font-size: 1.3rem;
            }
            
            .page-header {
                height: 200px;
                margin-top: 60px;
            }
            
            .page-header h1 {
                font-size: 1.8rem;
            }
            
            .about-text h2,
            .core-values h2,
            .team h2,
            .why-choose h2 {
                font-size: 1.8rem;
            }
            
            .about-text h3 {
                font-size: 1.5rem;
            }
            
            .about-text p,
            .mission p,
            .vision p,
            .value-card p,
            .team-member p,
            .feature p {
                font-size: 1rem;
            }
            
            .mission,
            .vision,
            .value-card,
            .team-member,
            .feature {
                padding: 25px 20px;
            }
            
            .values-grid,
            .team-grid,
            .features-grid {
                grid-template-columns: 1fr;
            }
            
            .cta-content h2 {
                font-size: 1.8rem;
            }
            
            .cta-button {
                padding: 12px 30px;
                font-size: 1rem;
            }
            
            .footer-content {
                flex-direction: column;
                gap: 30px;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="container">
            <div class="nav-left">
                <div class="logo">
                    <a href="index.php"><img src="2.png" alt="Proma Africa Logo"></a>
                </div>
                <div class="site-title">
                    <h1>Proma Africa</h1>
                    <p>Property Valuation & Real Estate Services</p>
                </div>
            </div>
            <div class="hamburger-menu">
                <div class="menu-icon" id="menuIcon">
                    <i class="fas fa-bars"></i>
                </div>
                <div class="menu-links" id="menuLinks">
                    <a href="index.php">Home</a>
                    <a href="about.php">About Us</a>
                    <a href="services.php">Services</a>
                    <a href="news.php">News & Blogs</a>
                    <a href="contact.php">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <section class="page-header">
        <div class="header-content">
            <h1>About Proma Africa</h1>
            <p>Discover our story, mission, and the team behind our success</p>
        </div>
    </section>

    <!-- About Section -->
    <section id="about-details" class="about-details">
        <div class="container">
            <div class="about-content">
                <div class="about-image">
                    <img src="about-image.jpg" alt="Proma Africa Team" class="about-img">
                </div>
                <div class="about-text">
                    <h2>Company Profile: Proma Africa</h2>
                    <h3>Company Overview</h3>
                    <p>Proma Africa is a multifaceted company specializing in property valuation, land administration, real estate services, resettlement consultancy, socio-economic baseline survey and comprehensive consultancy services. With a commitment to excellence and a client-centric approach, we aim to deliver tailored solutions that meet the diverse needs of our clients across various sectors.</p>
                    
                    <p>Proma Africa Company Limited is a one-stop boutique valuation company to Individuals, Corporations & Governments operating, covering all movable and immovable assets.</p>
                    
                    <p>Proma Africa Company Limited was incorporated in April 2024 by a team of experienced experts in property valuation, Resettlement, Environmental Social Governance (ESG), Social Economic Surveys Socioeconomic Sciences (SIS), earth observation (EO) as well as, Real Estate and Market Analysis with more than 5 years of experience. The specific solutions offered include but not limited to those harnessing 'Value' as an important variable in sustainable investments. The founders and experts in the company believe that a 'value' is a decision support tool in any investment appraisal. For service providers, the value can provide a synoptic view of the asset being appraised.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="mission-vision">
        <div class="container">
            <div class="mission">
                <h3>Our Mission</h3>
                <p>To revolutionize the real estate industry through innovative solutions and expert consultancy, empowering clients to make informed decisions and achieve optimal outcomes.</p>
            </div>
            <div class="vision">
                <h3>Our Vision</h3>
                <p>To become the top tier in transforming the valuation, land administration, real estate industry and resettlement through innovative technology and expert consultancy, creating a more efficient, transparent, and sustainable future for all stakeholders.</p>
            </div>
        </div>
    </section>

    <!-- Core Values Section -->
    <section class="core-values">
        <div class="container">
            <h2>Our Core Values</h2>
            <div class="values-grid">
                <div class="value-card">
                    <i class="fas fa-handshake"></i>
                    <h3>Integrity</h3>
                    <p>We uphold the highest ethical standards in all our operations, ensuring transparency and honesty in every interaction.</p>
                </div>
                <div class="value-card">
                    <i class="fas fa-lightbulb"></i>
                    <h3>Innovation</h3>
                    <p>We continuously seek new and better ways to deliver value to our clients through technological advancement and creative solutions.</p>
                </div>
                <div class="value-card">
                    <i class="fas fa-users"></i>
                    <h3>Client-Centered</h3>
                    <p>We place our clients' needs at the forefront of our service delivery, tailoring our solutions to meet their specific requirements.</p>
                </div>
                <div class="value-card">
                    <i class="fas fa-chart-line"></i>
                    <h3>Excellence</h3>
                    <p>We strive for excellence in every aspect of our business, consistently delivering high-quality services that exceed expectations.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="team">
    <div class="container">
        <h2>Our Expert Team</h2>
        <p class="section-subtitle">Meet the professionals behind our success</p>
        <div class="team-grid">
            <div class="team-member">
                <div class="member-image">
                    <img src="path/to/humphrey_protas_image.jpg" alt="FRV. HUMPHREY PROTAS"> 
                </div>
                <h3>FRV. HUMPHREY PROTAS</h3>
                <p class="position">Director</p> 
                <p>A key leader at Proma Africa, FRV. Humphrey Protas is instrumental in driving our strategic goals and ensuring our services meet the highest standards.</p> 
            </div>
            <div class="team-member">
                <div class="member-image">
                    <img src="path/to/baraka_masawe_image.jpg" alt="PRV. BARAKA MASAWE">
                </div>
                <h3>PRV. BARAKA MASAWE</h3>
                <p class="position">Director</p> 
                <p>PRV. Baraka Masawe plays a crucial role in our leadership team, contributing significantly to our growth and success in the real estate sector.</p> 
            </div>
        </div>
        <div class="directors-message">
            <h2>Word From Our Directors</h2>
            <p>"Our goal is to lead the transformation of valuation, land administration, the real estate industry, and resettlement by leveraging innovative technology and expert consultancy. We strive to enhance efficiency, transparency, and sustainability, delivering exceptional value to all stakeholders."</p>
        </div>
    </div>
</section>
                
    </section>

    <!-- Why Choose Us Section -->
    <section class="why-choose">
        <div class="container">
            <h2>Why Choose Proma Africa</h2>
            <div class="features-grid">
                <div class="feature">
                    <i class="fas fa-award"></i>
                    <h3>Expert Knowledge</h3>
                    <p>Our team comprises industry experts with extensive experience in property valuation, land administration, and real estate services.</p>
                </div>
                <div class="feature">
                    <i class="fas fa-globe-africa"></i>
                    <h3>Local Expertise</h3>
                    <p>With deep understanding of local markets and regulations across Africa, we provide context-specific solutions.</p>
                </div>
                <div class="feature">
                    <i class="fas fa-tools"></i>
                    <h3>Innovative Approach</h3>
                    <p>We leverage cutting-edge technology and methodologies to deliver accurate, efficient, and forward-thinking services.</p>
                </div>
                <div class="feature">
                    <i class="fas fa-check-circle"></i>
                    <h3>Proven Track Record</h3>
                    <p>Our portfolio of successful projects demonstrates our capability to deliver exceptional results for diverse clients.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Get Started?</h2>
                <p>Contact our team today to discuss your property needs and how we can help you achieve your real estate goals.</p>
                <a href="contact.php" class="cta-button">Contact Us</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <img src="1.jpg" alt="Proma Africa Logo">
                    <p>Your trusted partner in property valuation and real estate services.</p>
                </div>
                <div class="footer-links">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="news.php">News & Blogs</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-newsletter">
                    <h4>Newsletter</h4>
                    <p>Subscribe to our newsletter for the latest updates</p>
                    <form class="newsletter-form">
                        <input type="email" placeholder="Your Email Address">
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> Proma Africa. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // JavaScript for hamburger menu toggle
        document.getElementById('menuIcon').addEventListener('click', function() {
            document.getElementById('menuLinks').classList.toggle('show');
        });

        // Close menu when clicking elsewhere
        document.addEventListener('click', function(event) {
            const menuLinks = document.getElementById('menuLinks');
            const menuIcon = document.getElementById('menuIcon');
            
            if (!menuIcon.contains(event.target) && !menuLinks.contains(event.target)) {
                menuLinks.classList.remove('show');
            }
        });
    </script>
</body>
</html>