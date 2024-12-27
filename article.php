<?php include 'header.php'; ?>

<div class="home-content">
    <div class="container">
        <div class="article-content">
            <?php
            include 'db.php';
            if (isset($_GET['id']) && is_numeric($_GET['id'])) {

                $title_id = intval($_GET['id']);
                $sql = "SELECT * FROM addarticle WHERE id = ?";
                $stmt = $conn->prepare($sql);
                
                $stmt->bind_param("i", $title_id);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    echo '<div class="article-box">';
                    echo '<h1>' . htmlspecialchars($row['title']) . '</h1>';
                    echo '<p><strong>Date:</strong> ' . htmlspecialchars($row['date']) . '</p>';
                    echo '<p><strong>Author:</strong> ' . htmlspecialchars($row['author']) . '</p>';
                    echo '<p><strong>Category:</strong> ' . htmlspecialchars($row['category']) . '</p>';
                    echo '<div class="content">' . nl2br(htmlspecialchars($row['content'])) . '</div>';
                    echo '</div>';
                } else {
                    echo '<p>Article not found.</p>';
                }

                $stmt->close();
            } else {
                echo '<p>Invalid article ID.</p>';
            }

            $conn->close();
            ?>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

