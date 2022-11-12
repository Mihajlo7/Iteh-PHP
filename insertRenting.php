<?php
require 'connect.php';
require 'model/Renting.php';

if (isset($_POST['date']) && isset($_POST['isbn']) && isset($_POST['idBook']) && isset($_POST['idMember'])) {
    $date = $_POST['date'];
    $isbn = $_POST['isbn'];
    $idBook = $_POST['idBook'];
    $idMember = $_POST['idMember'];
    $renting = new Renting(1, "Aktivan", $date, $isbn, $idBook, $idMember);
    $result = Renting::addRenting($renting, $conn);
    echo ("<script>console.log('PHP: " . $result . "');</script>");
} else {
    echo "<h3>Nema knjige</h3>";
}
?>