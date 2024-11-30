<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>User Enquiry</title>
</head>

<body>
<?php
    $userenquiry = 
    [
        ['id' => 1, 'name' => 'John Doe', 'email' => 'john@example.com', 'message' => 'Hello!'],
        ['id' => 2, 'name' => 'Jane Smith', 'email' => 'jane@example.com', 'message' => 'Hi there!']
    ];
    if ($userenquiry) 
    {
        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                </tr>";
        foreach ($userenquiry as $enquiry) {
            echo "<tr>
                    <td>{$enquiry['id']}</td>
                    <td>{$enquiry['name']}</td>
                    <td>{$enquiry['email']}</td>
                    <td>{$enquiry['message']}</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "No enquiries found.";
    }
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Leafly_DB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, email, message FROM enquiries";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['message']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No enquiries found.";
}

$conn->close();
?>
    
</body>
</html>