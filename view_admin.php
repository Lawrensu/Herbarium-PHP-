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

    <!-- Main Content -->
    <div class="main-content-admin">
        <h1>Admin Dashboard</h1>
        <p>Welcome, Admin! Here, you can manage users, handle enquiries, review contributions, and monitor statistics.</p>

        <div class="dashboard-sections">
            <!-- User Management -->
            <section>
                <h2>User Management</h2>
                <p>View and manage all registered users.</p>
                <a href="view_users.php" class="btn">View Users</a>
            </section>

            <!-- Enquiries -->
            <section>
                <h2>Enquiries</h2>
                <p>Respond to enquiries submitted by users.</p>
                <a href="view_enquiry.php" class="btn">View Enquiries</a>
            </section>

            <!-- Contributions -->
            <section>
                <h2>Contributions</h2>
                <p>Review contributions made by users.</p>
                <a href="view_contribute.php" class="btn">View Contributions</a>
            </section>

            <!-- Logout -->
            <section>
                <h2>Logout</h2>
                <p>Log out securely.</p>
                <a href="logout.php" class="btn">Logout</a>
            </section>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <?php include 'include/footer.php'; ?>
    </footer>

    <?php include 'include/bckToTopBtn.php'; ?>
</body>
</html>
