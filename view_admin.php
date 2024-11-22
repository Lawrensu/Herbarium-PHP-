<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="images/constant/leaf.png">
    <title>Admin - User List</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
    <!-- Include header Part -->
    <?php include 'include/header.php'; ?>

    <!-- Connect/Create the database -->
    <?php include 'connection.php'; ?>

    <main class="admin__wrapper container">
        <article class="admin__container">
            <h1>Registered Users</h1>
            <table class="user__list">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Registration Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Query to fetch all users
                    $query = "SELECT id, email, registration_date FROM users";
                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>" . $row['registration_date'] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='3'>No users found</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </article>
    </main>

    <!-- Footer Part -->
    <footer>
        <!-- Include footer part -->
        <?php include 'include/footer.php'; ?>
        // ...existing code...
    </footer>

    <?php include 'include/bckToTopBtn.php'; ?>
</body>
</html>