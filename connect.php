<?php
$conn = new mysqli(
    'localhost',
    'root',
    'root',
    'iteh-domaci-php'
);

if (!$conn) {
    die(mysqli_error($conn));
}
?>