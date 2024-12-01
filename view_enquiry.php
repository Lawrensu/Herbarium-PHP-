<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Lawrence Lian">
    <meta name="description" content="View and manage all user enquiries">
    <meta name="keywords" content="admin, view, enquiries, management">

    <link rel="stylesheet" type="text/css" href="style/style.css">
    <title>View Enquiries</title>
</head>
<body>
    <!-- Header -->
    <?php include 'include/header.php'; ?>

    <!-- Main Content -->
    <div class="view-enquiries__main-content">
        <h1>View Enquiries</h1>
        <p>Manage all user enquiries.</p>

        <div class="view-enquiries__dashboard-sections">
            <!-- Back to Dashboard Button -->
            <section>
                <a href="view_admin.php" class="btn">Back to Dashboard</a>
            </section>

            <!-- Enquiry Management Table -->
            <section>
                <h2>User Enquiries</h2>
                <div class="view-enquiries__table-wrapper">
                    <table class="view-enquiries__enquiry-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Street</th>
                                <th>City</th>
                                <th>State</th>
                                <th>Postcode</th>
                                <th>Category</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'connection.php';
                            include 'database.php';

                            // Fetch all user enquiries
                            $query = "SELECT enquiryID, fname, lname, email, contact, street, city, state, postcode, category FROM userEnquiry";
                            $result = $conn->query($query);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . htmlspecialchars($row['enquiryID']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['fname']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['lname']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['contact']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['street']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['city']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['state']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['postcode']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['category']) . "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='10'>No enquiries found.</td></tr>";
                            }

                            $conn->close();
                            ?>
                        </tbody>
                    </table>
                </div>
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