<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Lawrence Lian">
    <meta name="description" content="View and manage all registered users">
    <meta name="keywords" content="admin, view, users, management">

    <link rel="stylesheet" type="text/css" href="style/style.css">
    <title>View Users</title>
</head>
<body>
    <!-- Header -->
    <?php include 'include/header.php'; ?>

    <!-- Main Content -->
    <div class="view-users__main-content">
        <h1>View Users</h1>
        <p>Manage all registered users, including their registration date and time.</p>

        <div class="view-users__dashboard-sections">
            <!-- Back to Dashboard Button -->
            <section>
                <a href="view_admin.php" class="btn">Back to Dashboard</a>
            </section>

            <!-- User Management Table -->
            <section>
                <h2>Registered Users</h2>
                <table class="view-users__user-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Registration Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'connection.php';
                        include 'database.php';

                        // Fetch all registered users
                        $query = "SELECT userID, username, email, reg_date FROM registeredUsers";
                        $result = $conn->query($query);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . htmlspecialchars($row['userID']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['username']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['reg_date']) . "</td>";
                                echo "<td>
                                    <form action='delete_user.php' method='post' onsubmit='return confirmDelete(\"" . htmlspecialchars($row['username']) . "\");'>
                                        <input type='hidden' name='userID' value='" . htmlspecialchars($row['userID']) . "'>
                                        <button type='submit' class='view-users__btn'>Delete</button>
                                    </form>
                                </td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5'>No users found.</td></tr>";
                        }

                        $conn->close();
                        ?>
                    </tbody>
                </table>
            </section>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <?php include 'include/footer.php'; ?>
    </footer>

    <?php include 'include/bckToTopBtn.php'; ?>

    <script>
        function confirmDelete(username) {
            return confirm("Are you sure you want to delete the user " + username + "?");
        }
    </script>
</body>
</html>