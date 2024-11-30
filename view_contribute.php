<?php
include 'connection.php';

// Admin-only check (add login check if needed)
$conn = new mysqli("localhost", "root", "", "Leafly_DB");

$sql = "SELECT * FROM userContribution";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>Contribution ID</th>
                <th>Plant Name</th>
                <th>Plant Family</th>
                <th>Plant Genus</th>
                <th>Plant Species</th>
                <th>Fresh Leaf</th>
                <th>Herbarium</th>
                <th>Contribution Date</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['contributionID']}</td>
                <td>{$row['plantName']}</td>
                <td>{$row['plantFamily']}</td>
                <td>{$row['plantGenus']}</td>
                <td>{$row['plantSpecies']}</td>
                <td><a href='{$row['freshLeafPath']}' target='_blank'>View</a></td>
                <td><a href='{$row['herbariumPath']}' target='_blank'>View</a></td>
                <td>{$row['contribution_date']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No contributions found.";
}

$conn->close();
?>
