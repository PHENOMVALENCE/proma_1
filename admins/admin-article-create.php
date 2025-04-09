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

// Define variables to store article data and error messages
$title = $category_id = $author = $content = $status = "";
$title_err = $category_err = $content_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate title
    if (empty(trim($_POST["title"]))) {
        $title_err = "Please enter a title.";
    } else {
        $title = trim($_POST["title"]);
    }

    // Validate category
    if (empty(trim($_POST["category_id"]))) {
        $category_err = "Please select a category.";
    } else {
        $category_id = trim($_POST["category_id"]);
    }

    // Validate content
    if (empty(trim($_POST["content"]))) {
        $content_err = "Please enter the article content.";
    } else {
        $content = trim($_POST["content"]);
    }

    // Set author (you might want to get this from the session or let the user edit it)
    $author = trim($_POST["author"]);

    // Set status
    $status = trim($_POST["status"]);

    // Check input errors before inserting into the database
    if (empty($title_err) && empty($category_err) && empty($content_err)) {
        // Prepare an insert statement
        $sql = "INSERT INTO news_articles (title, category_id, author, content, status) VALUES (?, ?, ?, ?, ?)";

        if ($stmt = mysqli_prepare($conn, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sissi", $param_title, $param_category_id, $param_author, $param_content, $param_status);

            // Set parameters
            $param_title = $title;
            $param_category_id = $category_id;
            $param_author = $author;
            $param_content = $content;
            $param_status = $status;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Redirect to articles page on success
                header("location: admin-articles.php");
                exit;
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($conn);

}

// Fetch categories for the dropdown
$categories_sql = "SELECT id, name FROM news_categories";
if ($categories_result = mysqli_query($conn, $categories_sql)) {
    $categories = mysqli_fetch_all($categories_result, MYSQLI_ASSOC);
    mysqli_free_result($categories_result);
} else {
    echo "Error fetching categories: " . mysqli_error($conn);
    $categories = [];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Article - Admin</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* (CSS - You'll likely need to add/adjust styles for the form) */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
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

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 5px;
        }

        textarea {
            height: 150px;
        }

        .error {
            color: red;
            font-size: 0.8em;
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Create New Article</h2>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($title); ?>" required>
                <span class="error"><?php echo $title_err; ?></span>
            </div>

            <div class="form-group">
                <label for="category_id">Category</label>
                <select id="category_id" name="category_id" required>
                    <option value="">Select Category</option>
                    <?php foreach ($categories as $category): ?>
                        <option value="<?php echo htmlspecialchars($category['id']); ?>">
                            <?php echo htmlspecialchars($category['name']); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <span class="error"><?php echo $category_err; ?></span>
            </div>

            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" id="author" name="author" value="<?php echo htmlspecialchars($author); ?>">
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea id="content" name="content" required><?php echo htmlspecialchars($content); ?></textarea>
                <span class="error"><?php echo $content_err; ?></span>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select id="status" name="status" required>
                    <option value="draft" <?php if ($status == 'draft') echo "selected"; ?>>Draft</option>
                    <option value="published" <?php if ($status == 'published') echo "selected"; ?>>Published</option>
                </select>
            </div>

            <button type="submit">Create Article</button>
        </form>
    </div>
</body>

</html>