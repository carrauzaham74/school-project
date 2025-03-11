 <?php 
$username = "John Doe";
$password = "Password123";
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
if (password_verify($password, $hashed_password)) {
    echo "$username is logged in";
} else {
    echo "$username is not logged in";
}
 ?>