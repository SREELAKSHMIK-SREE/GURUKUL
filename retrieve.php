<?php
// Database connection parameters
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'gurukul';

// Create a database connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve question paper data from the database
$select_query = "SELECT file_name, file_path FROM question";
$result = $conn->query($select_query);

// Display the retrieved data
echo "<h2>Question Paper Patterns</h2>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $file_name = $row['file_name'];
        $file_path = $row['file_path'];

        echo "<p><a href='$file_path' target='_blank'>Question Paper: $file_name</a></p>";
    }
} else {
    echo "<p>No question paper patterns found.</p>";
}

// Close the database connection
$conn->close();
?>
