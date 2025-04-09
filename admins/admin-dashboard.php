<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect to login page
if (!isset($_SESSION["admin_loggedin"]) || $_SESSION["admin_loggedin"] !== true) {
    header("location: admin-login.php");
    exit;
}

// Include database connection
require_once "db_connect.php";

// Function to get total articles count
function getTotalArticles($conn)
{
    $sql = "SELECT COUNT(*) AS total FROM news_articles";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row['total'];
}

// Function to get published articles count
function getPublishedArticles($conn)
{
    $sql = "SELECT COUNT(*) AS total FROM news_articles WHERE status = 'published'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row['total'];
}

// Function to get draft articles count
function getDraftArticles($conn)
{
    $sql = "SELECT COUNT(*) AS total FROM news_articles WHERE status = 'draft'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row['total'];
}

// Function to get featured articles count
function getFeaturedArticles($conn)
{
    $sql = "SELECT COUNT(*) AS total FROM news_articles WHERE featured = 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row['total'];
}

// Get article statistics
$totalArticles = getTotalArticles($conn);
$publishedArticles = getPublishedArticles($conn);
$draftArticles = getDraftArticles($conn);
$featuredArticles = getFeaturedArticles($conn);

// Get recent articles (Adjusted to fetch more data)
$sql = "SELECT 
            a.id, 
            a.title, 
            a.status, 
            a.created_at, 
            c.name AS category_name,
            a.author,
            LEFT(a.content, 150) AS excerpt,
            a.featured
        FROM news_articles a 
        JOIN news_categories c ON a.category_id = c.id 
        ORDER BY a.created_at DESC LIMIT 5";
$recentArticles = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Proma Africa</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* (CSS - No changes needed, keeping it for completeness) */
        /* Global Styles */
        :root {
            --primary-color: #f6ae01;
            --primary-dark: #e29600;
            --secondary-color: #333;
            --text-color: #555;
            --light-bg: #f5f5f5;
            --border-color: #ddd;
            --success-color: #27ae60;
            --warning-color: #f39c12;
            --danger-color: #e74c3c;
            --info-color: #3498db;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: var(--light-bg);
            color: var(--text-color);
            line-height: 1.6;
        }

        a {
            text-decoration: none;
            color: var(--primary-color);
        }

        /* Admin Layout */
        .admin-container {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            background-color: var(--secondary-color);
            color: white;
            position: fixed;
            height: 100%;
            overflow-y: auto;
        }

        .sidebar-header {
            padding: 20px;
            text-align: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .sidebar-header img {
            max-width: 100px;
        }

        .sidebar-header h3 {
            margin-top: 10px;
            font-size: 18px;
        }

        .sidebar-menu {
            padding: 20px 0;
        }

        .sidebar-menu h4 {
            padding: 10px 20px;
            font-size: 14px;
            text-transform: uppercase;
            color: rgba(255, 255, 255, 0.6);
        }

        .menu-item {
            display: block;
            padding: 12px 20px;
            color: rgba(255, 255, 255, 0.8);
            border-left: 3px solid transparent;
            transition: all 0.3s;
        }

        .menu-item:hover,
        .menu-item.active {
            background-color: rgba(255, 255, 255, 0.1);
            border-left-color: var(--primary-color);
            color: white;
        }

        .menu-item i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }

        .sidebar-footer {
            padding: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            position: absolute;
            bottom: 0;
            width: 100%;
        }

        .sidebar-footer a {
            color: rgba(255, 255, 255, 0.8);
            font-size: 14px;
        }

        .sidebar-footer a:hover {
            color: white;
        }

        /* Main Content */
        .main-content {
            flex: 1;
            margin-left: 250px;
            padding: 20px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid var(--border-color);
        }

        .header h2 {
            color: var(--secondary-color);
        }

        .user-info {
            display: flex;
            align-items: center;
        }

        .user-info img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .user-info span {
            font-weight: 600;
            color: var(--secondary-color);
        }

        /* Dashboard Stats */
        .stats-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            display: flex;
            align-items: center;
        }

        .stat-icon {
            width: 60px;
            height: 60px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            font-size: 24px;
            color: white;
        }

        .stat-icon.bg-primary {
            background-color: var(--primary-color);
        }

        .stat-icon.bg-success {
            background-color: var(--success-color);
        }

        .stat-icon.bg-warning {
            background-color: var(--warning-color);
        }

        .stat-icon.bg-info {
            background-color: var(--info-color);
        }

        .stat-details {
            flex: 1;
        }

        .stat-count {
            font-size: 28px;
            font-weight: 700;
            color: var(--secondary-color);
            margin-bottom: 5px;
        }

        .stat-label {
            color: var(--text-color);
            font-size: 14px;
        }

        /* Recent Articles */
        .recent-articles {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .section-header h3 {
            color: var(--secondary-color);
        }

        .btn {
            padding: 8px 16px;
            border-radius: 5px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .btn i {
            margin-right: 5px;
        }

        .btn-primary {
            background-color: var(--primary-color);
            color: white;
            border: none;
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
        }

        .btn-view-all {
            background-color: transparent;
            color: var(--primary-color);
            border: 1px solid var(--primary-color);
        }

        .btn-view-all:hover {
            background-color: var(--primary-color);
            color: white;
        }

        .articles-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        .articles-table th,
        .articles-table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid var(--border-color);
        }

        .articles-table th {
            background-color: var(--light-bg);
            font-weight: 600;
            color: var(--secondary-color);
        }

        .articles-table tbody tr:hover {
            background-color: rgba(246, 174, 1, 0.05);
        }

        .status-badge {
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }

        .status-published {
            background-color: rgba(39, 174, 96, 0.1);
            color: var(--success-color);
        }

        .status-draft {
            background-color: rgba(243, 156, 18, 0.1);
            color: var(--warning-color);
        }

        .status-archived {
            background-color: rgba(231, 76, 60, 0.1);
            color: var(--danger-color);
        }

        .action-btn {
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 12px;
            margin-right: 5px;
            cursor: pointer;
        }

        .action-btn.edit {
            background-color: rgba(52, 152, 219, 0.1);
            color: var(--info-color);
        }

        .action-btn.delete {
            background-color: rgba(231, 76, 60, 0.1);
            color: var(--danger-color);
        }

        /* Responsive */
        @media (max-width: 992px) {
            .sidebar {
                width: 70px;
                overflow: visible;
            }

            .sidebar-header h3,
            .sidebar-menu h4,
            .menu-item span,
            .sidebar-footer {
                display: none;
            }

            .menu-item i {
                margin-right: 0;
                font-size: 18px;
            }

            .main-content {
                margin-left: 70px;
            }

            .menu-item {
                padding: 15px 0;
                text-align: center;
            }
        }

        @media (max-width: 768px) {
            .stats-container {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            }

            .header {
                flex-direction: column;
                align-items: flex-start;
            }

            .user-info {
                margin-top: 10px;
                margin-bottom: 10px;
            }
        }

        @media (max-width: 576px) {
            .main-content {
                padding: 15px;
            }

            .stat-card {
                padding: 15px;
            }

            .stat-icon {
                width: 50px;
                height: 50px;
                font-size: 20px;
            }

            .stat-count {
                font-size: 22px;
            }

            .articles-table th,
            .articles-table td {
                padding: 10px;
            }
        }
    </style>
</head>

<body>
    <div class="admin-container">

        <div class="sidebar">
            <div class="sidebar-header">
                <img src="2.png" alt="Proma Africa Logo">
                <h3>Admin Panel</h3>
            </div>
            <div class="sidebar-menu">
                <h4>Main Menu</h4>
                <a href="admin-dashboard.php" class="menu-item active">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
                <a href="admin-articles.php" class="menu-item">
                    <i class="fas fa-newspaper"></i>
                    <span>Articles</span>
                </a>
                <a href="admin-categories.php" class="menu-item">
                    <i class="fas fa-tags"></i>
                    <span>Categories</span>
                </a>
                <h4>Account</h4>
                <a href="admin-profile.php" class="menu-item">
                    <i class="fas fa-user"></i>
                    <span>Profile</span>
                </a>
                <a href="admin-logout.php" class="menu-item">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </div>
            <div class="sidebar-footer">
                <a href="index.php" target="_blank">
                    <i class="fas fa-external-link-alt"></i>
                    <span>View Website</span>
                </a>
            </div>
        </div>

        <div class="main-content">
            <div class="header">
                <h2>Dashboard</h2>
                <div class="user-info">
                    <img src="https://via.placeholder.com/40" alt="User Avatar">
                    <span>Welcome, <?php echo htmlspecialchars($_SESSION["admin_username"]); ?></span>
                </div>
            </div>

            <div class="stats-container">
                <div class="stat-card">
                    <div class="stat-icon bg-primary">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <div class="stat-details">
                        <div class="stat-count"><?php echo $totalArticles; ?></div>
                        <div class="stat-label">Total Articles</div>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon bg-success">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div class="stat-details">
                        <div class="stat-count"><?php echo $publishedArticles; ?></div>
                        <div class="stat-label">Published Articles</div>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon bg-warning">
                        <i class="fas fa-edit"></i>
                    </div>
                    <div class="stat-details">
                        <div class="stat-count"><?php echo $draftArticles; ?></div>
                        <div class="stat-label">Draft Articles</div>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon bg-info">
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="stat-details">
                        <div class="stat-count"><?php echo $featuredArticles; ?></div>
                        <div class="stat-label">Featured Articles</div>
                    </div>
                </div>
            </div>

            <div class="recent-articles">
                <div class="section-header">
                    <h3>Recent Articles</h3>
                    <div>
                        <a href="admin-article-create.php" class="btn btn-primary">
                            <i class="fas fa-plus"></i> New Article
                        </a>
                        <a href="admin-articles.php" class="btn btn-view-all">
                            View All
                        </a>
                    </div>
                </div>
                <table class="articles-table">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Excerpt</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (mysqli_num_rows($recentArticles) > 0): ?>
                            <?php while ($article = mysqli_fetch_assoc($recentArticles)): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($article['title']); ?></td>
                                    <td><?php echo htmlspecialchars($article['category_name']); ?></td>
                                    <td>
                                        <span class="status-badge status-<?php echo strtolower($article['status']); ?>">
                                            <?php echo ucfirst($article['status']); ?>
                                        </span>
                                    </td>
                                    <td><?php echo date('M d, Y', strtotime($article['created_at'])); ?></td>
                                    <td><?php echo htmlspecialchars($article['excerpt']) . "..."; ?></td>
                                    <td>
                                        <a href="admin-article-edit.php?id=<?php echo $article['id']; ?>"
                                            class="action-btn edit">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <a href="admin-article-delete.php?id=<?php echo $article['id']; ?>"
                                            class="action-btn delete"
                                            onclick="return confirm('Are you sure you want to delete this article?')">
                                            <i class="fas fa-trash-alt"></i> Delete
                                        </a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="6">No recent articles found.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>

<?php
// Close database connection
mysqli_close($conn);
?>