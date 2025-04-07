<?php
session_start();
if (!isset($_SESSION["admin"])) {
    header("Location: index.php");
    exit();
}

// Database connection details (IMPORTANT: Change these!)
$host = "localhost";
$dbname = "proma";
$dbuser = "root";
$dbpass = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->query("SELECT id, title, date, category FROM articles ORDER BY date DESC");
    if (!$stmt) {
        throw new PDOException("Query failed: " . implode(" ", $pdo->errorInfo()));
    }
    $articles = $stmt->fetchAll(PDO::FETCH_ASSOC); // Fetch as associative array

} catch (PDOException $e) {
    error_log("Database error in dashboard.php: " . $e->getMessage() . " (Code: " . $e->getCode() . ")"); // Log the error with code
    echo "Database error: Unable to display articles. Please check the server logs."; // More generic user message
    die(); // Or handle it more gracefully (e.g., redirect to an error page)
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin.css">
</head>

<body>
    <div class="dashboard-container">
        <h2>Admin Dashboard</h2>
        <a href="create.php" class="create-btn">Create New Article</a>

        <h3>Current Articles</h3>
        <?php if (count($articles) > 0) : ?>
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Date</th>
                        <th>Category</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($articles as $article) : ?>
                        <tr>
                            <td><?php echo htmlspecialchars($article["title"], ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php echo htmlspecialchars($article["date"], ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php echo htmlspecialchars($article["category"], ENT_QUOTES, 'UTF-8'); ?></td>
                            <td>
                                <a href="#">Edit</a> | <a href="#">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else : ?>
            <p>No articles found.</p>
        <?php endif; ?>
        <a href="logout.php">Logout</a>
    </div>
</body>

</html>