<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Gibson">
    <meta name="description" content="Admin Dashboard">
    <meta name="keywords" content="admin, view, dashboard">

    <link rel="stylesheet" type="text/css" href="style/style.css">
    <title>Admin View</title>
</head>
<body>
    <!-- Header -->
     <?php include 'include/header.php'; ?>

    <!--search bar-->
    <div class="search-bar">
        <form action="search.php" method="POST">
            <input type="text" name="search" placeholder="Search">
            <button type="submit" name="submit-search">Search</button>
        </form>

    <!-- Sidebar -->
    <div class="sidebar-admin">
        <a href="user_dashboard.php">View Users</a>
        <a href="view_enquiry.php">View Enquiries</a>
        <a href="view_contribute.php">View Contributions</a>
    </div>
    <!-- Main Content -->
    <div class="main-content-admin">
        <h1>Admin Dashboard</h1>
        <p>Welcome Admin</p>
        <p>Here you can view the listing of users, enquiries, and contributions.</p>
        <ul>
            <li><a href="user_dashboard.php">View Users</a></li>
            <li><a href="view_enquiry.php">View Enquiries</a></li>
            <li><a href="view_contribute.php">View Contributions</a></li>
        </ul>
    </div>
    <!-- Footer -->
        <footer>
        <!-- Include footer part -->
        <?php include 'include/footer.php'; ?>

        <p class="main-acknowledgement"><strong>Acknowledgement</strong></p>
        <div class="footer__acknowledgement-wrapper">
            <a target="_blank" class="footer__acknowledgement-link" href="https://youtu.be/hlwlM4a5rxg?si=U6d04DrWrHZOTRda">Login Form Tutorial</a>
            <a target="_blank" class="footer__acknowledgement-link" href="https://www.youtube.com/watch?v=zh1xus05Kl8&t=40sgit">Button Style</a>
            <a target="_blank" class="footer__acknowledgement-link" href="https://www.geeksforgeeks.org/gradient-borders/">Gradient Border Guide</a>
        </div>
    </footer>

    <?php include 'include/bckToTopBtn.php'; ?>
</body>
</html>

