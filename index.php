<?php include 'header.php'; ?>

<div class="home-content">
    <div class="overview-boxes">
        <div class="box">
            <div class="right-side">
                <div class="box-topic">Number of Articles</div>
                <?php
                include 'db.php'; // Include your database connection file
                $sql = "SELECT COUNT(*) as article_count FROM addarticle";
                $result = $conn->query($sql);
                $article_count = 0;
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $article_count = $row['article_count'];
                }
                $conn->close();
                ?>
                <div class="number"><?php echo $article_count; ?></div>
            </div>
            <i class='bx bxs-edit'></i>
        </div>
    </div>
    <div class="articles-boxes">
        <div class="posted-articles box">
            <div class="title">Posted Articles</div>
            <div class="article-details">
                <?php
                include 'db.php';
                $sql = "SELECT date, title, author, category FROM addarticle ORDER BY date DESC LIMIT 6";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    echo '<ul class="details">';
                    echo '<li class="topic">Date</li>';
                    while ($row = $result->fetch_assoc()) {
                        echo '<li><a href="#">' . $row["date"] . '</a></li>';
                    }
                    echo '</ul>';
                    $result->data_seek(0);
                    echo '<ul class="details">';
                    echo '<li class="topic">Article Title</li>';
                    while ($row = $result->fetch_assoc()) {
                        echo '<li><a href="article.php?id=' . $row["id"] . '">' . $row["title"] . '</a></li>';
                    }
                    echo '</ul>';
                    $result->data_seek(0);
                    echo '<ul class="details">';
                    echo '<li class="topic">Author</li>';
                    while ($row = $result->fetch_assoc()) {
                        echo '<li><a href="#">' . $row["author"] . '</a></li>';
                    }
                    echo '</ul>';
                    $result->data_seek(0);
                    echo '<ul class="details">';
                    echo '<li class="topic">Category</li>';
                    while ($row = $result->fetch_assoc()) {
                        echo '<li><a href="#">' . $row["category"] . '</a></li>';
                    }
                    echo '</ul>';
                } else {
                    echo '<p>No articles found.</p>';
                }
                
                $conn->close();
                ?>
            </div>
            <div class="see-all-button" style="text-align: center; margin-top: 20px;">
        <a href="all_articles.php" class="btn btn-primary">See All</a>
    </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
