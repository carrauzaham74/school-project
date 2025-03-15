
<?php
// Function to get a random integer between 1 and 10
function getRandomInt($max) {
  return rand(1, $max);
}

// Function to get a random string from an array of strings
function getRandomString($strings) {
  return $strings[array_rand($strings)];
}

// Example usage
$randomNumber = getRandomInt(10);
echo "Random number: $randomNumber";

$randomString = getRandomString(['apple', 'banana', 'cherry']);
echo "Random string: $randomString";
?>