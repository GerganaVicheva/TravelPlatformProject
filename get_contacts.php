<?php

$host = 'localhost';
$dbname = 'test_base';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query all contacts
$sql = "SELECT id, name, email, message, submitted_at FROM contacts ORDER BY submitted_at DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>All Contacts</h2>";
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Message</th><th>Created At</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['id']) . "</td>";
        echo "<td>" . htmlspecialchars($row['name']) . "</td>";
        echo "<td>" . htmlspecialchars($row['email']) . "</td>";
        echo "<td>" . nl2br(htmlspecialchars($row['message'])) . "</td>";
        echo "<td>" . htmlspecialchars($row['submitted_at']) . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No contacts found.";
}

$conn->close();

?>

