<?php
require 'connect.php';

if (isset($_POST['deleteSend'])) {
    $unique = $_POST['deleteSend'];
    $query = "delete from `member` where id=$unique";
    $result = mysqli_query($conn, $query);
}

?>