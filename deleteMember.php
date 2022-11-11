<?php
require 'connect.php';
require 'model/Member.php';

if (isset($_POST['deleteSend'])) {
    $unique = $_POST['deleteSend'];
    //$query = "delete from `member` where id=$unique";
    //$result = mysqli_query($conn, $query);
    Member::deleteMember($unique, $conn);
}

?>