<?php
// Get the input from the user
$name = $_POST['username'];

// Check if the name is valid
if (strlen($name) > 3) {
    echo "Welcome, $name!";
} else {
    echo "Name too short.";
}
?>