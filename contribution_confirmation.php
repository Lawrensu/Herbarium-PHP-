<?php
include 'connection.php';

// Database connection
$conn = new mysqli("localhost", "root", "", "Leafly_DB");

// Get the contribution ID from the URL
if (isset($_GET['contributionID'])) {
    $contributionID = intval($_GET['contributionID']);
    $sql = "SELECT * FROM userContribution WHERE contributionID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $contributionID);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Split the picturePath into freshLeafPath and herbariumPath
        list($freshLeafPath, $herbariumPath) = explode(';', $row['picturePath']);
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" type="text/css" href="style/style.css">
            <title>Thank You for Your Contribution</title>
        </head>
        <body>
            <!-- Including header part -->
            <?php include 'include/header.php'; ?>

            <main class="contribution-confirmation__main-content container">
                <div class="contribution-confirmation__container">
                    <h1>Thank You for Your Contribution!</h1>
                    <p>Your contribution has been successfully recorded. Here are the details of your submission:</p>
                    <table class="contribution-confirmation__table">
                        <tr>
                            <th>Plant Name</th>
                            <td><?= htmlspecialchars($row['plantName']) ?></td>
                        </tr>
                        <tr>
                            <th>Plant Family</th>
                            <td><?= htmlspecialchars($row['plantFamily']) ?></td>
                        </tr>
                        <tr>
                            <th>Plant Genus</th>
                            <td><?= htmlspecialchars($row['plantGenus']) ?></td>
                        </tr>
                        <tr>
                            <th>Plant Species</th>
                            <td><?= htmlspecialchars($row['plantSpecies']) ?></td>
                        </tr>
                        <tr>
                            <th>Fresh Leaf Photo</th>
                            <td><img src="<?= htmlspecialchars($freshLeafPath) ?>" alt="Fresh Leaf Photo" width="200"></td>
                        </tr>
                        <tr>
                            <th>Herbarium Photo</th>
                            <td><img src="<?= htmlspecialchars($herbariumPath) ?>" alt="Herbarium Photo" width="200"></td>
                        </tr>
                        <tr>
                            <th>Submission Date</th>
                            <td><?= htmlspecialchars($row['contribution_date']) ?></td>
                        </tr>
                    </table>
                    <p><a href="contribution.php" class="btn">Submit Another Contribution</a></p>
                </div>
            </main>

            <!-- Footer Part -->
            <footer>
                <!-- Include footer part -->
                <?php include 'include/footer.php'; ?>

                <p class="main-acknowledgement"><strong>Acknowledgement</strong></p>
                <div class="footer__acknowledgement-wrapper">
                    <a target="_blank" class="footer__acknowledgement-link" href="https://www.youtube.com/watch?v=dMVLxU7PmB4">Transparent Inquiry Form</a>
                    <a target="_blank" class="footer__acknowledgement-link" href="https://www.youtube.com/watch?v=zh1xus05Kl8&t=40s">Button Style</a>
                    <a target="_blank" class="footer__acknowledgement-link" href="https://www.geeksforgeeks.org/gradient-borders/">Gradient Border Guide</a>
                </div>
            </footer>

            <?php include 'include/bckToTopBtn.php'; ?>
        </body>
        </html>
        <?php
    } else {
        echo "<p>No record found for the provided contribution ID.</p>";
    }
    $stmt->close();
} else {
    echo "<p>Invalid access. No contribution ID provided.</p>";
}

$conn->close();
?>