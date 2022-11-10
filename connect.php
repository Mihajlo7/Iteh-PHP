<?php
$conn = new mysqli(
    'localhost',
    'root',
    'root',
    'iteh-domaci-php'
    );

if ($conn) {
    echo "Uspesna konekcija!";
} else {
    die(mysqli_error($conn));
}
?>