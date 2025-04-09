<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Proma Africa</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Services Page Specific Styles */

        /* Page Header Styles */
        .page-header {
            height: 300px;
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('b4.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            margin-top: 110px;
        }

        .page-header .header-content {
            padding: 0 20px;
        }

        .page-header h1 {
            font-size: 3rem;
            margin-bottom: 15px;
        }

        .page-header p {
            font-size: 1.2rem;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Services Detailed Section Styles */
        .services-detailed {
            padding: 80px 0;
            background-color: #f9f9f9;
        }

        .services-intro {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 60px;
        }

        .services-intro h2 {
            color: #333;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .services-intro p {
            font-size: 1.1rem;
            color: #555;
        }

        .service-detailed-item {
            display: flex;
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 40px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .service-detailed-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .service-icon {
            flex: 0 0 150px;
            background-color: #f6ae01;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .service-icon i {
            font-size: 3.5rem;
            color: white;
        }

        .service-content {
            flex: 1;
            padding: 30px;
        }

        .service-content h3 {
            color: #333;
            font-size: 1.8rem;
            margin-bottom: 15px;
        }

        .service-content p {
            color: #555;
            margin-bottom: 20px;
            line-height: 1.7;
        }

        .service-features {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 15px;
        }

        .feature {
            display: flex;
            align-items: center;
        }

        .feature i {
            color: #f6ae01;
            margin-right: 10px;
        }

        /* CTA Section Styles */
        .cta-section {
            padding: 80px 0;
            background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('cta-bg.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
        }

        .cta-content {
            max-width: 700px;
            margin: 0 auto;
        }

        .cta-content h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .cta-content p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        /* Responsive Styles */
        @media screen and (max-width: 768px) {
            .page-header {
                height: 200px;
            }

            .page-header h1 {
                font-size: 2rem;
            }

            .service-detailed-item {
                flex-direction: column;
            }

            .service-icon {
                flex: 0 0 100px;
            }

            .service-features {
                grid-template-columns: 1fr;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
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

    <section class="page-header">
        <div class="header-content">
            <h1>Our Services</h1>
            <p>Comprehensive real estate solutions tailored to your needs</p>
        </div>
    </section>

    <section class="services-detailed">
        <div class="container">
            <div class="services-intro">
                <h2>Comprehensive Real Estate Solutions</h2>
                <p>At Proma Africa, we offer a wide range of specialized services designed to meet the diverse needs of our clients. From precise land surveying to strategic asset management, our expert team delivers innovative solutions that drive success in the real estate sector.</p>
            </div>
            
            <div class="service-detailed-item">
                <div class="service-icon">
                    <i class="fas fa-building"></i>
                </div>
                <div class="service-content">
                    <a href="landsurveying.php">
                        <h3>Land Surveying</h3>
                    </a>
                    <p>Our professional land surveying services involves measuring and mapping of a plot of land to determine its boundaries, size, and characteristics for personal, Private institutions and Government use.</p>
                    <div class="service-features">
                        <div class="feature">
                            <i class="fas fa-check-circle"></i>
                            <span>	Site inspection</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check-circle"></i>
                            <span>Land use plan</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check-circle"></i>
                            <span>Zoning & permits</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check-circle"></i>
                            <span>	Boundaries verification & Recovery</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="service-detailed-item">
                <div class="service-icon">
                    <i class="fas fa-map-marked-alt"></i>
                </div>
                <div class="service-content">
                    <a href="propertyfinancing.php">
                        <h3>Valuation Advisory Services</h3>
                    </a>
                    <p> Estimating the monetary worth of an asset for a specific purpose & at a particular time for personal, Private institutions and Government use.</p>
                    <div class="service-features">
                        <div class="feature">
                            <i class="fas fa-check-circle"></i>
                            <span>•	Machinery and Equipment</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check-circle"></i>
                            <span>Brand Valuation</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check-circle"></i>
                            <span>•	Intellectual Property</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check-circle"></i>
                            <span>Technology Valuation</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="service-detailed-item">
                <div class="service-icon">
                    <i class="fas fa-home"></i>
                </div>
                <div class="service-content">
                    <a href="propertylisting.php">
                        <h3>Plots, Farms & Houses</h3>
                    </a>
                    <p>Our portfolio includes professional qualified to help individual & private instructions buy and sell  with high transparency and professionalism.</p>
                    <div class="service-features">
                        <div class="feature">
                            <i class="fas fa-check-circle"></i>
                            <span>Residential & Commercial plots</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check-circle"></i>
                            <span>	Residential & commercial buildings</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check-circle"></i>
                            <span>Agricultural use</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check-circle"></i>
                            <span>Investment purposes</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="service-detailed-item">
                <div class="service-icon">
                    <i class="fas fa-home"></i>
                </div>
                <div class="service-content">
                    <a href="propertymanagement.php">
                        <h3>Property Management</h3>
                    </a>
                    <p>Our property management services are managing buildings on behalf of clients, aiming to maximize returns while managing risks, for personal use, for private instructions & Government.</p>
                    <div class="service-features">
                        <div class="feature">
                            <i class="fas fa-check-circle"></i>
                            <span>Searching for clients</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check-circle"></i>
                            <span>	Managing Vendors leases</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check-circle"></i>
                            <span>	Maintenance and repair of the building</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check-circle"></i>
                            <span>	Managing Tenants Lease</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="service-detailed-item">
                <div class="service-icon">
                    <i class="fas fa-people-arrows"></i>
                </div>
                <div class="service-content">
                    <a href="assetmanagement.php">
                        <h3>Asset Management</h3>
                    </a>
                    <p>Our asset management services involvesplanning and controlling the acquisition, operation, maintenance, renewal, and disposal of organizational assets, for personal use, for private instructions & Government.</p>
                    <div class="service-features">
                        <div class="feature">
                            <i class="fas fa-check-circle"></i>
                            <span>Bar codes</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check-circle"></i>
                            <span>	QR codes</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check-circle"></i>
                            <span>Asset tracking & verification</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check-circle"></i>
                            <span>Developing an asset database</span>
                        </div>
                    </div>
                </div>
            </div>

            
                
            <div class="service-detailed-item">
                <div class="service-icon">
                    <i class="fas fa-handshake"></i>
                </div>
                <div class="service-content">
                    <a href="landadministration.php">
                        <h3>Land Administration Services</h3>
                    </a>
                    <p>Our land administration services involves recording and distributing information about the ownership, value, use of land and its resources for personal use, private instructions use & Government use. </p>
                    <div class="service-features">
                        <div class="feature">
                            <i class="fas fa-check-circle"></i>
                            <span>Title Registration</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check-circle"></i>
                            <span>Certificate of Right of occupancy facilitation</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check-circle"></i>
                            <span>	Title deed transfer</span>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Get Started?</h2>
                <p>Contact our team today to discuss your property needs and how we can help you achieve your real estate goals.</p>
                <a href="contact.php" class="cta-button">Contact Us</a>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <img src="1.png" alt="Proma Africa Logo">
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
    <form class="newsletter-form" action="subscribe.php" method="POST">
        <input type="email" name="email" placeholder="Your Email Address" required>
        <button type="submit">Subscribe</button>
    </form>
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