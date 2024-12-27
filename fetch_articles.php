// fetch_articles.php
<?php
include 'db.php';

// Add error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

$sql = "SELECT date, title, author, category FROM addarticle ORDER BY date DESC LIMIT 6";
$result = $conn->query($sql);

$articles = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $articles[] = $row;
    }
} else {
    // Handle no results
    echo json_encode([]);
    exit;
}

echo json_encode($articles);

$conn->close();
?>
