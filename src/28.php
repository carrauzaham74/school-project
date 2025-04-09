<?php
    // Initialize and configure the MySQL database connection
    $db = new mysqli("localhost", "username", "password", "database_name");
    
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
?>
