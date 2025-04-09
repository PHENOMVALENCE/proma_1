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

// Function to safely output HTML (to prevent XSS)
function h($s)
{
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}

// --- Pagination ---
$articles_per_page = 10; // Adjust as needed
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
$page = max(1, $page); // Ensure page is at least 1

// Get total number of articles
$total_articles_sql = "SELECT COUNT(*) FROM news_articles";
$total_result = mysqli_query($conn, $total_articles_sql);
$total_rows = mysqli_fetch_row($total_result)[0];
$total_pages = ceil($total_rows / $articles_per_page);

$page = min($page, $total_pages); // Ensure page is not greater than total pages
$start_from = ($page - 1) * $articles_per_page;

// --- Fetch Articles ---
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
        ORDER BY a.created_at DESC 
        LIMIT ?, ?";

$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "ii", $start_from, $articles_per_page);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$articles = mysqli_fetch_all($result, MYSQLI_ASSOC);

// --- Fetch Categories for Filtering ---
$categories_sql = "SELECT id, name FROM news_categories";
$categories_result = mysqli_query($conn, $categories_sql);
$categories = mysqli_fetch_all($categories_result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Articles - Admin</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* (CSS - You can adjust this to fit your admin layout) */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .article-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .article-table th,
        .article-table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .article-table th {
            background-color: #f2f2f2;
        }

        .action-buttons {
            display: flex;
            gap: 10px;
        }

        .action-button {
            padding: 5px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            color: white;
        }

        .edit-button {
            background-color: #007bff;
        }

        .delete-button {
            background-color: #dc3545;
        }

        .create-button {
            background-color: #28a745;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-bottom: 20px;
            display: inline-block;
        }

        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            gap: 5px;
        }

        .pagination a {
            padding: 5px 10px;
            border: 1px solid #ddd;
            text-decoration: none;
            color: #333;
        }

        .pagination a.active {
            background-color: #007bff;
            color: white;
        }

        .pagination a:hover {
            background-color: #eee;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Manage Articles</h2>

        <a href="admin-article-create.php" class="create-button">Create New Article</a>

        <table class="article-table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Author</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($articles) > 0): ?>
                    <?php foreach ($articles as $article): ?>
                        <tr>
                            <td><?php echo h($article['title']); ?></td>
                            <td><?php echo h($article['category_name']); ?></td>
                            <td><?php echo h($article['author']); ?></td>
                            <td><?php echo date('M d, Y', strtotime($article['created_at'])); ?></td>
                            <td><?php echo h(ucfirst($article['status'])); ?></td>
                            <td class="action-buttons">
                                <a href="admin-article-edit.php?id=<?php echo h($article['id']); ?>"
                                    class="action-button edit-button">Edit</a>
                                <a href="admin-article-delete.php?id=<?php echo h($article['id']); ?>"
                                    class="action-button delete-button"
                                    onclick="return confirm('Are you sure you want to delete this article?')">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6">No articles found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>

        <div class="pagination">
            <?php if ($page > 1): ?>
                <a href="?page=<?php echo $page - 1; ?>">Previous</a>
            <?php endif; ?>

            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                <a href="?page=<?php echo $i; ?>" <?php if ($i == $page) echo 'class="active"'; ?>><?php echo $i; ?></a>
            <?php endfor; ?>

            <?php if ($page < $total_pages): ?>
                <a href="?page=<?php echo $page + 1; ?>">Next</a>
            <?php endif; ?>
        </div>

    </div>
</body>

</html>