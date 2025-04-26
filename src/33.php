<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "school-project";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM students";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<p>Name: " . $row["name"] . "</p>";
            echo "<p>Email: " . $row["email"] . "</p>";
            echo "<p>Age: " . $row["age"] . "</p>";
            echo "<p>Birthday: " . $row["birthday"] . "</p>";
        }
    } else {
        echo "No students found.";
    }

    $conn->close();
?>
