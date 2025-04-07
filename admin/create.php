<?php
session_start();
if (!isset($_SESSION["admin"])) {
    header("Location: index.php");
    exit();
}

$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $date = $_POST["date"];
    $category = $_POST["category"];
    $fullText = $_POST["fullText"];
    $author = $_POST["author"];

    // Database connection details (IMPORTANT: Change these!)
    $host = "localhost";
    $dbname = "proma";
    $dbuser = "root";
    $dbpass = "";

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $dbuser, $dbpass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Use a prepared statement to prevent SQL injection
        $stmt = $pdo->prepare("INSERT INTO articles (title, date, category, fullText, author) VALUES (:title, :date, :category, :fullText, :author)");
        $stmt->execute([
            ':title' => $title,
            ':date' => $date,
            ':category' => $category,
            ':fullText' => $fullText,
            ':author' => $author
        ]);

        $message = "Article created successfully!";

    } catch (PDOException $e) {
        $message = "Error creating article: " . $e->getMessage();
        error_log("Database error in create.php: " . $e->getMessage()); // Log the error
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Article</title>
    <link rel="stylesheet" href="admin.css">
    <style>
        textarea {
            width: 100%;
            height: 200px;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
            resize: vertical;
        }
    </style>
</head>

<body>
    <div class="create-container">
        <h2>Create New Article</h2>
        <?php if ($message) : ?>
            <p class="<?php echo strpos($message, 'Error') !== false ? 'error' : 'success'; ?>"><?php echo $message; ?></p>
        <?php endif; ?>
        <form method="post">
            <input type="text" name="title" placeholder="Title" required>
            <input type="date" name="date" placeholder="Date" required>
            <select name="category" required>
                <option value="">Select Category</option>
                <option value="market-trends">Market Trends</option>
                <option value="technology">Technology</option>
                <option value="sustainability">Sustainability</option>
                <option value="investment">Investment</option>
                <option value="policy-updates">Policy Updates</option>
                <option value="community-development">Community Development</option>
            </select>
            <input type="text" name="author" placeholder="Author" required>
            <textarea name="fullText" placeholder="Full Text" required></textarea>
            <button type="submit">Create Article</button>
        </form>
        <a href="dashboard.php">Back to Dashboard</a>
    </div>
</body>

</html>