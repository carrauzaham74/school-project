<?php
$db = new mysqli('localhost', 'username', 'password', 'database_name');
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

$sql = "SELECT * FROM users WHERE id = ?";
$stmt = $db->prepare($sql);
$stmt->bind_param('i', $_POST['id']);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
if ($row) {
    echo $row['username'];
} else {
    echo "No such user";
}
?>
