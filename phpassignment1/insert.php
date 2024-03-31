<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Validate form data and store in variables
$title = htmlspecialchars($_POST['title']);
$content = htmlspecialchars($_POST['content']);

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO MyTable (firstname, lastname, ID , companyname) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

// Set parameters and execute
$firstname = "John";
$lastname = "Doe";
$ID = 12345;
$companyname = "IBM";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
?>