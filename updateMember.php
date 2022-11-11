<?php
require 'connect.php';

if (isset($_POST['updateId'])) {
    $user_id = $_POST['updateId'];
    $query = "select * from `member` where id=$user_id";
    $result = mysqli_query($conn, $query);
    //$result = Member::getDetails($user_id, $conn);
    $rensponse = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $rensponse = $row;
    }
    echo json_encode($rensponse);
} else {
    $rensponse['status'] = 200;
    $rensponse['message'] = "Invalid or data not found";
}


if (isset($_POST['hiddenData'])) {

    $unique = $_POST['hiddenData'];
    $name = $_POST['updateName'];
    $email = $_POST['updateEmail'];
    $mobile = $_POST['updateMobile'];
    $place = $_POST['updatePlace'];

    $query = "update `member` set name='$name',email='$email',mobile='$mobile',place='$place' where id='$unique'";
    $result = mysqli_query($conn, $query);
    echo $result;
}
?>