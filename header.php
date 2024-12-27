<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="sidebar">
    <div class="logo-details">
        <i class='bx bxs-news bx-tada'></i>
        <span class="logo_name">Admin Page</span>
    </div>
    <ul class="nav-links">
        <li><a href="index.php" class="active"><i class='bx bx-grid-alt'></i><span class="links_name">Dashboard</span></a></li>
        <li><a href="#"><i class='bx bx-pie-chart-alt-2'></i><span class="links_name">Statistics</span></a></li>
        <li><a href="add_article_form.php"><i class='bx bx-book-add'></i><span class="links_name">Add Article</span></a></li>
        <li><a href="#"><i class='bx bx-user'></i><span class="links_name">Profile</span></a></li>
        <li><a href="#"><i class='bx bx-cog'></i><span class="links_name">Setting</span></a></li>
        <li class="log_out"><a href="#"><i class='bx bx-log-out'></i><span class="links_name">Log out</span></a></li>
    </ul>
</div>
<section class="home-section">
    <nav>
        <div class="sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
            <span class="dashboard">Dashboard</span>
        </div>
        <div class="profile-details">
            <img src="admin.jpg" alt="">
            <span class="admin_name">admin</span>
            <i class='bx bx-chevron-down'></i>
        </div>
    </nav>
