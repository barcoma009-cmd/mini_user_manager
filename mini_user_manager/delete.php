<?php
include "db.php";
// Get selected user ID
$id = $_GET["id"] ?? 0;$stmt = $conn->prepare( "DELETE FROM users
WHERE id = ?"
);
// Bind ID
$stmt->bind_param( "i", $id
);
// Execute
$stmt->execute();
// Close statement
$stmt->close();
$conn->close();header("Location: index.php");
exit();
?>