<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Select all content
$sql = "SELECT title, content FROM MyTable";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "title: " . $row["title"]. " - Content: " . $row["content"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>