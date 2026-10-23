<?php
include "db.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {$username = $_POST["username"];
$email = $_POST["email"];
// Prepare SQL statement
$stmt = $conn->prepare( "INSERT INTO users (username, email)
VALUES (?, ?)"
);
// Bind values
$stmt->bind_param( "ss", $username, $email
);
// Execute
$stmt->execute();
// Close statement
$stmt->close();
}
// Return to main page
$conn->close();
header("Location: index.php");
exit();
?>