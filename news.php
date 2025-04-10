<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News & Blogs - Proma Africa</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* News Page Specific Styles */

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

        .page-header h1 {
            font-size: 3rem;
            margin-bottom: 15px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .page-header p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
        }

        /* News Categories Styles */
        .news-categories {
            padding: 30px 0;
            background-color: #f9f9f9;
            border-bottom: 1px solid #eaeaea;
        }

        .category-filter {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            gap: 15px;
        }

        .category-filter span {
            font-weight: 600;
            color: #333;
        }

        .category-btn {
            padding: 8px 16px;
            border-radius: 30px;
            background: #fff;
            color: #555;
            border: 1px solid #ddd;
            text-decoration: none;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .category-btn:hover,
        .category-btn.active {
            background: #f6ae01;
            color: #fff;
            border-color: #f6ae01;
        }

        /* Featured Article Styles */
        .featured-article {
            padding: 60px 0;
            background-color: #fff;
        }

        .featured-card {
            display: flex;
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .featured-image {
            flex: 0 0 250px;
            background-color: #f6ae01;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
        }

        .featured-content {
            flex: 1;
            padding: 40px;
        }

        .category-tag {
            display: inline-block;
            padding: 5px 12px;
            background-color: #e8f4fd;
            color: #2980b9;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .featured-content h2 {
            font-size: 2.2rem;
            color: #333;
            margin-bottom: 15px;
        }

        .meta {
            display: flex;
            gap: 20px;
            font-size: 0.9rem;
            color: #777;
            margin-bottom: 20px;
        }

        .excerpt {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #555;
            margin-bottom: 25px;
        }

        .read-more-btn {
            display: inline-block;
            padding: 12px 24px;
            background-color: #f6ae01;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: 600;
            transition: background-color 0.3s;
            cursor: pointer;
        }

        .read-more-btn:hover {
            background-color: #e29600;
        }

        /* News Grid Styles */
        .news-grid-section {
            padding: 60px 0;
            background-color: #f9f9f9;
        }

        .news-grid-section h2 {
            text-align: center;
            font-size: 2.2rem;
            color: #333;
            margin-bottom: 40px;
            position: relative;
        }

        .news-grid-section h2:after {
            content: "";
            display: block;
            width: 60px;
            height: 3px;
            background-color: #f6ae01;
            margin: 15px auto 0;
        }

        .news-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
        }

        .news-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s, box-shadow 0.3s;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .news-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.1);
        }

        .news-img {
            height: 180px;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .news-img i {
            font-size: 4rem;
            color: #f6ae01;
        }

        .news-content {
            padding: 25px;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .news-content h3 {
            font-size: 1.4rem;
            color: #333;
            margin-bottom: 10px;
        }

        .news-content .date {
            font-size: 0.9rem;
            color: #777;
            margin-bottom: 15px;
        }

        .news-content p {
            color: #555;
            line-height: 1.6;
            margin-bottom: 20px;
            flex: 1;
        }

        .read-more {
            display: inline-block;
            color: #f6ae01;
            font-weight: 600;
            text-decoration: none;
            position: relative;
            padding-right: 25px;
            cursor: pointer;
        }

        .read-more:after {
            content: "→";
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            transition: right 0.3s;
        }

        .read-more:hover:after {
            right: -5px;
        }

        /* Pagination Styles */
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 50px;
            gap: 5px;
        }

        .pagination a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 5px;
            background-color: white;
            color: #555;
            text-decoration: none;
            border: 1px solid #eee;
            transition: all 0.3s;
        }

        .pagination a.next {
            width: auto;
            padding: 0 15px;
        }

        .pagination a.active,
        .pagination a:hover {
            background-color: #f6ae01;
            color: white;
            border-color: #f6ae01;
        }

        /* Newsletter Section Styles */
        .newsletter-section {
            padding: 60px 0;
            background-color: #fff;
        }

        .newsletter-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #f6f9fe;
            border-radius: 10px;
            padding: 40px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .newsletter-content {
            flex: 1;
            padding-right: 40px;
        }

        .newsletter-content h3 {
            font-size: 1.8rem;
            color: #333;
            margin-bottom: 15px;
        }

        .newsletter-content p {
            color: #555;
            font-size: 1.1rem;
        }

        .newsletter-form {
            flex: 0 0 350px;
            display: flex;
        }

        .newsletter-form input {
            flex: 1;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px 0 0 5px;
            font-size: 1rem;
        }

        .newsletter-form button {
            padding: 15px 25px;
            background-color: #f6ae01;
            color: white;
            border: none;
            border-radius: 0 5px 5px 0;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .newsletter-form button:hover {
            background-color: #e29600;
        }

        /* Responsive Styles */
        @media screen and (max-width: 992px) {
            .featured-card {
                flex-direction: column;
            }

            .featured-image {
                flex: 0 0 200px;
            }

            .newsletter-container {
                flex-direction: column;
                text-align: center;
            }

            .newsletter-content {
                padding-right: 0;
                margin-bottom: 30px;
            }

            .newsletter-form {
                flex: 0 0 100%;
                width: 100%;
            }
        }

        @media screen and (max-width: 768px) {
            .page-header {
                height: 220px;
            }

            .page-header h1 {
                font-size: 2.2rem;
            }

            .news-grid {
                grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            }

            .featured-content {
                padding: 25px;
            }

            .featured-content h2 {
                font-size: 1.8rem;
            }
        }

        @media screen and (max-width: 576px) {
            .category-filter {
                flex-direction: column;
                align-items: stretch;
            }

            .category-btn {
                text-align: center;
            }
        }
    </style>
</head>

<body>
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
                    <a href="news.php" class="active" style="color: #f6ae01; font-weight: 600;">News & Blogs</a>
                    <a href="contact.php">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <section class="page-header">
        <div class="container">
            <h1>News & Insights</h1>
            <p>Stay updated with the latest trends, insights, and developments in the real estate industry across Africa</p>
        </div>
    </section>

    <section class="news-categories">
        <div class="container">
            <div class="category-filter">
                <span>Filter by category:</span>
                <a href="#" class="category-btn active" data-category="all">All</a>
                <a href="#" class="category-btn" data-category="market-trends">Market Trends</a>
                <a href="#" class="category-btn" data-category="technology">Technology</a>
                <a href="#" class="category-btn" data-category="sustainability">Sustainability</a>
                <a href="#" class="category-btn" data-category="investment">Investment</a>
                <a href="#" class="category-btn" data-category="policy-updates">Policy Updates</a>
                <a href="#" class="category-btn" data-category="community-development">Community Development</a>
            </div>
        </div>
    </section>
    
    <section class="featured-article" data-category="Property Development"
         data-title="Property Development Process in Tanzania"
         data-author="by PRV Baraka Andrew" data-date="October 26, 2023"
         data-fulltext="Property development is the process of acquiring land and constructing buildings for occupation, sale or investment. Development also includes improving and/or changing the use of existing buildings. Development value - where the value of land or buildings can be increased by the application of capital. Property development is an entrepreneurial activity that seeks to satisfy demand in the property market, by involving the use of factors of production; LAND for site, LABOUR to design, construct and manage the process; CAPITAL to pay for process. A property developer combines LAND, LABOUR & CAPITAL for a lifetime investment. At Proma Africa, we assist on the following for professional and sound decision making: 1. Proma Africa will carry-out market search on demand for the property suggested by our Client and provide alternatives if there is any. 2. Proma Africa will facilitate selection of a location and identify a good site for our property development. 3. Proma Africa will assist in land acquisition, either from the Government for investment purposes or through Private purchase. 4. Proma Africa will assist in seeking planning consents for the property development. 5. Proma Africa will assist on documenting the financing stage/ source of finance. 6. Proma Africa will produce a detailed plan on the property development. 7. Proma Africa will will assist in issuing tender documents for construction. 8. Proma Africa will conduct market search for SELL or LETTING or even PROPERTY MANAGEMENT. 9. Proma Africa will conduct a post-occupancy survey and reporting as specified by a client. The process is not linear it can vary basing on the availability of resources, or some activities can take part in parallel. Proma Africa will advise our clients to carry-out a pre-marketing advertisement on property developed basing on the nature and market conditions.">
    <div class="container">
        <div class="featured-card">
            <div class="featured-image">
                <i class="fas fa-home fa-5x"></i>
            </div>
            <div class="featured-content">
                <span class="category-tag">Property Development</span>
                <h2>Property Development Process in Tanzania</h2>
                <p class="meta">
                    <span class="author"><i class="fas fa-user" style="margin-right: 5px;"></i> By Proma Africa</span>
                    <span class="date"><i class="far fa-calendar-alt" style="margin-right: 5px;"></i> April 20, 2025</span>
                </p>
                <p class="excerpt">
                    Property development is the process of acquiring land and constructing buildings for occupation, sale or investment. Development also includes improving and/or changing the use of existing buildings.
                </p>
                <a href="#" class="read-more-btn">Read Full Article</a>
            </div>
        </div>
    </div>
</section>

    <section class="featured-article" data-category="sustainability" data-title="The Future of Sustainable Real Estate in Africa"
        data-author="by Baraka Andrew" data-date="April 3, 2025"
        data-fulltext="Africa's real estate sector is undergoing a significant transformation with sustainability at its core. This comprehensive analysis explores how green building practices, renewable energy integration, and environmental considerations are reshaping property development across the continent.">
        <div class="container">
            <div class="featured-card">
                <div class="featured-image">
                    <i class="fas fa-globe-africa fa-5x"></i>
                </div>
                <div class="featured-content">
                    <span class="category-tag">Sustainability</span>
                    <h2>The Future of Sustainable Real Estate in Africa</h2>
                    <p class="meta">
                        <span class="author"><i class="fas fa-user" style="margin-right: 5px;"></i> By Proma Africa Research Team</span>
                        <span class="date"><i class="far fa-calendar-alt" style="margin-right: 5px;"></i> April 20, 2025</span>
                    </p>
                    <p class="excerpt">
                        Africa's real estate sector is undergoing a significant transformation with sustainability at its core. This comprehensive analysis explores how green building practices, renewable energy integration, and environmental considerations are reshaping property development across the continent.
                    </p>
                    <a href="#" class="read-more-btn">Read Full Article</a>
                </div>
            </div>
        </div>
    </section>

    <section class="news-grid-section">
        <div class="container">
            <h2>Latest Articles</h2>
            <div class="news-grid">
                <div class="news-card" data-category="market-trends"
                    data-title="The Impact of ESG on African Real Estate Valuations" data-date="April 7, 2025"
                    data-fulltext="Environmental, Social, and Governance (ESG) criteria are increasingly influencing property valuations across Africa. This shift represents a fundamental change in how assets are valued, with sustainable properties commanding premium prices.">
                    <div class="news-img" style="background-color: #f5f9ff;">
                        <i class="fas fa-chart-area"></i>
                    </div>
                    <div class="news-content">
                        <span class="category-tag" style="background-color: #e5f0ff; color: #2573d9;">Market Analysis</span>
                        <h3>The Impact of ESG on African Real Estate Valuations</h3>
                        <p class="date"><i class="far fa-calendar-alt" style="margin-right: 5px;"></i> April 15, 2025</p>
                        <p>Environmental, Social, and Governance (ESG) criteria are increasingly influencing property valuations across Africa. This shift represents a fundamental change in how assets are valued, with sustainable properties commanding premium prices.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>

                <div class="news-card" data-category="technology"
                    data-title="Leveraging Earth Observation Data for Land Administration" data-date="March 28, 2025"
                    data-fulltext="Modern earth observation (EO) technologies are revolutionizing land administration across Africa. Satellite imagery and remote sensing provide accurate, timely data for property boundaries, land use changes, and environmental monitoring.">
                    <div class="news-img" style="background-color: #f5fff9;">
                        <i class="fas fa-satellite"></i>
                    </div>
                    <div class="news-content">
                        <span class="category-tag" style="background-color: #e5ffed; color: #27ae60;">Technology</span>
                        <h3>Leveraging Earth Observation Data for Land Administration</h3>
                        <p class="date"><i class="far fa-calendar-alt" style="margin-right: 5px;"></i> March 28, 2025</p>
                        <p>Modern earth observation (EO) technologies are revolutionizing land administration across Africa. Satellite imagery and remote sensing provide accurate, timely data for property boundaries, land use changes, and environmental monitoring.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>

                <div class="news-card" data-category="market-trends"
                    data-title="Urban Growth and Property Value Trends in East Africa" data-date="March 10, 2025"
                    data-fulltext="Rapid urbanization across East African cities is creating both challenges and opportunities in the real estate market. Our analysis reveals key growth corridors and emerging investment hotspots in metropolitan areas.">
                    <div class="news-img" style="background-color: #fffbf5;">
                        <i class="fas fa-city"></i>
                    </div>
                    <div class="news-content">
                        <span class="category-tag" style="background-color: #fff5e5; color: #e67e22;">Market Trends</span>
                        <h3>Urban Growth and Property Value Trends in East Africa</h3>
                        <p class="date"><i class="far fa-calendar-alt" style="margin-right: 5px;"></i> March 10, 2025</p>
                        <p>Rapid urbanization across East African cities is creating both challenges and opportunities in the real estate market. Our analysis reveals key growth corridors and emerging investment hotspots in metropolitan areas.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>

                <div class="news-card" data-category="community-development"
                    data-title="Innovative Approaches to Community Resettlement Projects" data-date="February 22, 2025"
                    data-fulltext="Sustainable resettlement requires balancing economic, social, and cultural factors. This article explores best practices in community engagement, fair compensation, and long-term livelihood restoration in large infrastructure projects.">
                    <div class="news-img" style="background-color: #f9f5ff;">
                        <i class="fas fa-landmark"></i>
                    </div>
                    <div class="news-content">
                        <span class="category-tag" style="background-color: #f0e5ff; color: #8e44ad;">Community Development</span>
                        <h3>Innovative Approaches to Community Resettlement Projects</h3>
                        <p class="date"><i class="far fa-calendar-alt" style="margin-right: 5px;"></i> February 22, 2025</p>
                        <p>Sustainable resettlement requires balancing economic, social, and cultural factors. This article explores best practices in community engagement, fair compensation, and long-term livelihood restoration in large infrastructure projects.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>

                <div class="news-card" data-category="investment"
                    data-title="Emerging Investment Opportunities in African Commercial Real Estate" data-date="February 15, 2025"
                    data-fulltext="The commercial real estate sector in Africa is presenting unique investment opportunities, particularly in logistics, healthcare facilities, and mixed-use developments. Our experts analyze the most promising submarkets.">
                    <div class="news-img" style="background-color: #fff5f5;">
                        <i class="fas fa-coins"></i>
                    </div>
                    <div class="news-content">
                        <span class="category-tag" style="background-color: #ffe5e5; color: #e74c3c;">Investment</span>
                        <h3>Emerging Investment Opportunities in African Commercial Real Estate</h3>
                        <p class="date"><i class="far fa-calendar-alt" style="margin-right: 5px;"></i> March 15, 2025</p>
                        <p>The commercial real estate sector in Africa is presenting unique investment opportunities, particularly in logistics, healthcare facilities, and mixed-use developments. Our experts analyze the most promising submarkets.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div> </div>


            <div class="pagination">
                <a href="#" class="active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#" class="next">Next <i class="fas fa-angle-right" style="margin-left: 5px;"></i></a>
            </div>
        </div>
    </section>

    <section class="newsletter-section">
        <div class="container">
            <div class="newsletter-container">
                <div class="newsletter-content">
                    <h3><i class="far fa-envelope" style="margin-right: 10px; color: #f6ae01;"></i> Stay Informed</h3>
                    <p>Subscribe to our newsletter to receive the latest insights, market reports, and industry analysis directly to your inbox.</p>
                </div>
                <form class="newsletter-form" action="subscribe.php">
                    <input type="email" placeholder="Your Email Address" required>
                    <button type="submit">Subscribe</button>
                </form>
            </div>
        </div>
    </section>

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
                    <form class="newsletter-form" action="subscribe.php">
                        <input type="email" placeholder="Your Email Address">
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy;
                    <?php echo date('Y'); ?>
                    Proma Africa. All Rights Reserved.
                </p>
            </div>
        </div>
    </footer>

    <div id="article-modal"
        style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 1000; overflow-y: auto;">
        <div id="article-modal-content"
            style="background-color: #fff; margin: 5% auto; padding: 20px; border-radius: 10px; width: 80%; max-width: 800px;">
            <button id="close-modal"
                style="float: right; cursor: pointer; border: none; background: none; font-size: 1.2em;">&times;</button>
            <div id="article-content"></div>
        </div>
    </div>

    <script>
        document.getElementById('menuIcon').addEventListener('click', function () {
            document.getElementById('menuLinks').classList.toggle('show');
        });

        document.addEventListener('click', function (event) {
            const menuLinks = document.getElementById('menuLinks');
            const menuIcon = document.getElementById('menuIcon');

            if (!menuIcon.contains(event.target) && !menuLinks.contains(event.target)) {
                menuLinks.classList.remove('show');
            }
        });

        document.querySelectorAll('.category-btn').forEach(button => {
            button.addEventListener('click', function (e) {
                e.preventDefault();
                const category = this.dataset.category;

                document.querySelectorAll('.news-card, .featured-article').forEach(card => {
                    if (category === 'all' || card.dataset.category === category) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });

                document.querySelectorAll('.category-btn').forEach(btn => {
                    btn.classList.remove('active');
                });
                this.classList.add('active');
            });
        });

        function openArticle(event) {
            event.preventDefault();
            const articleElement = event.target.closest('.news-card, .featured-article');
            if (!articleElement) return;

            const title = articleElement.dataset.title;
            const date = articleElement.dataset.date;
            const author = articleElement.dataset.author;
            const fullText = articleElement.dataset.fulltext;

            const articleContentDiv = document.getElementById('article-content');
            articleContentDiv.innerHTML = `
                <h1>${title}</h1>
                ${author ? `<p class="author">By ${author}</p>` : ''}
                <p class="date">${date}</p>
                <p>${fullText}</p>
            `;

            document.getElementById('article-modal').style.display = 'block';

            // Get styles from the original page
            const styles = window.getComputedStyle(document.body);
            const primaryColor = window.getComputedStyle(document.querySelector('.read-more')).color;
            const headingColor = window.getComputedStyle(document.querySelector('h1')).color;
            const textColor = window.getComputedStyle(document.querySelector('p')).color;
            const metaColor = window.getComputedStyle(document.querySelector('.meta')).color;
            const fontFamily = window.getComputedStyle(document.body).fontFamily;
            const headingFont = window.getComputedStyle(document.querySelector('h1')).fontFamily;

            articleContentDiv.style.fontFamily = fontFamily;
            articleContentDiv.style.color = textColor;

            articleContentDiv.querySelector('h1').style.color = headingColor;
            articleContentDiv.querySelector('h1').style.fontFamily = headingFont;

            const metaElements = articleContentDiv.querySelectorAll('.date, .author');
            metaElements.forEach(el => el.style.color = metaColor);

            const links = articleContentDiv.querySelectorAll('a');
            links.forEach(link => link.style.color = primaryColor);
        }

        document.querySelectorAll('.read-more, .read-more-btn').forEach(link => {
            link.addEventListener('click', openArticle);
        });

        document.getElementById('close-modal').addEventListener('click', function () {
            document.getElementById('article-modal').style.display = 'none';
        });

        // Pagination functionality
        const paginationLinks = document.querySelectorAll('.pagination a');
        const newsCards = document.querySelectorAll('.news-card, .featured-article');
        const articlesPerPage = 6; // Adjust as needed
        let currentPage = 1;

        function showPage(page) {
            newsCards.forEach((card, index) => {
                card.style.display = (index >= (page - 1) * articlesPerPage && index < page * articlesPerPage) ? 'block' : 'none';
            });

            paginationLinks.forEach(link => link.classList.remove('active'));
            document.querySelector(`.pagination a:nth-child(${page})`).classList.add('active');
        }

        function updatePagination() {
            const pageCount = Math.ceil(newsCards.length / articlesPerPage);
            const paginationContainer = document.querySelector('.pagination');
            paginationContainer.innerHTML = ''; // Clear existing pagination

            for (let i = 1; i <= pageCount; i++) {
                const link = document.createElement('a');
                link.href = '#';
                link.textContent = i;
                link.addEventListener('click', (e) => {
                    e.preventDefault();
                    currentPage = i;
                    showPage(currentPage);
                    updatePagination(); // Update pagination active state
                });
                paginationContainer.appendChild(link);
            }

            // Add "Next" button if needed
            if (pageCount > 1) {
                const nextButton = document.createElement('a');
                nextButton.href = '#';
                nextButton.classList.add('next');
                nextButton.textContent = 'Next ';
                const arrowIcon = document.createElement('i');
                arrowIcon.classList.add('fas', 'fa-angle-right');
                nextButton.appendChild(arrowIcon);
                nextButton.addEventListener('click', (e) => {
                    e.preventDefault();
                    currentPage = Math.min(currentPage + 1, pageCount);
                    showPage(currentPage);
                    updatePagination();
                });
                paginationContainer.appendChild(nextButton);
            }

            showPage(currentPage); // Show initial page
            updatePaginationActiveState(); // Set initial active state
        }

        function updatePaginationActiveState() {
            paginationLinks.forEach(link => link.classList.remove('active'));
            document.querySelector(`.pagination a:nth-child(${currentPage})`).classList.add('active');
        }

        updatePagination();
    </script>
</body>

</html>