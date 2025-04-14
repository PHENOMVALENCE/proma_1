<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="favicon.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Latest news, articles and insights on real estate and property valuation in Africa by Proma Africa">
    <title>Article - Proma Africa</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Global Styles */
        :root {
            --primary-color: #0e4d92;
            --secondary-color: #f8b400;
            --accent-color: #1a75ff;
            --text-color: #333;
            --light-gray: #f5f5f5;
            --medium-gray: #ddd;
            --dark-gray: #666;
            --shadow: 0 4px 8px rgba(0,0,0,0.1);
            --transition: all 0.3s ease;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: var(--text-color);
            background-color: #fafafa;
        }
        
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        a {
            text-decoration: none;
            color: var(--accent-color);
            transition: var(--transition);
        }
        
        a:hover {
            color: var(--primary-color);
        }
        
        /* Typography */
        h1, h2, h3, h4, h5, h6 {
            font-weight: 600;
            line-height: 1.3;
            margin-bottom: 1rem;
            color: var(--primary-color);
        }
        
        h1 {
            font-size: 2.5rem;
        }
        
        h2 {
            font-size: 2rem;
        }
        
        h3 {
            font-size: 1.5rem;
            margin-top: 2rem;
        }
        
        p {
            margin-bottom: 1.5rem;
        }
        
        /* Navigation Bar */
        .navbar {
            background-color: #fff;
            padding: 1rem 0;
            box-shadow: var(--shadow);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .nav-left {
            display: flex;
            align-items: center;
        }
        
        .logo img {
            height: 60px;
            margin-right: 1rem;
        }
        
        .site-title h1 {
            margin-bottom: 0;
            font-size: 1.5rem;
        }
        
        .site-title p {
            font-size: 0.9rem;
            color: var(--dark-gray);
            margin-bottom: 0;
        }
        
        .navbar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .hamburger-menu {
            position: relative;
        }
        
        .menu-icon {
            display: none;
            cursor: pointer;
            font-size: 1.5rem;
            color: var(--primary-color);
        }
        
        .menu-links {
            display: flex;
            gap: 1.5rem;
        }
        
        .menu-links a {
            color: var(--text-color);
            font-weight: 500;
            position: relative;
        }
        
        .menu-links a:hover {
            color: var(--primary-color);
        }
        
        .menu-links a.news-link {
            color: var(--primary-color);
        }
        
        .menu-links a:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: var(--secondary-color);
            transition: var(--transition);
        }
        
        .menu-links a:hover:after {
            width: 100%;
        }
        
        /* Article Container */
        .article-container {
            padding: 3rem 0;
        }
        
        .article-header {
            margin-bottom: 2rem;
        }
        
        .back-to-blog {
            display: inline-flex;
            align-items: center;
            margin-bottom: 1.5rem;
            font-weight: 500;
            color: var(--dark-gray);
        }
        
        .back-to-blog i {
            margin-right: 0.5rem;
        }
        
        .article-meta {
            display: flex;
            gap: 1.5rem;
            margin-top: 1rem;
            color: var(--dark-gray);
            font-size: 0.9rem;
        }
        
        .article-meta span {
            display: flex;
            align-items: center;
        }
        
        .article-meta i {
            margin-right: 0.5rem;
        }
        
        .article-icon {
            background-color: var(--light-gray);
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 2rem;
            font-size: 2rem;
            color: var(--primary-color);
        }
        
        .article-content {
            background-color: #fff;
            padding: 2.5rem;
            border-radius: 8px;
            box-shadow: var(--shadow);
            margin-bottom: 2rem;
        }
        
        .article-content p:first-of-type {
            font-size: 1.1rem;
            font-weight: 500;
        }
        
        .article-content ul,
        .article-content ol {
            margin-bottom: 1.5rem;
            padding-left: 1.5rem;
        }
        
        .article-content li {
            margin-bottom: 0.5rem;
        }
        
        .article-content strong {
            color: var(--primary-color);
        }
        
        /* Share Section */
        .article-share {
            margin-bottom: 3rem;
        }
        
        .article-share h4 {
            margin-bottom: 1rem;
        }
        
        .share-buttons {
            display: flex;
            gap: 1rem;
        }
        
        .share-buttons a {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            color: #fff;
            transition: var(--transition);
        }
        
        .share-facebook {
            background-color: #3b5998;
        }
        
        .share-twitter {
            background-color: #1da1f2;
        }
        
        .share-linkedin {
            background-color: #0077b5;
        }
        
        .share-whatsapp {
            background-color: #25d366;
        }
        
        .share-buttons a:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow);
        }
        
        /* Comments Section */
        .comments-section {
            margin-bottom: 3rem;
        }
        
        .comments-container {
            margin-bottom: 2rem;
        }
        
        .comment {
            display: flex;
            gap: 1rem;
            padding: 1.5rem;
            border-bottom: 1px solid var(--medium-gray);
        }
        
        .comment-avatar {
            font-size: 2rem;
            color: var(--dark-gray);
            min-width: 50px;
        }
        
        .comment-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 0.5rem;
        }
        
        .comment-header h4 {
            margin-bottom: 0;
            font-size: 1.1rem;
        }
        
        .comment-date {
            color: var(--dark-gray);
            font-size: 0.9rem;
        }
        
        .comment-content p {
            margin-bottom: 0;
        }
        
        .no-comments {
            text-align: center;
            padding: 2rem;
            color: var(--dark-gray);
            font-style: italic;
        }
        
        /* Comment Form */
        .comment-form {
            background-color: var(--light-gray);
            padding: 2rem;
            border-radius: 8px;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }
        
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid var(--medium-gray);
            border-radius: 4px;
            font-family: inherit;
            transition: var(--transition);
        }
        
        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--accent-color);
            box-shadow: 0 0 0 3px rgba(26, 117, 255, 0.1);
        }
        
        .submit-comment {
            background-color: var(--primary-color);
            color: #fff;
            border: none;
            padding: 0.8rem 1.5rem;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 500;
            transition: var(--transition);
        }
        
        .submit-comment:hover {
            background-color: var(--accent-color);
        }
        
        /* Related Articles */
        .related-articles {
            background-color: var(--light-gray);
            padding: 3rem 0;
        }
        
        .related-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }
        
        .related-card {
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            display: flex;
            flex-direction: column;
        }
        
        .related-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.15);
        }
        
        .related-img {
            height: 150px;
            background-color: var(--primary-color);
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            font-size: 3rem;
        }
        
        .related-content {
            padding: 1.5rem;
        }
        
        .related-content h4 {
            margin-bottom: 0.5rem;
            font-size: 1.2rem;
        }
        
        .date {
            color: var(--dark-gray);
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }
        
        .read-more {
            font-weight: 500;
            display: inline-flex;
            align-items: center;
        }
        
        .read-more:after {
            content: '\f061';
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            margin-left: 0.5rem;
            transition: var(--transition);
        }
        
        .read-more:hover:after {
            transform: translateX(5px);
        }
        
        /* Contact Section */
        .contact-simplified {
            padding: 3rem 0;
            text-align: center;
        }
        
        .contact-info-simplified {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 2rem;
            margin-top: 2rem;
        }
        
        .info-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            min-width: 200px;
        }
        
        .info-item i {
            font-size: 1.5rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }
        
        .info-item p {
            margin-bottom: 0.5rem;
        }
        
        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }
        
        .social-links a {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: var(--primary-color);
            color: #fff;
            transition: var(--transition);
        }
        
        .social-links a:hover {
            background-color: var(--accent-color);
            transform: translateY(-3px);
        }
        
        /* Footer */
        .footer {
            background-color: #002147;
            color: #fff;
            padding: 3rem 0 1rem;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }
        
        .footer-logo img {
            height: 60px;
            margin-bottom: 1rem;
        }
        
        .footer-logo p {
            color: rgba(255, 255, 255, 0.8);
        }
        
        .footer-links h4,
        .footer-newsletter h4 {
            color: #fff;
            position: relative;
            padding-bottom: 1rem;
            margin-bottom: 1.5rem;
        }
        
        .footer-links h4::after,
        .footer-newsletter h4::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 2px;
            background-color: var(--secondary-color);
        }
        
        .footer-links ul {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 0.8rem;
        }
        
        .footer-links a {
            color: rgba(255, 255, 255, 0.8);
            transition: var(--transition);
        }
        
        .footer-links a:hover {
            color: var(--secondary-color);
            padding-left: 5px;
        }
        
        .newsletter-form {
            display: flex;
            margin-top: 1.5rem;
        }
        
        .newsletter-form input {
            flex: 1;
            padding: 0.8rem;
            border: none;
            border-radius: 4px 0 0 4px;
            font-family: inherit;
        }
        
        .newsletter-form button {
            background-color: var(--secondary-color);
            color: var(--text-color);
            border: none;
            padding: 0 1.5rem;
            border-radius: 0 4px 4px 0;
            cursor: pointer;
            font-weight: 500;
            transition: var(--transition);
        }
        
        .newsletter-form button:hover {
            background-color: #e0a800;
        }
        
        .footer-bottom {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.9rem;
        }
        
        /* Responsive Styles */
        @media (max-width: 992px) {
            h1 {
                font-size: 2rem;
            }
            
            h2 {
                font-size: 1.8rem;
            }
            
            .related-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        
        @media (max-width: 768px) {
            .menu-icon {
                display: block;
            }
            
            .menu-links {
                position: absolute;
                top: 100%;
                right: 0;
                flex-direction: column;
                background-color: #fff;
                box-shadow: var(--shadow);
                padding: 1.5rem;
                border-radius: 4px;
                min-width: 200px;
                gap: 1rem;
                display: none;
                z-index: 100;
            }
            
            .menu-links.show {
                display: flex;
            }
            
            .article-content {
                padding: 1.5rem;
            }
            
            .article-meta {
                flex-direction: column;
                gap: 0.5rem;
            }
            
            .related-grid {
                grid-template-columns: 1fr;
            }
        }
        
        @media (max-width: 576px) {
            .site-title h1 {
                font-size: 1.2rem;
            }
            
            .site-title p {
                font-size: 0.8rem;
            }
            
            .logo img {
                height: 45px;
            }
            
            .article-header h1 {
                font-size: 1.8rem;
            }
            
            .article-icon {
                width: 60px;
                height: 60px;
                font-size: 1.5rem;
            }
            
            .contact-info-simplified {
                flex-direction: column;
                align-items: center;
                gap: 2rem;
            }
            
            .footer-content {
                grid-template-columns: 1fr;
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
                    <p></p>
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
                    <a href="news.php" class="news-link">News & Blogs</a>
                    <a href="contact.php">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Article Content -->
    <section class="article-container">
        <div class="container">
            <div class="article-header">
                <a href="news.php" class="back-to-blog"><i class="fas fa-arrow-left"></i> Back to News & Blogs</a>
                
                <?php
                // Get article ID from URL parameter with security measures
                $article_id = isset($_GET['id']) ? filter_var($_GET['id'], FILTER_VALIDATE_INT) : 0;
                
                // Set default values
                $title = "Article Not Found";
                $date = "N/A";
                $icon = "fas fa-exclamation-circle";
                $content = '<p>The requested article is not available or does not exist. Please check the URL or return to the <a href="news.php">News & Blogs</a> page.</p>';
                
                // In a real implementation, you would fetch article data from a database
                // For demonstration, we'll use a switch statement to show different content based on ID
                
                if ($article_id > 0) {
                    switch($article_id) {
                        case 1:
                            $title = "The Impact of ESG on African Real Estate Valuations";
                            $date = "April 5, 2025";
                            $icon = "fas fa-chart-area";
                            $content = '
                                <p>Environmental, Social, and Governance (ESG) criteria are increasingly influencing property valuations across Africa. This shift represents a fundamental change in how assets are valued, with sustainable properties commanding premium prices.</p>
                                
                                <h3>The Rise of ESG in African Real Estate</h3>
                                <p>As global investors increasingly prioritize sustainability and social responsibility, African real estate markets are adapting to these new demands. Properties that meet stringent ESG criteria often command premium valuations, reflecting their lower operational costs, reduced environmental impact, and alignment with international standards.</p>
                                
                                <p>Institutional investors, particularly those from Europe and North America, are now requiring ESG compliance as a prerequisite for capital deployment in African markets. This trend is accelerating the adoption of green building practices, energy-efficient designs, and community-focused development across the continent.</p>
                                
                                <h3>Key ESG Factors Affecting Property Valuations</h3>
                                <p><strong>Environmental factors:</strong> Energy efficiency ratings, water conservation measures, waste management systems, and carbon footprint reduction strategies are increasingly reflected in property valuations. Buildings with EDGE, LEED, or Green Star certifications typically command 5-15% higher rental rates compared to non-certified properties.</p>
                                
                                <p><strong>Social factors:</strong> Properties that contribute positively to local communities through employment opportunities, public amenities, and inclusive design are gaining favor among both investors and occupiers. Social impact assessments are becoming standard practice in development appraisals.</p>
                                
                                <p><strong>Governance factors:</strong> Transparent ownership structures, ethical business practices, and compliance with regulatory requirements are essential for maintaining investor confidence and securing premium valuations in the African market context.</p>
                                
                                <h3>Regional Variations Across Africa</h3>
                                <p>ESG implementation varies significantly across African regions. South Africa leads the continent with established green building councils and certification systems, while nations like Kenya, Rwanda, and Ghana are rapidly catching up with progressive policies and incentives for sustainable development.</p>
                                
                                <p>North African markets, particularly Morocco and Egypt, are seeing increased ESG focus in response to climate change concerns and water scarcity issues. West African commercial hubs like Lagos and Accra are experiencing growing demand for ESG-compliant office spaces from multinational tenants.</p>
                                
                                <h3>Implications for Stakeholders</h3>
                                <p><strong>For investors:</strong> The ESG premium is increasingly reflected in asset valuations, potentially offering both higher returns and lower risk profiles for compliant properties. Forward-thinking investors are already incorporating ESG criteria into their acquisition due diligence processes.</p>
                                
                                <p><strong>For developers:</strong> The initial cost premium for ESG-compliant developments (typically 2-8% above conventional construction) is increasingly offset by higher valuations, better financing terms, and stronger tenant demand. The business case for sustainable development is becoming compelling across most African markets.</p>
                                
                                <p><strong>For occupiers:</strong> ESG-compliant buildings often offer lower operational costs through reduced energy and water consumption, creating win-win scenarios for both landlords and tenants.</p>
                                
                                <h3>Looking Forward</h3>
                                <p>As African economies continue to urbanize and formalize, ESG considerations will play an increasingly central role in property valuations across all sectors. Stakeholders who proactively embrace these standards are likely to benefit from more resilient asset values and stronger market positions in the coming years.</p>
                                
                                <p>At Proma Africa, our valuation methodologies now incorporate comprehensive ESG assessments to provide our clients with forward-looking valuations that reflect these important market shifts.</p>
                            ';
                            break;
                        
                        case 5: // The Property Development Process article
                            $title = "Property Development Process in Tanzania";
                            $date = "February 15, 2025";
                            $icon = "fas fa-building";
                            $content = '
                                <p>"Buy land, they\'re not making it anymore" — Mark Twain, writer</p>
                                
                                <h3>Key Terms</h3>
                                <p><strong>Property development</strong> – the process of acquiring land and constructing buildings for occupation, sale or investment. Development also includes improving and/or changing the use of existing buildings.</p>
                                
                                <p><strong>Development value</strong> – where the value of land or buildings can be increased by the application of capital.</p>
                                
                                <p>Property development is an entrepreneurial activity that seeks to satisfy demand in the property market, by involving the use of factors of production: LAND for site, LABOUR to design, construct and manage the process; CAPITAL to pay for process.</p>
                                
                                <p>A property developer combines LAND, LABOUR & CAPITAL for a lifetime investment. At Proma Africa, we will assist on the following for professional and sound decision making:</p>
                                
                                <h3>The Development Process</h3>
                                <ol>
                                    <li>Proma Africa will carry-out market search on demand for the property suggested by our Client and provide alternatives if there is any.</li>
                                    <li>Proma Africa will facilitate selection of a location and identify a good site for our property development.</li>
                                    <li>Proma Africa will assist in land acquisition, either from the Government for investment purposes or through Private purchase.</li>
                                    <li>Proma Africa will assist in seeking planning consents for the property development.</li>
                                    <li>Proma Africa will assist on documenting the financing stage/ source of finance.</li>
                                    <li>Proma Africa will produce a detailed plan on the property development.</li>
                                    <li>Proma Africa will assist in issuing tender documents for construction.</li>
                                    <li>Proma Africa will conduct market search for SELL or LETTING or even PROPERTY MANAGEMENT.</li>
                                    <li>Proma Africa will conduct a post-occupancy survey and reporting as specified by a client.</li>
                                </ol>
                                
                                <p>The process is not linear; it can vary based on the availability of resources, or some activities can take part in parallel. Proma Africa will advise our clients to carry-out pre-marketing advertisement on property developed based on the nature and market conditions.</p>
                                
                                <h3>Benefits of Professional Development Management</h3>
                                <p>Working with experienced property development consultants like Proma Africa brings several advantages to your project:</p>
                                
                                <ul>
                                    <li>Reduced risk through professional market analysis and site selection</li>
                                    <li>Smoother regulatory compliance and approvals process</li>
                                    <li>Access to established networks of contractors and service providers</li>
                                    <li>Optimized project timelines and budget management</li>
                                    <li>Enhanced marketability through strategic positioning</li>
                                </ul>
                                
                                <p>Our team of experienced professionals ensures that each stage of the development process receives the attention to detail it deserves, maximizing returns while minimizing risks.</p>
                                
                                <h3>Case Study: Successful Development in Dar es Salaam</h3>
                                <p>In a recent mixed-use development project in Dar es Salaam, Proma Africa\'s comprehensive approach helped our client navigate complex zoning requirements, secure favorable financing terms, and complete construction 15% under budget. The development achieved 85% occupancy within six months of completion, significantly outperforming market averages.</p>
                                
                                <p>For more information on how Proma Africa can support your property development initiatives in Tanzania, please contact our team for a consultation.</p>
                            ';
                            break;
                            
                        case 2:
                            $title = "Leveraging Earth Observation Data for Land Administration";
                            $date = "March 28, 2025";
                            $icon = "fas fa-satellite";
                            $content = '<p>This article will explore how satellite imagery and Earth observation data are revolutionizing land administration across Africa...</p>';
                            break;
                            
                        case 3:
                            $title = "Urban Growth and Property Value Trends in East Africa";
                            $date = "March 10, 2025";
                            $icon = "fas fa-city";
                            $content = '<p>Analysis of urban expansion patterns and their impact on property values in major East African cities...</p>';
                            break;
                            
                        case 4:
                            $title = "Innovative Approaches to Community Resettlement Projects";
                            $date = "February 22, 2025";
                            $icon = "fas fa-landmark";
                            $content = '<p>Best practices for ethical and sustainable community resettlement in infrastructure development projects...</p>';
                            break;
                    }
                }
                ?>
                
                <h1><?php echo htmlspecialchars($title); ?></h1>
                <div class="article-meta">
                    <span class="article-date"><i class="far fa-calendar-alt"></i> <?php echo htmlspecialchars($date); ?></span>
                    <span class="article-author"><i class="far fa-user"></i> Proma Africa Team</span>
                </div>
            </div>
            
            <div class="article-icon">
                <i class="<?php echo $icon; ?>"></i>
            </div>
            
            <div class="article-content">
                <?php echo $content; ?>
            </div>
            
            <div class="article-share">
                <h4>Share This Article</h4>
                <div class="share-buttons">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>" target="_blank" class="share-facebook" aria-label="Share on Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>&text=