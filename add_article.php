<?php
    include ('db.php');
    

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $title = htmlspecialchars($_POST['title']);
        $content = htmlspecialchars($_POST['content']);
        $authorFirstName = htmlspecialchars($_POST['author_first_name']);
        $authorLastName = htmlspecialchars($_POST['author_last_name']);
        $category = htmlspecialchars($_POST['category']);
        $thumbnail = htmlspecialchars($_POST['thumbnail']);

        $author = $authorFirstName . ' ' . $authorLastName;
        $date = date("Y-m-d H:i:s"); 

        if (!empty($title) && !empty($content) && !empty($author) && !empty($category) && !empty($thumbnail)) {
            // Using prepared statement to prevent SQL injection
            $stmt = $conn->prepare("INSERT INTO addarticle (title, content, author, date, category, thumbnail) 
                VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssss", $title, $content, $author, $date, $category, $thumbnail);

            if ($stmt->execute()) {
                echo "New article added successfully!";
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Please fill in <b>ALL</b> fields.";
        }
    }
?>