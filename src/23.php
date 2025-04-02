<?php
// Connect to database
$conn = mysqli_connect("localhost", "username", "password", "database_name");

if ($conn) {
    echo "Connection established successfully";
} else {
    echo "Error: Unable to connect to the database.";
}
?>
