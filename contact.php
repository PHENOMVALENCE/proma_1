<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Proma Africa</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Contact Page Specific Styles */

        /* Page Header Styles */
        .page-header {
            height: 300px;
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('b9.jpg');
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

        /* Contact Section Styles */
        .contact-section {
            padding: 80px 0;
            background-color: #f9f9f9;
        }

        .contact-intro {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 60px;
        }

        .contact-intro h2 {
            color: #333;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .contact-intro p {
            font-size: 1.1rem;
            color: #555;
        }

        .contact-content {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
        }

        .contact-form-container {
            flex: 1;
            min-width: 300px;
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }

        .contact-form-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .contact-form-container h3 {
            color: #333;
            font-size: 1.8rem;
            margin-bottom: 25px;
            text-align: center;
        }

        .contact-form {
            display: flex;
            flex-direction: column;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: 500;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            transition: border-color 0.3s, box-shadow 0.3s;
            font-family: inherit;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            border-color: #f6ae01;
            outline: none;
            box-shadow: 0 0 5px rgba(246, 174, 1, 0.3);
        }

        .form-group select {
            appearance: none;
            background-image: url('data:image/svg+xml;utf8,<svg fill="%23555" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"/><path d="M0 0h24v24H0z" fill="none"/></svg>');
            background-repeat: no-repeat;
            background-position: right 10px center;
            background-size: 20px;
        }

        .form-group textarea {
            resize: vertical;
            min-height: 150px;
        }

        .submit-btn {
            background-color: #f6ae01;
            color: white;
            border: none;
            padding: 14px 28px;
            font-size: 1rem;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
            align-self: center;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-top: 10px;
            width: 100%;
        }

        .submit-btn:hover {
            background-color: #e29f01;
            transform: translateY(-2px);
        }

        .submit-btn:active {
            transform: translateY(0);
        }

        .contact-info {
            flex: 1;
            min-width: 300px;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .info-card {
            background-color: white;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            display: flex;
            align-items: flex-start;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .info-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .info-icon {
            background-color: #f6ae01;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 15px;
            flex-shrink: 0;
        }

        .info-icon i {
            color: white;
            font-size: 1.5rem;
        }

        .info-details h4 {
            color: #333;
            font-size: 1.3rem;
            margin-bottom: 10px;
        }

        .info-details p, .info-details a {
            color: #555;
            line-height: 1.6;
            margin: 0;
        }

        .info-details a {
            color: #555;
            text-decoration: none;
            transition: color 0.3s;
        }

        .info-details a:hover {
            color: #f6ae01;
        }

        /* Map Section Styles */
        .map-section {
            padding: 0;
            height: 450px;
            position: relative;
        }

        .map-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        /* Business Hours Styles */
        .business-hours {
            margin-top: 30px;
        }

        .hours-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .hours-list li {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            color: #555;
        }

        .hours-list .day {
            font-weight: 600;
        }

        /* Form Validation Styles */
        .form-group input:invalid:focus,
        .form-group select:invalid:focus,
        .form-group textarea:invalid:focus {
            border-color: #ff6b6b;
            box-shadow: 0 0 5px rgba(255, 107, 107, 0.3);
        }

        /* Service Checkbox Styles */
        .service-options {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-top: 5px;
        }

        .service-option {
            display: flex;
            align-items: flex-start;
            gap: 10px;
        }

        .service-option input[type="checkbox"] {
            width: auto;
            margin-top: 3px;
            cursor: pointer;
        }

        .service-option label {
            margin: 0;
            cursor: pointer;
            font-weight: normal;
        }

        .service-label {
            font-weight: 500;
            color: #555;
            margin-bottom: 10px;
        }

        /* Enhance checkbox appearance */
        .service-option input[type="checkbox"] {
            appearance: none;
            -webkit-appearance: none;
            width: 18px;
            height: 18px;
            border: 2px solid #ddd;
            border-radius: 3px;
            outline: none;
            transition: all 0.3s;
            position: relative;
            background-color: white;
        }

        .service-option input[type="checkbox"]:checked {
            background-color: #f6ae01;
            border-color: #f6ae01;
        }

        .service-option input[type="checkbox"]:checked::after {
            content: '';
            position: absolute;
            width: 5px;
            height: 10px;
            border: solid white;
            border-width: 0 2px 2px 0;
            top: 1px;
            left: 5px;
            transform: rotate(45deg);
        }

        .service-option input[type="checkbox"]:hover {
            border-color: #f6ae01;
        }

        /* Responsive Styles */
        @media screen and (max-width: 768px) {
            .page-header {
                height: 200px;
                margin-top: 80px;
            }
            
            .page-header h1 {
                font-size: 2rem;
            }
            
            .contact-content {
                flex-direction: column;
            }
            
            .info-card {
                padding: 20px;
            }
            
            .map-section {
                height: 350px;
            }

            .contact-form-container h3 {
                font-size: 1.5rem;
            }

            .submit-btn {
                padding: 12px 20px;
            }

            .service-option {
                padding-right: 10px;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="container">
            <div class="nav-left">
                <div class="logo">
                    <a href="index.php"><img src="1.png" alt="Proma Africa Logo"></a>
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

    <!-- Contact Page Header -->
    <section class="page-header">
        <div class="header-content">
            <h1>Contact Us</h1>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="contact-intro">
                <h2>Get In Touch</h2>
                <p>We are not office traditionalists, our business is everywhere and so are we.<br> You can find us remotely between Dar es Salaam and Zanzibar, Tanzania.</p>
            </div>
            
            <div class="contact-content">
                <div class="contact-form-container">
                    <h3>Contact us today for a free quote</h3>
                    <form class="contact-form" action="process_contact.php" method="post">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" id="name" name="name" placeholder="Enter your full name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" placeholder="Enter your email address" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number">
                        </div>
                        
                        <div class="form-group">
                            <label class="service-label">Which service are you interested in? (Check all that apply)</label>
                            <div class="service-options">
                                <div class="service-option">
                                    <input type="checkbox" id="valuation" name="service[]" value="valuation">
                                    <label for="valuation">Valuation Advisory Services</label>
                                </div>
                                <div class="service-option">
                                    <input type="checkbox" id="surveying" name="service[]" value="surveying">
                                    <label for="surveying">Land Surveying</label>
                                </div>
                                <div class="service-option">
                                    <input type="checkbox" id="administration" name="service[]" value="administration">
                                    <label for="administration">Land Administration</label>
                                </div>
                                <div class="service-option">
                                    <input type="checkbox" id="asset" name="service[]" value="asset">
                                    <label for="asset">Asset Management</label>
                                </div>
                                <div class="service-option">
                                    <input type="checkbox" id="property" name="service[]" value="property">
                                    <label for="property">Property Management</label>
                                </div>
                                <div class="service-option">
                                    <input type="checkbox" id="realestate" name="service[]" value="realestate">
                                    <label for="realestate">Plots/Farms & Houses</label>
                                </div>
                                <div class="service-option">
                                    <input type="checkbox" id="other" name="service[]" value="other">
                                    <label for="other">Other (Please specify in message)</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject" placeholder="Enter the subject of your inquiry" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Your Message</label>
                            <textarea id="message" name="message" placeholder="Please describe how we can help you..." required></textarea>
                        </div>
                        <button type="submit" class="submit-btn">Send Message</button>
                    </form>
                </div>
                
                <div class="contact-info">
                    <div class="info-card">
                        <div class="info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="info-details">
                            <h4>Our Location</h4>
                            <p>Dar es salaam<br> Tanzania </p>
                        </div>
                    </div>
                    
                    <div class="info-card">
                        <div class="info-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="info-details">
                            <h4>Call Us</h4>
                            <p><a href="tel:+255756069451">+255 756 069 451</a></p>
                            <p><a href="tel:+255755989743">+255 755 989 743</a></p>
                        </div>
                    </div>
                    
                    <div class="info-card">
                        <div class="info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="info-details">
                            <h4>Email Us</h4>
                            <p><a href="mailto:info@promaafrica.com">info@promaafrica.com</a></p>
                        </div>
                    </div>
                    
                    <div class="info-card">
                        <div class="info-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="info-details">
                            <h4>Business Hours</h4>
                            <ul class="hours-list">
                                <li><span class="day">Monday - Friday:</span> <span>8:00 AM - 5:00 PM</span></li>
                                <li><span class="day">Saturday:</span> <span>9:00 AM - 1:00 PM</span></li>
                                <li><span class="day">Sunday:</span> <span>Closed</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <div class="map-container">
            <!-- Replace the src with your actual Google Maps embed URL -->
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15958.158879099268!2d39.253849399999996!3d-6.792354150000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c4c66e3a9b07b%3A0x28d6e2ab157d388a!2sDar%20es%20Salaam%2C%20Tanzania!5e0!3m2!1sen!2sus!4v1712000000000!5m2!1sen!2sus" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </section>

    <!-- Footer -->
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

        // Form validation and enhancement
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('.contact-form');
            
            // Add form submission handling
            form.addEventListener('submit', function(event) {
                // You can add custom validation here if needed
                
                // For demonstration purposes, this just shows how you might handle form submission
                // Uncomment the following line to prevent actual form submission for testing
                // event.preventDefault();
                
                // You could add form submission success feedback here
            });
        });
    </script>
</body>
</html>