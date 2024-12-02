<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Lawrence Lian">
    <meta name="description" content="View and manage all user contributions">
    <meta name="keywords" content="admin, view, contributions, management">

    <link rel="stylesheet" type="text/css" href="style/style.css">
    <title>View Contributions</title>
</head>
<body>
    <!-- Header -->
    <?php include 'include/header.php'; ?>

    <!-- Main Content -->
    <div class="view-contributions__main-content">
        <h1>View Contributions</h1>
        <p>Manage all user contributions.</p>

        <div class="view-contributions__dashboard-sections">
            <!-- Back to Dashboard Button -->
            <section>
                <a href="view_admin.php" class="btn">Back to Dashboard</a>
            </section>

            <!-- Contribution Management Table -->
            <section>
                <h2>User Contributions</h2>
                <div class="view-contributions__table-wrapper">
                    <table class="view-contributions__contribution-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Plant Name</th>
                                <th>Plant Family</th>
                                <th>Plant Genus</th>
                                <th>Plant Species</th>
                                <th>Pictures</th>
                                <th>Contribution Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'connection.php';
                            include 'database.php';

                            // Fetch all user contributions
                            $query = "SELECT contributionID, plantName, plantFamily, plantGenus, plantSpecies, picturePath, contribution_date FROM userContribution";
                            $result = $conn->query($query);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    // Split the picturePath into freshLeafPath and herbariumPath
                                    list($freshLeafPath, $herbariumPath) = explode(';', $row['picturePath']);
                                    echo "<tr>";
                                    echo "<td>" . htmlspecialchars($row['contributionID']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['plantName']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['plantFamily']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['plantGenus']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['plantSpecies']) . "</td>";
                                    echo "<td><a href='" . htmlspecialchars($freshLeafPath) . "' target='_blank'>Fresh Leaf</a> | <a href='" . htmlspecialchars($herbariumPath) . "' target='_blank'>Herbarium</a></td>";
                                    echo "<td>" . htmlspecialchars($row['contribution_date']) . "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='7'>No contributions found.</td></tr>";
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