<?php
// Connect to MySQL database
$conn = new mysqli("localhost", "root", "", "school_project");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query example
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Name: " . $row["name"] . "<br>";
    }
} else {
    echo "No results found.";
}
$conn->close();
?>
